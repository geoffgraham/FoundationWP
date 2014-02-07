<?php
/**
 * POST META
 * Injects time, date and author of a post
 * ----------------------------------------------------------------------------
 */
 
if(!function_exists('foundationwp_entry_meta')) :
  function foundationwp_entry_meta() {
    echo '<time class="updated" datetime="'. get_the_time('c') .'" pubdate>'. sprintf(__('Posted on %s at %s.', 'foundationwp'), get_the_time('l, F jS, Y'), get_the_time()) .'</time>';
    echo '<p class="byline author">'. __('By', 'foundationwp') .' <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .'</a></p>';
  }
endif;
?>