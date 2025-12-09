<?php
/**
 * Header template
 */
?><!doctype html>
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

    <!-- Logo -->
    <div class="site-header__logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="agile611-logo-link">
        <img
          src="https://www.agile611.com/wp-content/uploads/2020/09/cropped-logo-header.png"
          alt="<?php bloginfo( 'name' ); ?>"
          class="agile611-logo-img"
        />
      </a>
    </div>

    <!-- Navigation (classic menu named "menu_top_es" or assign in admin) -->
    <nav class="agile611-main-nav" aria-label="<?php esc_attr_e( 'Primary Menu', 'agile611' ); ?>">
      <?php
      wp_nav_menu( array(
        'theme_location' => 'primary',
        'menu_id'        => 'menu-menu_top_es',
        'container'      => '',
        'menu_class'     => 'agile611-main-nav__list',
        'fallback_cb'    => false,
      ) );
      ?>
    </nav>

    <!-- Header button -->
    <div class="site-header__cta">
      <a href="#contacto" class="wp-block-button__link has-white-color has-agile-vibrant-background-color has-text-color has-background wp-element-button">
        Empezar
      </a>
    </div>

  </div>
</header>
