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

    <!-- Logo -->
    <div class="site-header__logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="agile611-logo-link">
        <?php
        // If you use a custom logo in WP, prefer that:
        if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
          the_custom_logo();
        } else {
          // Fallback image – change to your own logo path if needed
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
    <nav class="agile611-main-nav" role="navigation" aria-label="<?php esc_attr_e( 'Menú principal', 'agile611' ); ?>">
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'primary',
          'container'      => '',
          'menu_class'     => 'agile611-main-nav__list',
          'menu_id'        => 'primary-menu', // used by aria-controls on the toggle
          'fallback_cb'    => false,
        )
      );
      ?>
    </nav>

    <!-- Header CTA -->
    <div class="site-header__cta">
      <a class="wp-element-button" href="<?php echo esc_url( home_url( '/contacto/' ) ); ?>">
        <?php esc_html_e( 'Empezar', 'agile611' ); ?>
      </a>
    </div>

  </div><!-- .site-header__inner -->
</header>

<?php
// You can keep the JS here or move it to an enqueued file.
?>
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