<?php
/**
 * FOUNDATION WP FUNCTIONS
 *
 * If you have custom functions to add, use the /lib/functions directory, then
 * call them here using require_once. 
 * E.g. require_once( get_template_directory() . '/lib/functions/example.php' );
 * ----------------------------------------------------------------------------
 */
 
// Cleanup functions
require_once('lib/functions/cleanup.php'); 

// Required for Foundation to work properly
require_once('lib/functions/foundation.php');

// Register all navigation menus
require_once('lib/functions/navigation.php');

// Add menu walker
require_once('lib/functions/menu-walker.php');

// Create widget areas in sidebar and footer
require_once('lib/functions/widget-areas.php');

// Return entry meta information for posts
require_once('lib/functions/post-meta.php');

// Enqueue stylesheets
require_once('lib/functions/enqueue-styles.php');

// Enqueue scripts
require_once('lib/functions/enqueue-scripts.php');

// Add theme support
require_once('lib/functions/theme-support.php');

?>