<?php
/**
 * Header template
 *
 * @package Agile611
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
  <div class="site-header__inner">

    <!-- Logo area -->
    <div class="site-header__logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="agile611-logo-link">
        <?php
        /**
         * Prefer the WordPress "Custom Logo" (Appearance > Customize > Site Identity),
         * but fall back to a static logo file if not set.
         */
        if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
          the_custom_logo();
        } else {
          ?>
          <img
            src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/agile611-logo.png' ); ?>"
            class="agile611-logo-img"
            alt="<?php bloginfo( 'name' ); ?>"
          />
          <?php
        }
        ?>
      </a>
    </div>

    <!-- Mobile hamburger toggle -->
    <button class="site-header__toggle" aria-expanded="false" aria-controls="primary-menu">
      <span class="site-header__toggle-bar"></span>
      <span class="site-header__toggle-bar"></span>
      <span class="site-header__toggle-bar"></span>
      <span class="screen-reader-text">
        <?php esc_html_e( 'Abrir menú', 'agile611' ); ?>
      </span>
    </button>

    <!-- Main navigation -->
    <nav class="agile611-main-nav"
         role="navigation"
         aria-label="<?php esc_attr_e( 'Menú principal', 'agile611' ); ?>">
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'primary',
          'container'      => '',
          'menu_class'     => 'agile611-main-nav__list',
          'menu_id'        => 'primary-menu', // referenced by aria-controls on the toggle
          'fallback_cb'    => false,          // no default page list – keeps it clean
        )
      );
      ?>
    </nav>

    <!-- Header CTA button -->
    <div class="site-header__cta">
      <a class="wp-element-button" href="<?php echo esc_url( home_url( '/contacto/' ) ); ?>">
        <?php esc_html_e( 'Empezar', 'agile611' ); ?>
      </a>
    </div>

  </div><!-- .site-header__inner -->
</header>

<script>
document.addEventListener('DOMContentLoaded', function () {
  var toggle = document.querySelector('.site-header__toggle');
  var body   = document.body;

  if (!toggle) return;

  toggle.addEventListener('click', function () {
    var isOpen = body.classList.toggle('menu-open');
    toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
  });
});
</script>
