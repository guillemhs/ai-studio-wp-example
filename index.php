<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Agile611 | Human + Efficient</title>
    
    <!-- Google Fonts: Work Sans & Nunito -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&family=Work+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Tailwind Config -->
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              agile: {
                bg: '#F5F5F5',       // White Smoke
                text: '#242424',     // Black/Dark Grey
                primary: '#057EB5',  // Dark Blue
                vibrant: '#00B2E9',  // Blue
                green: '#499497',    // Nature Green
                turq: '#4CB8C9',     // Nature Turquoise
                deep: '#01003f',     // Deep Dark Blue
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
  <script type="importmap">
{
  "imports": {
    "react-dom/": "https://aistudiocdn.com/react-dom@^19.2.0/",
    "react": "https://aistudiocdn.com/react@^19.2.0",
    "lucide-react": "https://aistudiocdn.com/lucide-react@^0.554.0",
    "react/": "https://aistudiocdn.com/react@^19.2.0/"
  }
}
</script>
</head>
  <body class="bg-agile-bg text-agile-text antialiased">
    <div id="root"></div>
  </body>
</html>
<?php
/**
 * Main index template
 * @package AI_Studio_WP_Example
 */

get_header();
?>

<main id="primary" class="site-main" role="main">

  <!-- Primary Navigation (uses registered 'primary' menu) -->
  <nav class="site-nav site-nav--primary" aria-label="<?php esc_attr_e( 'Primary Menu', 'ai-studio-wp-example' ); ?>">
    <?php
    wp_nav_menu( array(
      'theme_location' => 'primary',
      'container'      => 'div',
      'container_class'=> 'primary-menu__container',
      'menu_class'     => 'primary-menu',
      'fallback_cb'    => 'wp_page_menu', // fallback shows pages if no menu assigned
      'depth'          => 2,
    ) );
    ?>
  </nav>

  <!-- Hero / Intro -->
  <section class="site-hero alignwide">
    <div class="site-hero__inner">
      <h1 class="site-hero__title"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1>
      <?php
      $description = get_bloginfo( 'description', 'display' );
      if ( $description ) :
      ?>
        <p class="site-hero__tagline"><?php echo esc_html( $description ); ?></p>
      <?php endif; ?>
    </div>
  </section>

  <!-- Content Loop -->
  <section class="content-list alignwide">
    <?php if ( have_posts() ) : ?>

      <?php if ( is_home() && ! is_front_page() ) : ?>
        <header class="page-header">
          <h2 class="page-title screen-reader-text"><?php single_post_title(); ?></h2>
        </header>
      <?php endif; ?>

      <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
          <header class="entry-header">
            <?php if ( is_singular() ) : ?>
              <h2 class="entry-title"><?php the_title(); ?></h2>
            <?php else : ?>
              <h2 class="entry-title">
                <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
              </h2>
            <?php endif; ?>
          </header>

          <?php if ( has_post_thumbnail() ) : ?>
            <figure class="entry-media">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'large', array( 'loading' => 'lazy' ) ); ?>
              </a>
            </figure>
          <?php endif; ?>

          <div class="entry-content">
            <?php
            if ( is_singular() ) {
              the_content();
              wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ai-studio-wp-example' ),
                'after'  => '</div>',
              ) );
            } else {
              the_excerpt();
            }
            ?>
          </div>

          <footer class="entry-footer">
            <span class="entry-meta">
              <?php
              printf(
                esc_html__( 'Posted on %s', 'ai-studio-wp-example' ),
                '<time datetime="' . esc_attr( get_the_date( DATE_W3C ) ) . '">' . esc_html( get_the_date() ) . '</time>'
              );
              ?>
            </span>
          </footer>
        </article>
      <?php endwhile; ?>

      <?php
      the_posts_pagination( array(
        'mid_size'  => 2,
        'prev_text' => esc_html__( '« Previous', 'ai-studio-wp-example' ),
        'next_text' => esc_html__( 'Next »', 'ai-studio-wp-example' ),
      ) );
      ?>

    <?php else : ?>
      <section class="no-results not-found">
        <header class="page-header">
          <h2 class="page-title"><?php esc_html_e( 'Nothing Found', 'ai-studio-wp-example' ); ?></h2>
        </header>
        <div class="page-content">
          <p><?php esc_html_e( 'It seems we can’t find what you’re looking for. Try a search.', 'ai-studio-wp-example' ); ?></p>
          <?php get_search_form(); ?>
        </div>
      </section>
    <?php endif; ?>
  </section>

  <!-- Optional: Footer Navigation (usually placed in footer.php) -->
  <nav class="site-nav site-nav--footer" aria-label="<?php esc_attr_e( 'Footer Menu', 'ai-studio-wp-example' ); ?>">
    <?php
    wp_nav_menu( array(
      'theme_location' => 'footer',
      'container'      => 'div',
      'container_class'=> 'footer-menu__container',
      'menu_class'     => 'footer-menu',
      'fallback_cb'    => false,
      'depth'          => 1,
    ) );
    ?>
  </nav>

</main>

<?php
get_footer();
