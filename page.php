<?php get_header(); ?>

<!-- Start Site Body -->
<div class="content container-fluid">
  <div class="row">

    <!-- Start Sidebar -->
    <?php
    $has_sidebar = false;
    $col_width = 'col-lg-12';
    if ( has_nav_menu('sidebar') or is_active_sidebar( 'sidebar' ) ) {
      $has_sidebar = true;
      $col_width = 'col-sm-9';
    }

    if ( $has_sidebar )
      echo '<ul class="sidebar col-sm-3">';

    if ( has_nav_menu('sidebar') )
      wp_nav_menu( array( 'theme_location' => 'sidebar', 'container-fluid' => 'nav') );

    dynamic_sidebar("sidebar");

    if ( $has_sidebar )
      echo '</ul>';
    ?>
    <!-- End Sidebar -->

    <div class="<?php echo $col_width ?>">
      <?php dynamic_sidebar("above-content"); ?>
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <section>
              <?php if ( has_post_thumbnail( $post->ID ) ) { ?>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
              <?php } ?>
              <?php
              if ( $ors_theme_options['use_excerpts'] == 0 ) {
                the_content();
              } else {
                the_excerpt();
              }
              ?>
            </section>
          </article>
        <?php endwhile; ?>
      </div>
      <?php else : ?>
      <article id="404-not-found">
        <header>
          <h2>Not Found</h2>
        </header>
        <section>
          <p>Sorry, but you are looking for something that isn't here.</p>
          <?php get_search_form(); ?>
        </section>
      </article>
      <?php endif; ?>
      <?php dynamic_sidebar("below-content"); ?>
    </div>
  </div>
<!-- End Site Body -->

<?php get_footer(); ?>
