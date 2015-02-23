<?php get_header(); ?>

<div id="header">
	<h1 id="logo"><a href="<?php echo get_option('home'); ?>/"><span><?php bloginfo('name'); ?></span></a></h1>
</div>


<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php
			$custom_fields = get_post_custom();

			if(!empty($custom_fields['clicktrough'][0])){
				$echo = '<h1 class="entry-title"><a href="'.$custom_fields['clicktrough'][0].'">'.the_title('','',FALSE).'</a> ⇥</h1>';
				$extra_post_class = 'rl-linked-entry';
			} else {
				$echo = '<h1 class="entry-title">'.the_title('','',FALSE).'</h1>';
				$extra_post_class = 'rl-post-entry';
			}

			$echo .= '<p class="the_date_single">Geplaatst op '.the_date('','','',FALSE).'</p>';
		?>
		<div <?php post_class($extra_post_class) ?> id="post-<?php the_ID(); ?>">
			<p id="go-to-index"><a href="/" title="klaar met lezen, ga naar de homepage">✔</a></p>
			<?php
				echo $echo;
				$echo = '';
			?>
			<div class="entry-content">
				<?php the_content(); ?>
				<?php
					if(!empty($custom_fields['via'][0])){
						echo '<div class="via">✁ <a href="'.$custom_fields['via'][0].'">via</a></div>';
					}
				?>
			</div>
		</div>
	<?php endwhile; endif; ?>
	<div class="description">
		<a href="/">Sinds '82</a> is het weblog van <a rel="me" href="/over-sinds82-en-reinier-ladan" class="link-over"> interaction designer en tech thinker Reinier Ladan</a>.<br />
		<?php include (TEMPLATEPATH . '/_/inc/follow-button.php' ); ?>
	</div>
</div>

<?php get_footer(); ?>
