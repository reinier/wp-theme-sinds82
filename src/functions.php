<?php

	// Clean up the <head>
	function removeHeadLinks() {
  	remove_action('wp_head', 'rsd_link');
  	remove_action('wp_head', 'wlwmanifest_link');
  }

  add_action('init', 'removeHeadLinks');
  remove_action('wp_head', 'wp_generator');

	add_theme_support( 'post-formats', array(
		'image', 'video', 'quote', 'link', 'audio'
	) );

  if (function_exists('register_sidebar')) {
  	register_sidebar(array(
  		'name' => 'Sidebar Widgets',
  		'id'   => 'sidebar-widgets',
  		'description'   => 'These are widgets for the sidebar.',
  		'before_widget' => '<div id="%1$s" class="widget %2$s">',
  		'after_widget'  => '</div>',
  		'before_title'  => '<h2>',
  		'after_title'   => '</h2>'
  	));
  }

	function permalink_links_to_rss($content) {
		global $wp_query;
		$postid = $wp_query->post->ID;
		if(is_feed()) {
			if($url = get_post_meta($postid, 'clicktrough', true)) {
				$title = get_the_title($postid);
				$content = $content.'<hr /><p>Ga naar <a href="'.$url.'">'.$title.'</a> of bekijk op <a href="'.get_permalink($postid).'">Sinds \'82</a></p>';
			} else {
				$content = $content.'<hr /><p>Bekijk artikel op <a href="'.get_permalink($postid).'">Sinds \'82</a></p>';
			}
		}
		return $content;
	}

	function clicktrough_as_rss_link($permalink) {
		global $wp_query;
		if($url = get_post_meta($wp_query->post->ID, 'clicktrough', true)) {
			return $url;
		}
		return $permalink;
	}

	add_filter('the_excerpt_rss', 'permalink_links_to_rss');
	add_filter('the_content', 'permalink_links_to_rss');
	add_filter('the_permalink_rss', 'clicktrough_as_rss_link');

?>
