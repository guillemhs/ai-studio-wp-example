<?php
/**
 * Footer template
 */
?>

<footer class="site-footer alignfull has-agile-deep-background-color has-white-color has-text-color has-background">
  <div class="site-footer__inner">

    <div class="site-footer__columns">
      <!-- Column 1 -->
      <div class="site-footer__col">
        <h3 style="font-size:2rem;margin:0 0 0.75rem;">
          <img src="https://www.agile611.com/wp-content/uploads/2020/09/Negativo_Uso3-300x202.png"
               style="max-width:160px;height:auto;" alt="Agile611">
        </h3>
        <p style="color:#9ca3af;margin:0;">
          Ayudamos a las personas y a las organizaciones a mejorar sus formas de trabajar,
          haciendo el lugar de trabajo más humano y eficiente.
        </p>
        <p style="color:#9ca3af;margin:0;">
          Somos una empresa dedicada al desarrollo de soluciones innovadoras que transforman las maneras de trabajar.
          Potenciamos el talento oculto en individuos y organizaciones mediante la integración de tecnologías avanzadas
          y metodologías ágiles. Diseñamos experiencias de formación, consultoría y acompañamiento que no solo enriquecen,
          sino que también maximizan el valor esperado por nuestros clientes.
        </p>
        <p style="color:#9ca3af;margin:0;">
          Implementamos soluciones de software personalizadas y prácticas de DevOps para optimizar procesos y acelerar
          la entrega de valor. Además, priorizamos la ciberseguridad, asegurando que todas nuestras soluciones cumplan
          con los más altos estándares de protección de datos.
        </p>
        <p style="color:#9ca3af;margin:0;">
          Nuestro objetivo es ser un referente en formación, innovación y calidad, liderando el camino hacia un futuro
          laboral más seguro y tecnológicamente avanzado.
        </p>
      </div>

      <!-- Column 2 -->
<div class="site-footer__col">
  <h4 style="font-size:1.2rem;color:var(--wp--preset--color--agile-turq);margin:0 0 0.75rem;">Servicios</h4>

  <?php
  // Footer services menu (menu-2)
  if ( has_nav_menu( 'menu-2' ) ) {
      wp_nav_menu( array(
          'theme_location'  => 'menu-2',
          'menu_id'         => 'footer-menu',
          'menu_class'      => 'site-footer__services',
          'container'       => 'nav',
          'container_class' => 'site-footer__services-nav',
          'depth'           => 1,
      ) );
  }
  ?>
</div>


      <!-- Column 3 – Contact info -->
      <div class="site-footer__col">
        <h4 style="font-size:1.2rem;color:var(--wp--preset--color--agile-turq);margin:0 0 0.75rem;">Contacto</h4>

        <div class="contact-info-box">
          <div class="contact-info-item">
            <div class="contact-icon"><i class="fa fa-map-marker"></i></div>
            <div class="contact-value">
              Carrer Laureà Miró 309<br>
              08950 Esplugues de Llobregat
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-icon"><i class="fa fa-phone"></i></div>
            <div class="contact-value">
              Oficina en Barcelona (Europa) +34 937 372 834
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-icon"><i class="fa fa-phone-square"></i></div>
            <div class="contact-value">
              Oficina en Panamá (Centro América) +507 6600 5999
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-icon"><i class="fa fa-envelope"></i></div>
            <div class="contact-value">
              <a href="mailto:info@agile611.com">info@agile611.com</a>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-icon"><i class="fa fa-rss"></i></div>
            <div class="contact-value">
              <a href="https://www.agile611.com/blog">Blog</a>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-icon"><i class="fa fa-users"></i></div>
            <div class="contact-value">
              <a href="https://www.agile611.com/sobre-nosotros">Sobre Nosotros</a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.site-footer__columns -->

    <hr style="margin:var(--wp--preset--spacing--40) 0;border:0;height:1px;background:#ffffff20;">

    <p style="color:#9ca3af;text-align:center;margin:0 0 0.5rem;">
      &copy; Copyright 2019-<?php echo date( 'Y' ); ?> Agile611 | Todos los derechos reservados.
    </p>

    <p style="color:#9ca3af;text-align:center;margin:0;">
      Orgullosamente funcionando con
      <a href="https://www.debian.org/">
        <img src="https://www.debian.org/logos/button-mini.png" alt="Debian">
      </a>
    </p>

  </div><!-- /.site-footer__inner -->
</footer>

<?php wp_footer(); ?>
</body>
</html>