<?php get_header(); ?>

<div id="content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<?php include (TEMPLATEPATH . '/_/inc/home-loop.php' ); ?>
	
		<?php endwhile; ?>
	
		<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>
	
		<?php else : ?>
	
			<h2>Not Found</h2>
	
		<?php endif; ?>
</div>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
