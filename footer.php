<?php
/**
 * Footer template
 * @package AI_Studio_WP_Example
 */
?>

<footer class="site-footer alignfull has-agile-deep-background-color has-white-color has-text-color has-background" style="padding:var(--wp--preset--spacing--80) var(--wp--preset--spacing--40) var(--wp--preset--spacing--40);">
  <div class="site-footer__inner container" style="max-width:1200px;margin:0 auto;">

    <div class="site-footer__columns" style="display:flex;flex-wrap:wrap;gap:4rem;">
      <!-- Column 1 -->
      <div class="site-footer__col" style="flex:1 1 50%;">
        <h3 style="font-size:2rem;margin:0 0 0.75rem;"><?php bloginfo('name'); ?></h3>
        <p style="color:#9ca3af;margin:0;">
          Transformamos organizaciones potenciando su talento humano y asegurando su infraestructura tecnológica.
        </p>
      </div>

      <!-- Column 2 -->
      <div class="site-footer__col" style="flex:1 1 25%;">
        <h4 style="font-size:1.2rem;color:var(--wp--preset--color--agile-turq);margin:0 0 0.75rem;">Servicios</h4>
        <ul style="color:#9ca3af;list-style:none;padding:0;margin:0;">
          <li>Formación Ágil</li>
          <li>Consultoría</li>
          <li>DevOps</li>
          <li>Ciberseguridad</li>
        </ul>
      </div>

      <!-- Column 3 -->
      <div class="site-footer__col" style="flex:1 1 25%;">
        <h4 style="font-size:1.2rem;color:var(--wp--preset--color--agile-turq);margin:0 0 0.75rem;">Contacto</h4>
        <ul style="color:#9ca3af;list-style:none;padding:0;margin:0;">
          <li>contacto@agile611.com</li>
          <li>Madrid, España</li>
        </ul>
      </div>
    </div>

    <hr style="margin:var(--wp--preset--spacing--40) 0;border:0;height:1px;background:#ffffff20;">

    <p class="has-text-align-center has-small-font-size" style="color:#9ca3af;text-align:center;margin:0 0 0.5rem;">
      <?php
      $curYear = date('Y');
      echo " &copy; Copyright 2019-$curYear Agile611 &#124; Todos los derechos reservados.";
      ?>
    </p>

    <p class="has-text-align-center has-small-font-size" style="color:#9ca3af;text-align:center;margin:0;">
      Orgullosamente funcionando con
      <a href="https://www.debian.org/">
        <img src="https://www.debian.org/logos/button-mini.png" alt="Debian">
      </a>
    </p>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
