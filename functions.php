<?php
/**
 * Theme functions and definitions
 *
 * @package ai-studio-wp-example
 */

if ( ! function_exists( 'ai_studio_setup' ) ) :
	function ai_studio_setup() {
		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// Register navigation menus.
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'ai-studio' ),
			'footer'  => __( 'Footer Menu', 'ai-studio' ),
		) );

		// Switch default core markup for search form, comment form, and comments
		// to output valid HTML5.
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

		// Add support for selective refresh for widgets in the Customizer.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for editor styles (if an editor stylesheet exists).
		add_theme_support( 'editor-styles' );
		if ( file_exists( get_theme_file_path( 'style-editor.css' ) ) ) {
			add_editor_style( 'style-editor.css' );
		}

		// Load theme textdomain for translations.
		load_theme_textdomain( 'ai-studio', get_template_directory() . '/languages' );
	}
endif;
add_action( 'after_setup_theme', 'ai_studio_setup' );


/**
 * Register widget areas.
 */
function ai_studio_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'ai-studio' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'ai-studio' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ai_studio_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function ai_studio_scripts() {
	// Main stylesheet (style.css in theme root)
	wp_enqueue_style( 'ai-studio-style', get_stylesheet_uri(), array(), filemtime( get_stylesheet_directory() . '/style.css' ) );

	// If there's a built JS file (for example from Vite or a bundler), enqueue it.
	$dist_js = get_template_directory() . '/dist/main.js';
	if ( file_exists( $dist_js ) ) {
		wp_enqueue_script( 'ai-studio-main', get_template_directory_uri() . '/dist/main.js', array(), filemtime( $dist_js ), true );
		wp_localize_script( 'ai-studio-main', 'aiStudioData', array(
			'restUrl' => esc_url_raw( rest_url() ),
			'nonce'   => wp_create_nonce( 'wp_rest' ),
		) );
	}

	// Threaded comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ai_studio_scripts' );


/**
 * Helper: safe filemtime-based versioning for assets.
 * Usage: ai_studio_asset_version( get_template_directory() . '/dist/main.js' )
 */
function ai_studio_asset_version( $file ) {
	if ( file_exists( $file ) ) {
		return filemtime( $file );
	}
	return null;
}


/**
 * Include optional files if present.
 */
$optional_files = array(
	'/inc/template-tags.php',
	'/inc/extras.php',
	'/inc/customizer.php',
	'/inc/block-patterns.php',
);
foreach ( $optional_files as $file ) {
	$path = get_theme_file_path( $file );
	if ( file_exists( $path ) ) {
		require_once $path;
	}
}

