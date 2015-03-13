<?php
	$the_permalink_tmp = '';
	$extra_post_class = '';
	$custom_fields = get_post_custom();

	// Legacy for posts with a clicktrough custom field
	if(!empty($custom_fields['clicktrough'][0])){
		$echo = '<h2><a href="'.$custom_fields['clicktrough'][0].'">'.the_title('','',FALSE).'</a> ⇥</h2>';
		$the_permalink_tmp = '<div class="permalink"><a href="'.get_permalink().'" title="Permanente link naar dit bericht">☛</a></div>';
		$extra_post_class = 'rl-linked-entry';
	} elseif( 'link' == get_post_format() ){
		$echo = '';
		$the_permalink_tmp = '<div class="permalink"><a href="'.get_permalink().'" title="Permanente link naar dit bericht">☛</a></div>';
		$extra_post_class = 'rl-linked-entry';
	} else {
		$echo = '<h2><a href="'.get_permalink().'">'.the_title('','',FALSE).'</a></h2>';
		$extra_post_class = 'rl-post-entry';
	}
?>

<div <?php post_class($extra_post_class) ?> id="post-<?php the_ID(); ?>">
	<?php

		if (is_new_day()){
			$date_url = get_the_date('Y/m/d');

			if(date('Y/m/d') == $date_url){
				$tmpvar = the_date('d-m','','',FALSE); // anders werkt is_new_day niet
				$echo .= '<p class="the_date"><a href="/'.$date_url.'">vandaag</a></p>';
			} else {
				$echo .= '<p class="the_date"><a href="/'.$date_url.'">'.the_date('d-m','','',FALSE).'</a></p>';
			}
		}

		echo $echo;
		$echo = '';
	?>


	<div class="entry">
		<?php the_content(); ?>

		<?php
			if(!empty($custom_fields['via'][0])){
				echo '<div class="via">✁ <a href="'.$custom_fields['via'][0].'" title="'.$custom_fields['via'][0].'">via</a></div>';
			}
		?>
	</div>

	<?php
		echo $the_permalink_tmp;
		$the_permalink_tmp = '';
	?>

</div>
