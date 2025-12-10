<?php
/**
 * Single Event Template for The Events Calendar
 *
 * Lets TEC handle the inner markup, while we keep our header/footer.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main" role="main">
  <section class="content-list alignwide container mx-auto px-4">
    <?php
    // Let The Events Calendar load its default single event template.
    tribe_get_template_part( 'single-event' );
    ?>
  </section>
</main>

<?php
get_footer();
