<?php
/**
 * FoundationWP Functions
 *
 * The child theme functions are loaded in addition to the parent functions, 
 * which is TwentyFourteen in this case.
 * Reference: http://codex.wordpress.org/Child_Themes#Using_functions.php
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * If you have custom functions to add, use the /lib/functions directory, then call
 * them here using require_once. 
 * E.g. require_once( get_template_directory() . '/lib/functions/example.php' );
 *
 */

// START FOUNDATIONWP FUNCTIONS

// Load theme styles and scripts
function foundationwp_scripts_styles() {
  global $wp_styles;

  // Load Stylesheet
  wp_enqueue_style('style.css', get_template_directory_uri().'/lib/styles/style.css', false ,'1.0', 'all' );

  // Load Scripts
  wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/bower_components/modernizr/modernizr.js', false ,'1.0', false );
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/bower_components/jquery/jquery.js', false ,'1.0', true );
  wp_enqueue_script( 'foundation', get_template_directory_uri() . '/bower_components/foundation/js/foundation.min.js', true ,'1.0', true );
  wp_enqueue_script( 'app', get_template_directory_uri() . '/lib/scripts/app.js', false ,'1.0', true );

}

// Hook into the WordPress Function
add_action( 'wp_enqueue_scripts', 'foundationwp_scripts_styles' );



?>