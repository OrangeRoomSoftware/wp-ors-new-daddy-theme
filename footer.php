    <footer class="container">
      <div class="row">
        <div class="col-lg-12">
          <?php
            if ( has_nav_menu('bottom') ) {
              wp_nav_menu(array('theme_location' => 'bottom', 'container' => 'nav', 'depth' => 1));
            }
          ?>
        </div>
      </div>
    </footer>
<?php wp_footer(); ?>
  </body>
</html>
