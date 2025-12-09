<?php
/**
 * Template for regular pages
 */

get_header();
?>

<!-- MAIN WRAPPER (dark background, like hero) -->
<!-- wp:group {"align":"full","tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"color":{"background":"#01003f"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull has-background" style="background-color:#01003f;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

	<!-- Inner container at wide width -->
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">

		<!-- Page title -->
		<!-- wp:post-title {"level":1,"style":{"typography":{"fontSize":"3rem","lineHeight":"1.1","fontWeight":"800"}},"textColor":"white"} /-->

		<!-- Optional separator -->
		<!-- wp:separator {"backgroundColor":"agile-vibrant","className":"is-style-wide"} /-->

		<!-- Page content -->
		<!-- wp:post-content {"layout":{"type":"constrained"},"style":{"typography":{"fontSize":"1.1rem"},"color":{"text":"#E5E7EB"}}} /-->

	</div>
	<!-- /wp:group -->

</main>
<!-- /wp:group -->

<?php
get_footer();
