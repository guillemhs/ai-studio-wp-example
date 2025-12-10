<?php
/**
 * Template for regular pages
 */

get_header();
?>

<!-- MAIN WRAPPER: full-width band, but content centered and padded -->
<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull site-main"
  style="
    padding-top:var(--wp--preset--spacing--60);
    padding-bottom:var(--wp--preset--spacing--80);
    padding-left:var(--wp--preset--spacing--40);
    padding-right:var(--wp--preset--spacing--40);
  ">

  <!-- Inner container constrained to wide width -->
  <!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
  <div class="wp-block-group alignwide">

    <!-- Page title -->
    <!-- wp:post-title {"level":1,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} /-->

    <!-- Page content -->
    <!-- wp:post-content {"layout":{"type":"constrained"}} /-->

  </div>
  <!-- /wp:group -->

</main>
<!-- /wp:group -->

<?php
get_footer();