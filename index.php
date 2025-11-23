<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a
 * query, e.g., it puts together the home page when no home.php file
 * exists.
 *
 * @package ai-studio-wp-example
 */

get_header();
?>

<main id="site-content" role="main" class="site-main">
	<?php if ( have_posts() ) : ?>

		<?php if ( is_home() && ! is_front_page() ) : ?>
			<header class="page-header">
				<h1 class="page-title"><?php single_post_title(); ?></h1>
			</header>
		<?php endif; ?>

		<?php
		/* Start the Loop */
		while ( have_posts() ) :
			the_post();

			/*
			 * Include the Post-Type-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called `content-{$post_type}.php` and that will be used instead.
			 */
			$slug = get_post_type();
			if ( locate_template( "parts/content-{$slug}.php" ) ) {
				get_template_part( 'parts/content', $slug );
			} elseif ( locate_template( 'parts/content.php' ) ) {
				get_template_part( 'parts/content' );
			} else {
				// Fallback markup if no content template exists
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
					</header>
					<div class="entry-content">
						<?php the_excerpt(); ?>
					</div>
					<footer class="entry-footer">
						<a href="<?php the_permalink(); ?>"><?php esc_html_e( 'Continue reading', 'ai-studio' ); ?></a>
					</footer>
				</article>
				<?php
			}

		endwhile;

		// Posts pagination
		the_posts_pagination( array(
			'mid_size'  => 1,
			'prev_text' => __( 'Previous', 'ai-studio' ),
			'next_text' => __( 'Next', 'ai-studio' ),
		) );

	else :

		// If no content, include the "No posts found" template.
		if ( locate_template( 'parts/content-none.php' ) ) {
			get_template_part( 'parts/content', 'none' );
		} else {
			?>
			<section class="no-results not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'ai-studio' ); ?></h1>
				</header>
				<div class="page-content">
					<p><?php esc_html_e( 'It seems we can’t find what you’re looking for. Perhaps searching can help.', 'ai-studio' ); ?></p>
					<?php get_search_form(); ?>
				</div>
			</section>
			<?php
		}

	endif;
	?>
</main>

<?php
get_sidebar();
get_footer();

