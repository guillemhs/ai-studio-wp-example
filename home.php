<?php
/**
 * Template for the main blog posts index (Posts page).
 * Uses the "Posts page" set under Settings → Reading.
 */

get_header(); ?>

<main id="primary" class="site-main" role="main">
  <section class="content-list alignwide container mx-auto px-4">

    <article class="entry py-6 post-0 page type-page status-publish hentry">
      <header class="entry-header">
        <h1 class="entry-title font-heading text-3xl md:text-4xl">
          <?php
          // Title of the page assigned as "Posts page"
          $blog_page_id = get_option( 'page_for_posts' );
          echo $blog_page_id ? esc_html( get_the_title( $blog_page_id ) ) : esc_html__( 'Blog', 'agile611' );
          ?>
        </h1>
      </header>

      <div class="entry-content prose max-w-none">

        <?php if ( have_posts() ) : ?>

          <?php
          // Loop through posts.
          while ( have_posts() ) :
            the_post();
          ?>
            <section <?php post_class( 'blog-archive-item py-6 border-b border-gray-200' ); ?>>

              <h2 class="font-heading text-2xl mb-1">
                <a class="no-underline hover:underline" href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </h2>

              <p class="text-sm text-gray-500 mb-3">
                <?php echo esc_html( get_the_date() ); ?>
              </p>

              <div class="prose max-w-none">
                <?php the_excerpt(); ?>
              </div>

            </section>
          <?php endwhile; ?>

          <div class="pagination my-8">
            <?php
            the_posts_pagination(
              array(
                'mid_size'  => 2,
                'prev_text' => __( '« Previous', 'agile611' ),
                'next_text' => __( 'Next »', 'agile611' ),
              )
            );
            ?>
          </div>

        <?php else : ?>

          <p><?php esc_html_e( 'No hay entradas todavía.', 'agile611' ); ?></p>

        <?php endif; ?>

      </div><!-- .entry-content -->
    </article>

  </section><!-- .content-list -->
</main><!-- #primary -->

<?php get_footer(); ?>
