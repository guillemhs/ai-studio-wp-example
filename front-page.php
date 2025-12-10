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

      <!-- LEFT COLUMN -->
      <!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
      <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">

        <!-- Label pill -->
        <!-- wp:html -->
        <div class="hero-label">
          <span class="hero-label__dot"></span>
          <span>Agile Transformation</span>
        </div>
        <!-- /wp:html -->

        <!-- Heading -->
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

        <!-- Buttons -->
        <!-- wp:buttons -->
        <div class="wp-block-buttons">
          <!-- wp:button {"backgroundColor":"agile-vibrant","textColor":"white"} -->
          <div class="wp-block-button">
            <a href="/servicios/"
              class="wp-block-button__link has-white-color has-agile-vibrant-background-color has-text-color has-background wp-element-button">
              Nuestros Servicios →
            </a>
          </div>
          <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->

        <!-- Topics row -->
        <!-- wp:group {"style":{"spacing":{"margin":{"top":"1.5rem"}}},"layout":{"type":"flex","flexWrap":"wrap","gap":"1.5rem"}} -->
        <div class="wp-block-group hero-topics">
          <span>DevOps &amp; Cloud</span>
          <span>Agile Coaching</span>
          <span>Ciberseguridad</span>
        </div>
        <!-- /wp:group -->

      </div>
      <!-- /wp:column -->

      <!-- RIGHT COLUMN -->
      <!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
      <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">

        <!-- TERMINAL CARD -->
        <!-- wp:group {"style":{"border":{"radius":"12px","width":"1px","style":"solid","color":"#ffffff20"},"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"color":{"background":"#0a192fcc"}},"layout":{"type":"default"},"className":"hero-terminal"} -->
        <div class="wp-block-group hero-terminal has-background" style="background-color:#0a192fcc;border-radius:12px;border-color:#ffffff20;border-width:1px;border-style:solid;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
            
          <!-- Header of the terminal -->
          <!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","bottom":"1rem","left":"1.5rem","right":"1.5rem"}},"border":{"bottom":{"color":"#ffffff0d","width":"1px"}},"color":{"background":"#020c1b"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
          <div class="wp-block-group has-background" style="background-color:#020c1b;border-bottom-color:#ffffff0d;border-bottom-width:1px;padding-top:1rem;padding-right:1.5rem;padding-bottom:1rem;padding-left:1.5rem">

            <!-- LEFT: macOS dots -->
            <!-- wp:html -->
            <div class="terminal-dots">
              <span class="terminal-dot terminal-dot--red"></span>
              <span class="terminal-dot terminal-dot--yellow"></span>
              <span class="terminal-dot terminal-dot--green"></span>
            </div>
            <!-- /wp:html -->

            <!-- RIGHT: path text -->
            <!-- wp:paragraph {"style":{"typography":{"fontFamily":"monospace","fontSize":"0.875rem"}},"textColor":"gray-400"} -->
            <p class="has-text-color" style="color:#9ca3af;font-family:monospace;font-size:0.875rem">
              &gt;_ user@agile611:~/training-schedule
            </p>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->

          <!-- Body of the terminal -->
          <!-- wp:group {"style":{"spacing":{"padding":{"top":"1.5rem","bottom":"1.5rem","left":"1.5rem","right":"1.5rem"}}},"layout":{"type":"default"}} -->
          <div class="wp-block-group" style="padding:1.5rem">

            <!-- Command line -->
            <!-- wp:paragraph {"style":{"typography":{"fontFamily":"monospace","fontSize":"1rem","fontWeight":"600"}},"textColor":"agile-vibrant"} -->
            <p class="has-agile-vibrant-color has-text-color" style="font-family:monospace;font-size:1rem;font-weight:600">
              <span style="color:#00B2E9">$ list --upcoming --events</span>
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:spacer {"height":"20px"} -->
            <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->

                        <!-- Events shortcode (rendered via PHP) -->
            <?php
            echo do_shortcode(
              '[events-calendar-templates category="all" template="minimal-list" style="style-2" date_format="default" start_date="" end_date="" limit="5" order="ASC" hide-venue="no" socialshare="no" time="future"]'
            );
            ?>
            <p class="courses-link-under-calendar" style="margin-top: 1.5rem;">
  <a href="<?php echo esc_url( home_url( '/cursos-abiertos/' ) ); ?>">
    Todos los cursos
  </a>
</p>



          </div>
          <!-- /wp:group -->

        </div>
        <!-- /wp:group -->

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
    <a href="/formacion/" class="agile-card__link">
      <h3 class="wp-block-heading has-large-font-size">Formación</h3>
      <p>Capacitación especializada para equipos de alto rendimiento.</p>
    </a>
  </div>
  <!-- /wp:column -->

  <!-- wp:column {"className":"agile-card"} -->
  <div class="wp-block-column agile-card">
    <a href="/consultoria/" class="agile-card__link">
      <h3 class="wp-block-heading has-large-font-size">Consultoría</h3>
      <p>Acompañamiento estratégico para la transformación ágil.</p>
    </a>
  </div>
  <!-- /wp:column -->

  <!-- wp:column {"className":"agile-card"} -->
  <div class="wp-block-column agile-card">
    <a href="/ciberseguridad/" class="agile-card__link">
      <h3 class="wp-block-heading has-large-font-size">Ciber&shy;seguridad</h3>
      <p>Soluciones de ciberseguridad a medida y escalables.</p>
    </a>
  </div>
  <!-- /wp:column -->

  <!-- wp:column {"className":"agile-card"} -->
  <div class="wp-block-column agile-card">
    <a href="/inteligencia-artificial/" class="agile-card__link">
      <h3 class="wp-block-heading has-large-font-size">Inteligencia &amp; Artificial</h3>
      <p>Integración de soluciones de inteligencia artificial de activos digitales.</p>
    </a>
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
      <!-- Left text -->
      <div class="wp-block-column is-vertically-aligned-center">
        <h2 class="wp-block-heading has-agile-deep-color has-text-color" style="font-size:3rem">
          El equilibrio entre <span style="color:#057EB5">Tecnología</span> y <span style="color:#4CB8C9">Humanidad</span>
        </h2>
        <p style="font-size:1.25rem">
          En Agile611, creemos que la transformación digital no es solo sobre herramientas, sino sobre cultura.
        </p>
        <ul>
          <li><strong>Innovación:</strong> Buscamos nuevas formas de aportar valor.</li>
          <li><strong>Calidad:</strong> Excelencia técnica en cada entrega.</li>
          <li><strong>Seguridad:</strong> Protección integral en todos los procesos.</li>
          <li><strong>Talento Humano:</strong> Las personas son el centro.</li>
        </ul>
      </div>

      <!-- Right image -->
      <div class="wp-block-column is-vertically-aligned-center">
        <figure class="wp-block-image size-large is-style-rounded">
          <img src="https://picsum.photos/800/600?grayscale" alt="Team Collaboration" />
        </figure>
      </div>
    </div>
    <!-- /wp:columns -->
  </div>
  <!-- /wp:group -->

</main>

<?php
get_footer();
