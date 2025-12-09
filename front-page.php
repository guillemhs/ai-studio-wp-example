<?php
/**
 * Template Name: Front Page
 *
 * Front page template for Agile611 using the same block markup
 * as your original index/front-page template, with improved hero layout.
 */

get_header();
?>

<main id="primary" class="site-main">

  <!-- TRAINING LIST BAR -->
  <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem"}},"color":{"background":"#F5F5F5"}},"layout":{"type":"constrained"}} -->
  <div class="wp-block-group alignfull has-background" style="background-color:#F5F5F5;padding-top:1rem;padding-bottom:1rem">
    <!-- wp:shortcode -->
    [agile_training_list]
    <!-- /wp:shortcode -->
  </div>
  <!-- /wp:group -->

  <!-- HERO SECTION -->
  <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"color":{"background":"#01003f"}},"layout":{"type":"constrained"}} -->
  <div class="wp-block-group alignfull has-background" style="background-color:#01003f;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

    <!-- NOTE: columns now have blockGap 3rem and 60/40 split -->
    <!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":"3rem"}}} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center" style="column-gap:3rem">

      <!-- LEFT COLUMN (60%) -->
      <!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
      <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group">
          <!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","fontSize":"16px","fontStyle":"normal","fontWeight":"700"},"color":{"text":"#00B2E9"}}} -->
          <p class="has-text-color" style="color:#00B2E9;font-size:16px;font-style:normal;font-weight:700;text-transform:uppercase">Agile Transformation</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.1","fontSize":"4rem"}},"textColor":"white"} -->
        <h1 class="wp-block-heading has-white-color has-text-color" style="font-size:4rem;line-height:1.1">
          Hacemos el trabajo más <span style="color:#00B2E9">Humano</span> y Eficiente
        </h1>
        <!-- /wp:heading -->
        
        <!-- Animated Topics Text Slider -->
        <!-- wp:html -->
        <div class="wp-block-html">
          <div class="agile-text-slider">
            <span class="agile-text-slider-content">
              <span class="agile-text-slider-item">DevOps &amp; Cloud</span>
              <span class="agile-text-slider-item">Agile Coaching</span>
              <span class="agile-text-slider-item">Ciberseguridad</span>
              <span class="agile-text-slider-item">Inteligencia Artificial</span>
              <span class="agile-text-slider-item">DevOps &amp; Cloud</span>
            </span>
          </div>
        </div>
        <!-- /wp:html -->

        <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.5rem"}},"textColor":"white"} -->
        <p class="has-white-color has-text-color" style="font-size:1.5rem">
          Ayudamos a personas y organizaciones a mejorar sus formas de trabajar mediante innovación, calidad y talento humano.
        </p>
        <!-- /wp:paragraph -->

        <!-- Hero buttons -->
        <!-- wp:buttons -->
        <div class="wp-block-buttons">
          <!-- wp:button {"backgroundColor":"agile-vibrant","textColor":"white"} -->
          <div class="wp-block-button">
            <a class="wp-block-button__link has-white-color has-agile-vibrant-background-color has-text-color has-background wp-element-button">
              Nuestros Servicios →
            </a>
          </div>
          <!-- /wp:button -->

          <!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"#ffffff"}}} -->
          <div class="wp-block-button is-style-outline">
            <a class="wp-block-button__link has-text-color wp-element-button" style="color:#ffffff">
              Contáctanos
            </a>
          </div>
          <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
      </div>
      <!-- /wp:column -->

      <!-- RIGHT COLUMN (40%) with constrained terminal -->
      <!-- wp:column {"verticalAlignment":"center","width":"40%","className":"hero-terminal-column"} -->
      <div class="wp-block-column is-vertically-aligned-center hero-terminal-column" style="flex-basis:40%">

        <!-- TERMINAL CARD BLOCK START -->
        <!-- wp:group {"style":{"border":{"radius":"12px","width":"1px","style":"solid","color":"#ffffff20"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"color":{"background":"#0a192fcc"}},"layout":{"type":"default"},"className":"hero-terminal"} -->
        <div class="wp-block-group hero-terminal has-background" style="background-color:#0a192fcc;border-radius:12px;border-color:#ffffff20;border-width:1px;border-style:solid;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
            
          <!-- Header of the Terminal -->
          <!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1.5rem","right":"1.5rem"}},"border":{"bottom":{"color":"#ffffff0d","width":"1px"}},"color":{"background":"#020c1b"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
          <div class="wp-block-group has-background" style="background-color:#020c1b;border-bottom-color:#ffffff0d;border-bottom-width:1px;padding-top:1rem;padding-right:1.5rem;padding-bottom:1rem;padding-left:1.5rem">
            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","gap":"0.35rem"}} -->
            <div class="wp-block-group">
              <!-- wp:group {"style":{"border":{"radius":"99px"},"dimensions":{"minHeight":"12px","minWidth":"12px"}},"backgroundColor":"vivid-red"} -->
              <div class="wp-block-group has-vivid-red-background-color has-background" style="border-radius:99px;min-height:12px;min-width:12px"></div>
              <!-- /wp:group -->
              <!-- wp:group {"style":{"border":{"radius":"99px"},"dimensions":{"minHeight":"12px","minWidth":"12px"}},"backgroundColor":"luminous-vivid-amber"} -->
              <div class="wp-block-group has-luminous-vivid-amber-background-color has-background" style="border-radius:99px;min-height:12px;min-width:12px"></div>
              <!-- /wp:group -->
              <!-- wp:group {"style":{"border":{"radius":"99px"},"dimensions":{"minHeight":"12px","minWidth":"12px"}},"backgroundColor":"pale-cyan-blue"} -->
              <div class="wp-block-group has-pale-cyan-blue-background-color has-background" style="border-radius:99px;min-height:12px;min-width:12px"></div>
              <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph {"style":{"typography":{"fontFamily":"monospace","fontSize":"0.875rem"}},"textColor":"gray-400"} -->
            <p class="has-text-color" style="color:#9ca3af;font-family:monospace;font-size:0.875rem">
              &gt;_ user@agile611:~/training-schedule
            </p>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->

          <!-- Content Area -->
          <!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}}},"layout":{"type":"default"}} -->
          <div class="wp-block-group" style="padding:1.5rem">
            
            <!-- Command Line -->
            <!-- wp:paragraph {"style":{"typography":{"fontFamily":"monospace","fontSize":"1rem","fontWeight":"600"}},"textColor":"agile-vibrant"} -->
            <p class="has-agile-vibrant-color has-text-color" style="font-family:monospace;font-size:1rem;font-weight:600">
              <span style="color:#499497">$</span> list --upcoming --events
            </p>
            <!-- /wp:paragraph -->

            <!-- Spacer -->
            <!-- wp:spacer {"height":"20px"} -->
            <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
            
            <!-- The Events Calendar Shortcode -->
            <!-- wp:shortcode -->
            [ect_events_list limit="3" style="modern" date_format="d M" show_time="true" show_venue="false"]
            <!-- /wp:shortcode -->

          </div>
          <!-- /wp:group -->

        </div>
        <!-- /wp:group -->
        <!-- TERMINAL CARD BLOCK END -->

      </div>
      <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->
  </div>
  <!-- /wp:group -->

  <!-- You can include your existing SERVICES / VALUE sections here,
       or let WordPress render the rest of the page content: -->

  <?php
  while ( have_posts() ) :
    the_post();
    the_content();
  endwhile;
  ?>

</main>

<?php
get_footer();
