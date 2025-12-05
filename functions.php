<?php
/**
 * Theme functions and definitions
 *
 * @package AI_Studio_WP_Example
 */

if ( ! defined( 'AI_STUDIO_THEME_VERSION' ) ) {
  // Fallback version; better to rely on style.css version header, but this is fine for cache-busting.
  define( 'AI_STUDIO_THEME_VERSION', wp_get_theme()->get( 'Version' ) ?: '1.0.0' );
}

/**
 * Theme setup: supports, menus, editor.
 */
function ai_studio_theme_setup() {
  // Make theme available for translation.
  load_theme_textdomain( 'ai-studio-wp-example', get_template_directory() . '/languages' );

  // Let WordPress manage the document title.
  add_theme_support( 'title-tag' );

  // Post thumbnails and image sizes.
  add_theme_support( 'post-thumbnails' );
  add_image_size( 'ai-studio-card', 1200, 630, true );

  // HTML5 markup support.
  add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style' ) );

  // Wide and full alignment for blocks.
  add_theme_support( 'align-wide' );

  // Responsive embeds.
  add_theme_support( 'responsive-embeds' );

  // Editor styles (use theme.json plus optional editor stylesheet).
  add_theme_support( 'editor-styles' );
  add_editor_style( 'style.css' );

  // Navigation menus.
  register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'ai-studio-wp-example' ),
    'footer'  => __( 'Footer Menu', 'ai-studio-wp-example' ),
  ) );
}
add_action( 'after_setup_theme', 'ai_studio_theme_setup' );

/**
 * Enqueue front-end styles and scripts.
 */
function ai_studio_enqueue_assets() {
  $theme_uri  = get_template_directory_uri();
  $theme_path = get_template_directory();

  // Main stylesheet from style.css (uses theme version for cache-busting).
  wp_enqueue_style(
    'ai-studio-style',
    $theme_uri . '/style.css',
    array(),
    AI_STUDIO_THEME_VERSION
  );

  // If you have a compiled JS bundle (e.g., from Vite) place it in /assets/js/app.js.
  $app_js_rel  = '/assets/js/app.js';
  $app_js_path = $theme_path . $app_js_rel;
  $app_js_uri  = $theme_uri . $app_js_rel;

  if ( file_exists( $app_js_path ) ) {
    // Version with filemtime for reliable cache-busting.
    $ver = (string) filemtime( $app_js_path );
    wp_enqueue_script(
      'ai-studio-app',
      $app_js_uri,
      array(), // Add 'wp-element' if you rely on React from WP.
      $ver,
      true
    );
  }
}
add_action( 'wp_enqueue_scripts', 'ai_studio_enqueue_assets' );

/**
 * Dequeue block library if your own CSS fully replaces it (optional).
 * Comment out if you rely on default block styles.
 */
// function ai_studio_optimize_assets() {
//   wp_dequeue_style( 'wp-block-library' );
// }
// add_action( 'wp_enqueue_scripts', 'ai_studio_optimize_assets', 100 );

/**
 * Add a small body class helper for styling contexts.
 */
function ai_studio_body_classes( $classes ) {
  if ( is_front_page() ) {
    $classes[] = 'is-front-page';
  }
  if ( is_home() && ! is_front_page() ) {
    $classes[] = 'is-blog-index';
  }
  return $classes;
}
add_filter( 'body_class', 'ai_studio_body_classes' );

/**
 * Allow SVG uploads for admins only (optional).
 */
function ai_studio_mime_types( $mimes ) {
  if ( current_user_can( 'manage_options' ) ) {
    $mimes['svg'] = 'image/svg+xml';
  }
  return $mimes;
}
add_filter( 'upload_mimes', 'ai_studio_mime_types' );

/**
 * Set content width for embeds and images.
 */
function ai_studio_content_width() {
  $GLOBALS['content_width'] = apply_filters( 'ai_studio_content_width', 1200 );
}
add_action( 'after_setup_theme', 'ai_studio_content_width', 0 );
