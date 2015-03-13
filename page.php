<?php get_header(); ?>
<div id="header">
	<h1 id="logo"><a href="<?php echo get_option('home'); ?>/"><span><?php bloginfo('name'); ?></span></a></h1>
	<div class="description">
		Openbare hersenspinsels van <a rel="me" href="/over-sinds82-en-reinier-ladan" class="link-over"> interaction designer en tech thinker Reinier Ladan</a>.<br />
		<?php include (TEMPLATEPATH . '/_follow-button.php' ); ?>
	</div>
</div>

<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div <?php post_class("rl-post-entry") ?> id="post-<?php the_ID(); ?>">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</div>
		<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
