<?php
/**
 * Template Name: Front Page
 *
 * Custom front page template for Agile611.
 */

get_header();
?>

<main id="primary" class="site-main">

  <!-- HERO SECTION -->
  <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"color":{"background":"#01003f"}},"layout":{"type":"constrained"}} -->
  <div class="wp-block-group alignfull has-background" style="background-color:#01003f;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    <!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center">

      <!-- LEFT COLUMN: text + buttons + topics -->
      <!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
      <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">

        <!-- Label pill -->
        <!-- wp:html -->
        <div class="hero-label">
          <span class="hero-label__dot"></span>
          <span>Agile Transformation</span>
        </div>
        <!-- /wp:html -->

        <!-- Main heading -->
        <!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.05","fontSize":"4.5rem","fontWeight":"800","letterSpacing":"-0.03em"}},"textColor":"white"} -->
        <h1 class="wp-block-heading has-white-color has-text-color" style="font-size:4.5rem;line-height:1.05;font-weight:800;letter-spacing:-0.03em;">
          Hacemos el trabajo más <span style="color:#00B2E9">Humano</span> y Eficiente
        </h1>
        <!-- /wp:heading -->

        <!-- Lead paragraph -->
        <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.25rem"}},"textColor":"white"} -->
        <p class="has-white-color has-text-color" style="font-size:1.25rem;max-width:36rem;">
          Ayudamos a personas y organizaciones a mejorar sus formas de trabajar mediante innovación, calidad y talento humano.
        </p>
        <!-- /wp:paragraph -->

        <!-- Hero CTAs -->
        <!-- wp:buttons -->
        <div class="wp-block-buttons">
          <!-- wp:button {"backgroundColor":"agile-vibrant","textColor":"white"} -->
          <div class="wp-block-button">
            <a class="wp-block-button__link has-white-color has-agile-vibrant-background-color has-text-color has-background wp-element-button">
              Nuestros Servicios →
            </a>
          </div>
          <!-- /wp:button -->

          <!-- wp:button {"className":"is-style-outline"} -->
          <div class="wp-block-button is-style-outline">
            <a class="wp-block-button__link has-text-color wp-element-button" style="color:#ffffff">
              Contáctanos
            </a>
          </div>
          <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->

        <!-- Topics row under hero -->
        <!-- wp:group {"style":{"spacing":{"margin":{"top":"1.5rem"}}},"layout":{"type":"flex","flexWrap":"wrap","gap":"1.5rem"}} -->
        <div class="wp-block-group hero-topics">
          <span>DevOps &amp; Cloud</span>
          <span>Agile Coaching</span>
          <span>Ciberseguridad</span>
        </div>
        <!-- /wp:group -->

      </div>
      <!-- /wp:column -->

      <!-- RIGHT COLUMN: terminal card -->
      <!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
      <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">

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

  <!-- SERVICES SECTION -->
  <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"color":{"background":"#F5F5F5"}},"layout":{"type":"constrained"}} -->
  <div class="wp-block-group alignfull has-background" style="background-color:#F5F5F5;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    <!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"3rem"}},"textColor":"agile-deep"} -->
    <h2 class="wp-block-heading has-text-align-center has-agile-deep-color has-text-color" style="font-size:3rem">
      Soluciones Integrales
    </h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.35rem"}},"textColor":"agile-text"} -->
    <p class="has-text-align-center has-agile-text-color has-text-color" style="font-size:1.35rem">
      Combinamos experiencia técnica y metodológica para impulsar el crecimiento.
    </p>
    <!-- /wp:paragraph -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"2rem"}}} -->
    <div class="wp-block-columns alignwide">
      <!-- wp:column {"className":"agile-card"} -->
      <div class="wp-block-column agile-card">
        <!-- wp:heading {"level":3,"fontSize":"large"} -->
        <h3 class="wp-block-heading has-large-font-size">Formación</h3>
        <!-- /wp:heading -->
        <!-- wp:paragraph -->
        <p>Capacitación especializada para equipos de alto rendimiento.</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:column -->

      <!-- wp:column {"className":"agile-card"} -->
      <div class="wp-block-column agile-card">
        <!-- wp:heading {"level":3,"fontSize":"large"} -->
        <h3 class="wp-block-heading has-large-font-size">Consultoría</h3>
        <!-- /wp:heading -->
        <!-- wp:paragraph -->
        <p>Acompañamiento estratégico para la transformación ágil.</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:column -->

      <!-- wp:column {"className":"agile-card"} -->
      <div class="wp-block-column agile-card">
        <!-- wp:heading {"level":3,"fontSize":"large"} -->
        <h3 class="wp-block-heading has-large-font-size">Software</h3>
        <!-- /wp:heading -->
        <!-- wp:paragraph -->
        <p>Soluciones tecnológicas a medida y escalables.</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:column -->

      <!-- wp:column {"className":"agile-card"} -->
      <div class="wp-block-column agile-card">
        <!-- wp:heading {"level":3,"fontSize":"large"} -->
        <h3 class="wp-block-heading has-large-font-size">DevOps &amp; Sec</h3>
        <!-- /wp:heading -->
        <!-- wp:paragraph -->
        <p>Integración continua y protección de activos digitales.</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
  </div>
  <!-- /wp:group -->

  <!-- VALUE PROP SECTION -->
  <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"color":{"background":"#ffffff"}},"layout":{"type":"constrained"}} -->
  <div class="wp-block-group alignfull has-background" style="background-color:#ffffff;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"4rem"}}} -->
    <div class="wp-block-columns alignwide">
      <!-- wp:column {"verticalAlignment":"center"} -->
      <div class="wp-block-column is-vertically-aligned-center">
        <!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"3rem"}},"textColor":"agile-deep"} -->
        <h2 class="wp-block-heading has-agile-deep-color has-text-color" style="font-size:3rem">
          El equilibrio entre <span style="color:#057EB5">Tecnología</span> y <span style="color:#4CB8C9">Humanidad</span>
        </h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.25rem"}}} -->
        <p style="font-size:1.25rem">
          En Agile611, creemos que la transformación digital no es solo sobre herramientas, sino sobre cultura.
        </p>
        <!-- /wp:paragraph -->
        
        <!-- wp:list -->
        <ul>
          <li><strong>Innovación:</strong> Buscamos nuevas formas de aportar valor.</li>
          <li><strong>Calidad:</strong> Excelencia técnica en cada entrega.</li>
          <li><strong>Seguridad:</strong> Protección integral en todos los procesos.</li>
          <li><strong>Talento Humano:</strong> Las personas son el centro.</li>
        </ul>
        <!-- /wp:list -->
      </div>
      <!-- /wp:column -->

      <!-- wp:column {"verticalAlignment":"center"} -->
      <div class="wp-block-column is-vertically-aligned-center">
        <!-- wp:image {"sizeSlug":"large","className":"is-style-rounded"} -->
        <figure class="wp-block-image size-large is-style-rounded">
          <img src="https://picsum.photos/800/600?grayscale" alt="Team Collaboration" />
        </figure>
        <!-- /wp:image -->
      </div>
      <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
  </div>
  <!-- /wp:group -->

</main>

<?php
get_footer();
