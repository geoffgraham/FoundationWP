<?php
/**
 * DEFAULT PAGE
 * @package WordPress
 * @subpackage FoundationWP
 * @since FoundationWP 1.0
 */

get_header(); ?>

	<div class="small-12 large-8 columns" role="main">
	
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			
			<div class="entry-content">
				<?php the_content(); ?>
			</div> <!-- entry-content -->
			
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationWP'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			
			<?php comments_template(); ?>
		</article>
	<?php endwhile;?>

	</div> <!-- small-12 large-8 columns -->
	<?php get_sidebar(); ?>
		
<?php get_footer(); ?>