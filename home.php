<?php
/**
 * Home template – Blog index
 *
 * Shows the list of latest posts at /blog/
 */

get_header();
?>

<main id="primary" class="site-main" role="main">
  <section class="content-list alignwide container mx-auto px-4">

    <article class="entry py-6 post-0 page type-page status-publish hentry">
      <header class="entry-header">
        <h1 class="entry-title font-heading text-3xl md:text-4xl">
          Blog
        </h1>
      </header>

      <div class="entry-content prose max-w-none">

        <?php if ( have_posts() ) : ?>

          <?php
          // Loop posts
          while ( have_posts() ) :
            the_post();
          ?>
            <section <?php post_class( 'blog-archive-item' ); ?>>
              <a href="<?php the_permalink(); ?>" class="blog-card">

                <?php if ( has_post_thumbnail() ) : ?>
                  <div class="blog-card__thumb">
                    <?php the_post_thumbnail( 'medium_large' ); ?>
                  </div>
                <?php else : ?>
                  <div class="blog-card__thumb blog-card__thumb--placeholder">
                    <span>Agile611</span>
                  </div>
                <?php endif; ?>

                <div class="blog-card__body">
                  <h2 class="blog-card__title">
                    <?php the_title(); ?>
                  </h2>

                  <p class="blog-card__meta">
                    <?php echo get_the_date(); ?>
                  </p>

                  <div class="blog-card__excerpt">
                    <?php the_excerpt(); ?>
                  </div>
                </div>

              </a>
            </section>
          <?php endwhile; ?>

          <div class="pagination my-8">
            <?php
            the_posts_pagination(
              array(
                'mid_size'  => 2,
                'prev_text' => __( '« Anterior', 'agile611' ),
                'next_text' => __( 'Siguiente »', 'agile611' ),
              )
            );
            ?>
          </div>

        <?php else : ?>

          <p><?php esc_html_e( 'No hay entradas disponibles por el momento.', 'agile611' ); ?></p>

        <?php endif; ?>

      </div><!-- .entry-content -->
    </article>

  </section><!-- .content-list -->
</main><!-- #primary -->

<?php
get_footer();
