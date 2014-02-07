<?php
/**
 * DEFAULT SIDEBAR
 * Grabs widgets added to the Sidebar widget area 
 * as defined in /lib/functions/widget-areas.php
 * Add widgets under Appearance > Widgets
 *
 * @package WordPress
 * @subpackage FoundationWP
 * @since FoundationWP 1.0
 */
?>

<aside id="sidebar" class="small-12 large-4 columns">
	<?php dynamic_sidebar("Sidebar"); ?>
</aside> <!-- small-12 large-4 columns -->