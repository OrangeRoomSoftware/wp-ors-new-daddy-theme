<?php
include("bootstrap-menu.php");

define('ORS_PARENT_TEMPLATE_URL', get_bloginfo('template_url'));
define('ORS_PARENT_TEMPLATE_DIR', dirname(__FILE__));
define('ORS_CHILD_TEMPLATE_URL',  get_stylesheet_directory_uri());
define('ORS_CHILD_TEMPLATE_DIR',  get_stylesheet_directory());
define('ORS_UPLOAD_DIR',          $uploads['path']);
define('ORS_UPLOAD_URL',          $uploads['url']);

/**
 * Stylesheets
 *
 * Bootstrap, ORS custom style.css
 */
if ( !function_exists('ors_stylesheets') ) {
  function ors_stylesheets() {
    wp_enqueue_style('bootstrap', ORS_PARENT_TEMPLATE_URL . "/css/bootstrap.min.css", 'bootstrap', null, 'all');
    wp_enqueue_style('ors-parent-style', get_bloginfo('stylesheet_url'), 'ors-parent-style', null, 'all');
  }

  if (!is_admin()) {
    add_action('wp_print_styles', 'ors_stylesheets', 1);
  }
}

/**
 * Javascripts
 *
 * Bootstrap, ORS custom style.js
 */
if (!function_exists('ors_javascripts')) {
  function ors_javascripts() {
    // Install Twitter Bootstap JS
    wp_enqueue_script('twitter-bootstrap', ORS_PARENT_TEMPLATE_URL . "/js/bootstrap.min.js", array('jquery'), null, true);

    // Install parent theme script.js
    wp_enqueue_script('ors-parent-custom', ORS_PARENT_TEMPLATE_URL . "/script.js", array('jquery', 'twitter-bootstrap'), null, true);

    // Install child theme script.js
    if (file_exists(CHILD_TEMPLATE_DIR . "/script.js") == true) {
      wp_enqueue_script('ors-child-custom', CHILD_TEMPLATE_URL . "/script.js", array('jquery', 'twitter-bootstrap'), null, true);
    }
  }

  if (!is_admin()) {
    add_action('wp_print_scripts', 'ors_javascripts', 5);
  }
}

# This theme uses wp_nav_menu().
if ( function_exists( 'register_nav_menu' ) ) {
  register_nav_menu( 'top', 'Top Navigation Menu' );
  register_nav_menu( 'bottom', 'Bottom Navigation Menu' );
  register_nav_menu( 'sidebar', 'Sidebar Navigation Menu' );
}

?>
