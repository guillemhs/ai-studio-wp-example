<?php
/**
 * Header template
 *
 * Restores original Agile611 logo and "Empezar" button,
 * and adds responsive mobile menu toggle.
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

<header class="site-header alignfull has-agile-deep-background-color has-background">
  <div class="site-header__inner">

    <!-- Logo (your original one) -->
    <div class="site-header__logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="agile611-logo-link">
        <img
          src="https://www.agile611.com/wp-content/uploads/2025/12/cq4MSRkbBToYUqB6TjDBrW.png"
          alt="<?php bloginfo( 'name' ); ?>"
          class="agile611-logo-img"
        />
      </a>
    </div>

    <!-- Mobile hamburger toggle (used on tablets/phones, hidden by CSS on desktop) -->
<button class="site-header__toggle" aria-expanded="false" aria-controls="primary-menu">
  <span class="site-header__toggle-bar"></span>
  <span class="site-header__toggle-bar"></span>
  <span class="site-header__toggle-bar"></span>
  <span class="screen-reader-text">
    Abrir menú
  </span>
</button>


    <!-- Navigation (same as your former header) -->
    <nav class="agile611-main-nav" aria-label="<?php esc_attr_e( 'Primary Menu', 'agile611' ); ?>">
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'primary',
          // keep your existing menu ID so it matches current menu assignment
          'menu_id'        => 'primary-menu', // changed from "menu-menu_top_es" to work with aria-controls
          'container'      => '',
          'menu_class'     => 'agile611-main-nav__list',
          'fallback_cb'    => false,
        )
      );
      ?>
    </nav>

    <!-- Header button (your original "Empezar" link + classes) -->
    <div class="site-header__cta">
      <a href="/contacto/"
         class="wp-block-button__link has-white-color has-agile-vibrant-background-color has-text-color has-background wp-element-button">
        Empezar
      </a>
    </div>

  </div>
</header>

<!-- Tiny JS to toggle the mobile menu -->
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