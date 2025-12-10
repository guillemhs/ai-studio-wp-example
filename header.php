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
          src="https://www.agile611.com/wp-content/uploads/2020/09/cropped-logo-header.png"
          alt="<?php bloginfo( 'name' ); ?>"
          class="agile611-logo-img"
        />
      </a>
    </div>

    <!-- Mobile hamburger toggle -->
    <button class="site-header__toggle" aria-expanded="false" aria-controls="primary-menu">
      <span class="site-header__toggle-bar"></span>
      <span class="site-header__toggle-bar"></span>
      <span class="site-header__toggle-bar"></span>
      <span class="screen-reader-text">Abrir menú</span>
    </button>

    <!-- Navigation -->
    <nav class="agile611-main-nav" aria-label="<?php esc_attr_e( 'Primary Menu', 'agile611' ); ?>">
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'primary',
          'menu_id'        => 'primary-menu',
          'container'      => '',
          'menu_class'     => 'agile611-main-nav__list',
          'fallback_cb'    => false,
        )
      );
      ?>
    </nav>

    <!-- Header CTA -->
    <div class="site-header__cta">
      <a href="/contacto/"
         class="wp-block-button__link has-white-color has-agile-vibrant-background-color has-text-color has-background wp-element-button">
        Empezar
      </a>
    </div>

  </div>
</header>

<header class="site-header alignfull has-agile-deep-background-color has-background">
  <div class="site-header__inner">

    <!-- Logo -->
    <div class="site-header__logo">…</div>


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