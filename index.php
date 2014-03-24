<?php get_header(); ?>

<?php
  if ( has_nav_menu('sidebar') ) {
    $col_width = 'col-lg-9';
  } else {
    $col_width = 'col-lg-12';
  }
?>

<!-- Start Site Body -->
<div class="container">
  <div class="row">

    <!-- Start Sidebar -->
    <?php
    if ( has_nav_menu('sidebar') ) {
      echo '<div class="sidebar col-lg-3">';
      wp_nav_menu( array( 'theme_location' => 'sidebar', 'container' => 'nav') );
      echo '</div>';
    }
    ?>
    <!-- End Sidebar -->

    <?php if (have_posts()) : ?>
      <div class="<?php echo $col_width ?>">
        <?php while (have_posts()) : the_post(); ?>
          <article <?php post_class('col_lg_12'); ?> id="post-<?php the_ID(); ?>">
            <header>
              <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
              <time datetime="<?php the_time('Y-m-d')?>"><?php the_time('F jS, Y') ?></time>
            </header>
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

        <?php
        if ( function_exists( 'wp_paginate' ) ) {
          wp_paginate();
        } else { ?>
        <nav>
          <div id="older"><?php next_posts_link('&#9664; Older Entries') ?></div>
          <div id="newer"><?php previous_posts_link('Newer Entries &#9654;') ?></div>
        </nav>
        <?php } ?>
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
    </div>
  </div>
<!-- End Site Body -->

<?php get_footer(); ?>
