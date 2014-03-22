    <footer>
      <?php
        if ( has_nav_menu('bottom') ) {
          wp_nav_menu(array('theme_location' => 'bottom', 'container' => 'nav', 'depth' => 1));
        }
      ?>
    </footer>
<?php wp_footer(); ?>
  </body>
</html>
