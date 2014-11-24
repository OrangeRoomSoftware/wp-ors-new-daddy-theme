<?php
/*
  Template Name: Coming Soon
 */
?><!DOCTYPE html>

<!-- WP ORS New Daddy Theme - coming-soon.php -->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('-', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <!-- Start WordPress Head Stuff -->
    <?php wp_head(); ?>
    <!-- End WordPress Head Stuff -->
  <body id="coming-soon">
    <header class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <?php dynamic_sidebar("above-header"); ?>
        </div>
      </div>
    </header>

    <div id="coming-soon" class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <?php if (have_posts()) : while (have_posts()) : the_post();?>
            <?php the_content(); ?>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </div>

    <footer class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <?php dynamic_sidebar("below-footer"); ?>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
