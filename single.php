<?php
/**
 * Single post template.
 *
 * Used for blog posts and custom post types that do not have a dedicated template.
 */

get_header();
?>
<main id="primary" class="site-main wp-block-group alignfull"
      style="
        padding-top:var(--wp--preset--spacing--60, 2.25rem);
        padding-bottom:var(--wp--preset--spacing--80, 5rem);
        padding-left:var(--wp--preset--spacing--40, 2rem);
        padding-right:var(--wp--preset--spacing--40, 2rem);
      ">

  <div class="wp-block-group alignwide">

    <?php
    if ( have_posts() ) :
      while ( have_posts() ) :
        the_post();
        ?>

        <header class="page-header" style="margin-bottom:var(--wp--preset--spacing--40, 1.5rem);">
          <h1 class="wp-block-post-title entry-title">
            <?php the_title(); ?>
          </h1>
        </header>

        <div class="entry-content wp-block-post-content">
          <?php
          the_content();

          wp_link_pages(
            array(
              'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'agile611' ),
              'after'  => '</div>',
            )
          );
          ?>
        </div>

        <?php
      endwhile;
    else :
      ?>

      <p><?php esc_html_e( 'No hay contenido disponible.', 'agile611' ); ?></p>

    <?php endif; ?>

  </div><!-- /.wp-block-group.alignwide -->
</main><!-- /#primary -->

<?php
get_footer();
