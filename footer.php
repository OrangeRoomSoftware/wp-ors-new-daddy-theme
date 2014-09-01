<!-- WP ORS New Daddy Theme - footer.php -->

          <?php dynamic_sidebar("below-content"); ?>
        </div>
      </div>
    </div>
    <!-- End Site Body -->

    <footer id="site-footer" class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <?php dynamic_sidebar("above-footer"); ?>
          <?php
            if ( has_nav_menu('bottom') ) {
              wp_nav_menu( array(
                'container' => 'nav',
                'container_class' => '',
                'theme_location' => 'bottom',
                'menu_class' => '',
                'depth' => 1
                )
              );
            }
          ?>
          <?php dynamic_sidebar("below-footer"); ?>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
