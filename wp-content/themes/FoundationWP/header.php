<?php
/**
 * HEADER
 * @package WordPress
 * @subpackage FoundationWP
 * @since FoundationWP 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="off-canvas-wrap">
  <div class="inner-wrap">

  <nav class="tab-bar show-for-small-only">
    
    <section class="left-small">
      <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
    </section> <!-- left-small -->
    
    <section class="middle tab-bar-section">
      
      <h1 class="title"><?php bloginfo( 'name' ); ?></h1>

    </section> <!-- middle tab-bar-section -->
  </nav>

  <aside class="left-off-canvas-menu">
    <?php foundationwp_mobile_off_canvas(); ?>
  </aside> <!-- left-off-canvas-menu -->
  
  <div class="top-bar-container contain-to-grid show-for-medium-up">
    <nav class="top-bar" data-topbar="">
      
      <ul class="title-area">
        <li class="name">
          <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        </li>          
      </ul>
      
      <section class="top-bar-section">
          <?php foundationwp_top_bar_l(); ?>
          <?php foundationwp_top_bar_r(); ?>
      </section> <!-- top-bar-section -->
       
    </nav> <!-- top-bar -->
  </div> <!-- top-bar-container contain-to-grid show-for-medium-up -->

  <header class="row" role="banner">
    <div class="small-12 columns">
      <h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
      <h4 class="subheader"><?php bloginfo('description'); ?></h4>
      <hr/>
    </div> <!-- small-12 columns -->
  </header> <!-- row -->

  <section class="container" role="document">
    <div class="row">