<?php
/**
 * ENQUEUE SCRIPTS
 * Injects theme javascript files to the document
 * Load additional scripts using the same method
 * Reference: http://codex.wordpress.org/Function_Reference/wp_enqueue_script
 * ----------------------------------------------------------------------------
 */

if (!function_exists('foundationwp_scripts')) :
  function foundationwp_scripts() {

    // deregister the jquery version bundled with wordpress
    wp_deregister_script( 'jquery' );

    // enqueue modernizr, jquery and foundation
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/bower_components/modernizr/modernizr.js', false ,'1.0', false );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/bower_components/jquery/jquery.js', false ,'1.0', true );
    wp_enqueue_script( 'foundation', get_template_directory_uri() . '/bower_components/foundation/js/foundation.min.js', true ,'1.0', true );
    wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', false ,'1.0', true );
  
  }

  add_action( 'wp_enqueue_scripts', 'foundationwp_scripts' );
endif;

?>