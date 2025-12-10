<?php
/**
 * Main index template – fallback for all views.
 */

get_header(); ?>

<main id="primary" class="site-main" role="main">
  <section class="content-list alignwide container mx-auto px-4">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class( 'py-6 border-b border-gray-200' ); ?>>
          <h2 class="font-heading text-2xl mb-1">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h2>

          <p class="text-sm text-gray-500 mb-2">
            <?php echo esc_html( get_the_date() ); ?>
          </p>

          <div class="prose max-w-none">
            <?php
            // On single pages (including single events) show full content
            if ( is_singular() ) {
              the_content();
            } else {
              the_excerpt();
            }
            ?>
          </div>
        </article>
      <?php endwhile; ?>
    <?php else : ?>
      <p>No hay contenido disponible.</p>
    <?php endif; ?>
  </section>
</main>

<?php get_footer(); ?>
