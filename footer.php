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
        <h3 style="font-size:2rem;margin:0 0 0.75rem;">Agile611</h3>
        <p style="color:#9ca3af;margin:0;">
          Transformamos organizaciones potenciando su talento humano y asegurando su infraestructura tecnológica.
        </p>
      </div>

      <!-- Column 2 -->
      <div class="site-footer__col">
        <h4 style="font-size:1.2rem;color:var(--wp--preset--color--agile-turq);margin:0 0 0.75rem;">Servicios</h4>
        <ul>
          <li>Formación Ágil</li>
          <li>Consultoría</li>
          <li>DevOps</li>
          <li>Ciberseguridad</li>
        </ul>
      </div>

      <!-- Column 3 -->
      <div class="site-footer__col">
        <h4 style="font-size:1.2rem;color:var(--wp--preset--color--agile-turq);margin:0 0 0.75rem;">Contacto</h4>
        <ul>
          <li>contacto@agile611.com</li>
          <li>Madrid, España</li>
        </ul>
      </div>
    </div>

    <hr style="margin:var(--wp--preset--spacing--40) 0;border:0;height:1px;background:#ffffff20;">

    <p style="color:#9ca3af;text-align:center;margin:0 0 0.5rem;">
      &copy; Copyright 2019-<?php echo date('Y'); ?> Agile611 | Todos los derechos reservados.
    </p>

    <p style="color:#9ca3af;text-align:center;margin:0;">
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
