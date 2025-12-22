<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Theme setup.
 */
function agile611_theme_setup() {

    // Make theme available for translation.
    load_theme_textdomain( 'agile611', get_template_directory() . '/languages' );

    // Basic theme supports.
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
        )
    );
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'style.css' );

    // Menus.
    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu', 'agile611' ),
            'footer'  => __( 'Footer Menu', 'agile611' ),
        )
    );
}
add_action( 'after_setup_theme', 'agile611_theme_setup' );

/**
 * Enqueue theme styles and scripts.
 */
function agile611_enqueue_assets() {

    $theme      = wp_get_theme();
    $version    = $theme ? ( $theme->get( 'Version' ) ?: '1.0.0' ) : '1.0.0';
    $theme_uri  = get_template_directory_uri();
    $theme_path = get_template_directory();

    // Main stylesheet.
    wp_enqueue_style(
        'agile611-style',
        $theme_uri . '/style.css',
        array(),
        $version
    );

    // Optional app.js bundle.
    $app_js_rel  = '/assets/js/app.js';
    $app_js_path = $theme_path . $app_js_rel;
    $app_js_uri  = $theme_uri . $app_js_rel;

    if ( file_exists( $app_js_path ) ) {
        $ver = (string) @filemtime( $app_js_path ) ?: $version;
        wp_enqueue_script(
            'agile611-app',
            $app_js_uri,
            array(),
            $ver,
            true
        );
    }

    // Font Awesome (if you need it).
    wp_enqueue_style(
        'agile611-font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',
        array(),
        '4.7.0'
    );
}
add_action( 'wp_enqueue_scripts', 'agile611_enqueue_assets' );

/**
 * Shortcode: [agile611_year]
 */
function agile611_year_shortcode() {
    return date( 'Y' );
}
add_shortcode( 'agile611_year', 'agile611_year_shortcode' );

// Allow shortcodes inside post content.
add_filter( 'the_content', 'do_shortcode' );

/**
 * Remove Event Calendar Google Fonts (if that plugin is active).
 */
function agile611_remove_ect_google_fonts() {
    wp_dequeue_style( 'ect-google-font-css' );
    wp_deregister_style( 'ect-google-font-css' );
}
add_action( 'wp_enqueue_scripts', 'agile611_remove_ect_google_fonts', 20 );

// Nunito font
wp_enqueue_style(
    'agile611-google-fonts',
    'https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap',
    array(),
    null
);

function agile611_register_menus() {
    register_nav_menus(
        array(
            'menu-1' => __( 'Primary Menu', 'agile611' ),
            'menu-2' => __( 'Footer', 'agile611' ),
        )
    );
}
add_action( 'after_setup_theme', 'agile611_register_menus' );

add_theme_support( 'custom-logo', array(
  'height'      => 80,
  'width'       => 240,
  'flex-height' => true,
  'flex-width'  => true,
) );

// Disable related products on single product pages
add_filter( 'woocommerce_related_products_args', function( $args ) {
    $args['posts_per_page'] = 0;
    $args['columns']        = 0;
    return $args;
} );

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

// Ensure WooCommerce notices show on custom event pages
add_action( 'wp', function() {
    if ( is_singular( 'evento' ) ) { // adjust 'evento' to your event post type if different
        add_action( 'woocommerce_before_single_product', 'woocommerce_output_all_notices', 5 );
    }
});

add_action( 'wp', function () {
    // Only on single tribe events
    if ( ! function_exists( 'WC' ) || ! is_singular( 'tribe_events' ) ) {
        return;
    }

    // Hook into the content area; adjust the hook if your theme uses a different one.
    add_action( 'tribe_events_single_event_before_the_content', function () {
        if ( function_exists( 'woocommerce_output_all_notices' ) ) {
            echo '<div class="woocommerce-notices-wrapper">';
            woocommerce_output_all_notices();
            echo '</div>';
        } elseif ( function_exists( 'wc_print_notices' ) ) {
            echo '<div class="woocommerce-notices-wrapper">';
            wc_print_notices();
            echo '</div>';
        }
    }, 5 );
});
