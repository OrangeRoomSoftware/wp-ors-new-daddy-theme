<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package ORS
 * @subpackage New Daddy - ORS
 */
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('-', true, 'right'); ?><?php bloginfo('name'); ?></title>

<!-- Start WordPress Head Stuff -->
<?php wp_head(); ?>
<!-- End WordPress Head Stuff -->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body <?php body_class(); ?>>
    <div class="container">
      <div class="row">
        <header class="col-lg-12">
          <?php dynamic_sidebar("above-header"); ?>
          <hgroup>
            <h1><a href="<?php echo get_option("home")?>/"><?php bloginfo("name")?></a></h1>
          </hgroup>
          <?php dynamic_sidebar("below-header"); ?>
          <!-- Start WordPress Menu -->
          <?php
          if ( has_nav_menu('top') ) {
            wp_nav_menu( array(
              'container' => 'nav',
              'container_class' => 'navbar',
              'theme_location' => 'top',
              'menu_class' => 'nav navbar-nav',
              'walker' => new Bootstrap_Walker(),
              ) );
          }
          ?>
          <!-- End WordPress Menu -->
        </header>
      </div>
    </div>
