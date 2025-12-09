<?php
if (!defined('ABSPATH')) exit;

add_action('after_setup_theme', function () {
  load_theme_textdomain('ai-studio-wp-example', get_template_directory() . '/languages');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', array('search-form','comment-form','comment-list','gallery','caption','script','style'));
  add_theme_support('align-wide');
  add_theme_support('responsive-embeds');
  add_theme_support('editor-styles');
  add_editor_style('style.css');

  register_nav_menus(array(
    'primary' => __('Primary Menu', 'ai-studio-wp-example'),
    'footer'  => __('Footer Menu', 'ai-studio-wp-example'),
  ));
});

add_action('wp_enqueue_scripts', function () {
  $theme      = wp_get_theme();
  $version    = $theme ? ($theme->get('Version') ?: '1.0.0') : '1.0.0';
  $theme_uri  = get_template_directory_uri();
  $theme_path = get_template_directory();

  wp_enqueue_style('ai-studio-style', $theme_uri . '/style.css', array(), $version);

  // Optional bundle if you have one
  $app_js_rel  = '/assets/js/app.js';
  $app_js_path = $theme_path . $app_js_rel;
  $app_js_uri  = $theme_uri . $app_js_rel;
  if (file_exists($app_js_path)) {
    $ver = (string) @filemtime($app_js_path) ?: $version;
    wp_enqueue_script('ai-studio-app', $app_js_uri, array(), $ver, true);
  }
});

// In functions.php
function agile611_year_shortcode() {
    return date('Y');
}
add_shortcode('agile611_year', 'agile611_year_shortcode');
add_filter( 'the_content', 'do_shortcode' );
