<?php
/**
 * Main index template
 * @package AI_Studio_WP_Example
 */
get_header();
?>

<main id="primary" class="site-main" role="main">
  <section class="site-hero alignwide">
    <div class="site-hero__inner container mx-auto px-4 py-10">
      <h1 class="site-hero__title font-heading text-3xl md:text-4xl">
        <?php echo esc_html(get_bloginfo('name')); ?>
      </h1>
      <?php if ($desc = get_bloginfo('description', 'display')) : ?>
        <p class="site-hero__tagline mt-2 text-lg"><?php echo esc_html($desc); ?></p>
      <?php endif; ?>
    </div>
  </section>

  <section class="content-list alignwide container mx-auto px-4">
    <?php if (have_posts()) : ?>

      <?php if (is_home() && !is_front_page()) : ?>
        <header class="page-header sr-only">
          <h2 class="page-title"><?php single_post_title(); ?></h2>
        </header>
      <?php endif; ?>

      <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('entry py-6 border-b border-gray-200'); ?>>
          <header class="entry-header">
            <?php if (is_singular()) : ?>
              <h2 class="entry-title font-heading text-2xl"><?php the_title(); ?></h2>
            <?php else : ?>
              <h2 class="entry-title font-heading text-2xl">
                <a href="<?php the_permalink(); ?>" rel="bookmark" class="hover:underline"><?php the_title(); ?></a>
              </h2>
            <?php endif; ?>
          </header>

          <?php if (has_post_thumbnail()) : ?>
            <figure class="entry-media my-4">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('large', array('loading' => 'lazy', 'class' => 'w-full h-auto rounded')); ?>
              </a>
            </figure>
          <?php endif; ?>

          <div class="entry-content prose max-w-none">
            <?php
            if (is_singular()) {
              the_content();
              wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'ai-studio-wp-example'),
                'after'  => '</div>',
              ));
            } else {
              the_excerpt();
            }
            ?>
          </div>

          <footer class="entry-footer mt-3 text-sm text-gray-600">
            <?php
            printf(
              esc_html__('Posted on %s', 'ai-studio-wp-example'),
              '<time datetime="' . esc_attr(get_the_date(DATE_W3C)) . '">' . esc_html(get_the_date()) . '</time>'
            );
            ?>
          </footer>
        </article>
      <?php endwhile; ?>

      <div class="pagination my-8">
        <?php
        the_posts_pagination(array(
          'mid_size'  => 2,
          'prev_text' => esc_html__('« Previous', 'ai-studio-wp-example'),
          'next_text' => esc_html__('Next »', 'ai-studio-wp-example'),
        ));
        ?>
      </div>

    <?php else : ?>
      <section class="no-results not-found py-10">
        <header class="page-header">
          <h2 class="page-title font-heading text-2xl"><?php esc_html_e('Nothing Found', 'ai-studio-wp-example'); ?></h2>
        </header>
        <div class="page-content mt-2">
          <p><?php esc_html_e('It seems we can’t find what you’re looking for. Try a search.', 'ai-studio-wp-example'); ?></p>
          <?php get_search_form(); ?>
        </div>
      </section>
    <?php endif; ?>
  </section>
</main>

<?php
get_footer();