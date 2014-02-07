<?php 
/**
 * SEARCH TEMPLATE
 * @package WordPress
 * @subpackage FoundationWP
 * @since FoundationWP 1.0
 */

get_header(); ?>

	<div class="small-12 large-8 columns" role="main">
	
		<h2><?php _e('Search Results for', 'FoundationWP'); ?> "<?php echo get_search_query(); ?>"</h2>
	
	<?php if ( have_posts() ) : ?>
	
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>
		
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		
	<?php endif;?>
	
	<?php if ( function_exists('FoundationWP_pagination') ) { FoundationWP_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'FoundationWP' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'FoundationWP' ) ); ?></div>
		</nav> <!-- post-nav -->
	<?php } ?>

	</div> <!-- small-12 large-8 columns -->
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>