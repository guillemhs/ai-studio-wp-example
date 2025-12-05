<?php
/**
 * Theme functions and definitions
 * @package AI_Studio_WP_Example
 */

add_action('after_setup_theme', function () {
  // i18n
  load_theme_textdomain('ai-studio-wp-example', get_template_directory() . '/languages');

  // Title tag
  add_theme_support('title-tag');

  // Thumbnails
  add_theme_support('post-thumbnails');
  if (!has_image_size('ai-studio-card')) {
    add_image_size('ai-studio-card', 1200, 630, true);
  }

  // HTML5 support
  add_theme_support('html5', array('search-form','comment-form','comment-list','gallery','caption','script','style'));

  // Block supports
  add_theme_support('align-wide');
  add_theme_support('responsive-embeds');
  add_theme_support('editor-styles');
  add_editor_style('style.css');

  // Menus
  register_nav_menus(array(
    'primary' => __('Primary Menu', 'ai-studio-wp-example'),
    'footer'  => __('Footer Menu', 'ai-studio-wp-example'),
  ));
});

add_action('after_setup_theme', function () {
  // Content width
  if (!isset($GLOBALS['content_width'])) {
    $GLOBALS['content_width'] = apply_filters('ai_studio_content_width', 1200);
  }
}, 0);

add_action('wp_enqueue_scripts', function () {
  $theme      = wp_get_theme();
  $theme_ver  = $theme ? ($theme->get('Version') ?: '1.0.0') : '1.0.0';
  $theme_uri  = get_template_directory_uri();
  $theme_path = get_template_directory();

  // style.css
  wp_enqueue_style('ai-studio-style', $theme_uri . '/style.css', array(), $theme_ver);

  // Optional JS bundle
  $app_js_rel  = '/assets/js/app.js';
  $app_js_path = $theme_path . $app_js_rel;
  $app_js_uri  = $theme_uri . $app_js_rel;

  if (file_exists($app_js_path)) {
    $ver = (string) @filemtime($app_js_path);
    if (empty($ver)) { $ver = $theme_ver; }
    wp_enqueue_script('ai-studio-app', $app_js_uri, array(), $ver, true);
  }
}, 20);

add_filter('body_class', function ($classes) {
  if (is_front_page()) { $classes[] = 'is-front-page'; }
  if (is_home() && !is_front_page()) { $classes[] = 'is-blog-index'; }
  return $classes;
});

add_filter('upload_mimes', function ($mimes) {
  if (current_user_can('manage_options')) {
    $mimes['svg'] = 'image/svg+xml';
  }
  return $mimes;
});