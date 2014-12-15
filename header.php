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
    <header id="site-header" class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <?php dynamic_sidebar("above-header"); ?>
          <hgroup>
            <h1><a href="<?php echo get_option("home")?>/"><?php bloginfo("name")?></a></h1>
          </hgroup>
          <?php dynamic_sidebar("below-header"); ?>
        </div>
      </div>
    <!-- Start WordPress Menu -->
    <?php
    if ( has_nav_menu('top') ) {
      wp_nav_menu( array(
        'container' => 'nav',
        'container_class' => 'navbar',
        'theme_location' => 'top',
        'menu_class' => 'nav navbar-nav',
        'walker' => new wp_bootstrap_navwalker(),
        ) );
    }
    ?>
    <!-- End WordPress Menu -->
    </header>

    <!-- Start Site Content -->

    <div id="site-content" class="content container-fluid">
      <div class="row">

        <!-- Start Sidebar -->
        <?php
        $has_sidebar = false;
        $col_width = 'col-lg-12 col-md-12 col-sm-12';
        if ( has_nav_menu('sidebar') or is_active_sidebar( 'sidebar' ) ) {
          $has_sidebar = true;
          $col_width = 'col-lg-9 col-md-9 col-sm-9';
        }

        if ( $has_sidebar )
          echo '<ul class="sidebar col-lg-3 col-md-3 col-sm-3">';

        if ( has_nav_menu('sidebar') )
          wp_nav_menu( array( 'theme_location' => 'sidebar', 'container-fluid' => 'nav') );

        dynamic_sidebar("sidebar");

        if ( $has_sidebar )
          echo '</ul>';
        ?>
        <!-- End Sidebar -->

        <div class="<?php echo $col_width ?>">
          <?php dynamic_sidebar("above-content"); ?>
