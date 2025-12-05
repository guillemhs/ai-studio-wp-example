<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php
// If you prefer WP to build the <title>, enable add_theme_support('title-tag') in functions.php.
wp_head();
?>

<!-- Google Fonts: Work Sans & Nunito -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&family=Work+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

<!-- Tailwind CSS (CDN) -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Tailwind Config -->
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          agile: {
            bg: '#F5F5F5',
            text: '#242424',
            primary: '#057EB5',
            vibrant: '#00B2E9',
            green: '#499497',
            turq: '#4CB8C9',
            deep: '#01003f',
          }
        },
        fontFamily: {
          sans: ['Nunito', 'sans-serif'],
          heading: ['Work Sans', 'sans-serif'],
        }
      }
    }
  }
</script>
</head>
<body <?php body_class('bg-agile-bg text-agile-text antialiased'); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
  <div class="container mx-auto px-4 py-4 flex items-center justify-between">
    <a class="site-brand font-heading text-xl" href="<?php echo esc_url(home_url('/')); ?>">
      <?php bloginfo('name'); ?>
    </a>

    <nav class="site-nav site-nav--primary" aria-label="<?php esc_attr_e('Primary Menu', 'ai-studio-wp-example'); ?>">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'primary',
        'container'      => false,
        'menu_class'     => 'primary-menu flex gap-4',
        'fallback_cb'    => 'wp_page_menu',
        'depth'          => 2,
      ));
      ?>
    </nav>
  </div>
</header>