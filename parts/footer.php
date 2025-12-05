<footer class="site-footer mt-12">
  <div class="container mx-auto px-4 py-8">
    <nav class="site-nav site-nav--footer" aria-label="<?php esc_attr_e('Footer Menu', 'ai-studio-wp-example'); ?>">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'footer',
        'container'      => false,
        'menu_class'     => 'footer-menu flex gap-3 text-sm',
        'fallback_cb'    => false,
        'depth'          => 1,
      ));
      ?>
    </nav>
    <p class="text-xs mt-4">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>