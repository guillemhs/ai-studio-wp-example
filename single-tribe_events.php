<?php
/**
 * Single Event Template for The Events Calendar
 *
 * Used for post type "tribe_events".
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
echo '<div style="background:#ffeb3b;padding:10px;text-align:center;">DEBUG: Using single-tribe_events.php</div>';

?>

<?php
// Show WooCommerce notices on this event page (no conditions, for now).
?>
<div class="woocommerce-notices-wrapper">
    <?php
    if ( function_exists( 'woocommerce_output_all_notices' ) ) {
        woocommerce_output_all_notices();
    } elseif ( function_exists( 'wc_print_notices' ) ) {
        wc_print_notices();
    } else {
        // Debug text to confirm the template is being used
        echo '<p style="color:red">WooCommerce notice functions not available.</p>';
    }
    ?>
</div>

<main id="primary" class="site-main" role="main">
  <section class="content-list alignwide container mx-auto px-4">
    <?php
    if ( function_exists( 'tribe_get_template_part' ) ) {
        tribe_get_template_part( 'single-event' );

    } elseif ( function_exists( 'tribe_get_view' ) ) {
        tribe_get_view( 'single-event' );

    } else {
        // Fallback: basic loop
        if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>
                <article <?php post_class( 'py-6 border-b border-gray-200' ); ?>>
                  <h1 class="font-heading text-3xl mb-2"><?php the_title(); ?></h1>
                  <div class="prose max-w-none">
                    <?php the_content(); ?>
                  </div>
                </article>
            <?php endwhile;
        else : ?>
            <p><?php esc_html_e( 'No hay eventos disponibles.', 'agile611' ); ?></p>
        <?php endif;
    }
    ?>
  </section>
</main>

<?php get_footer();