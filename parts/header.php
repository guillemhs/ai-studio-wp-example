<?php
/**
 * Header template
 * @package AI_Studio_WP_Example
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header alignfull has-agile-deep-background-color has-background" style="padding:1rem var(--wp--preset--spacing--40);position:sticky;top:0;">
  <div class="site-header__inner" style="display:flex;align-items:center;justify-content:space-between;">

    <!-- Logo -->
    <div class="site-header__logo">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="agile611-logo-link">
        <img
          src="https://www.agile611.com/wp-content/uploads/2020/09/cropped-logo-header.png"
          alt="<?php bloginfo('name'); ?>"
          class="agile611-logo-img"
        />
      </a>
    </div>

    <!-- Navigation -->
    <nav class="agile611-main-nav" aria-label="<?php esc_attr_e('Primary Menu', 'ai-studio-wp-example'); ?>">
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'primary',
          'container'      => false,
          'menu_class'     => 'agile611-main-nav__list',
          'fallback_cb'    => false,
        )
      );
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