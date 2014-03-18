<!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns:og="http://opengraphprotocol.org/schema/"
      xmlns:fb="http://www.facebook.com/2008/fbml">

<head>
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<meta charset="<?php bloginfo('charset'); ?>">

	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<link rel="alternate" type="application/rss+xml" title="RSS feed Sinds '82" href="/feed/" />

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Alles over &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archief - '; }
		      elseif (is_search()) {
		         echo 'Zoek op &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Niet gevonden - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - pagina '. $paged; }
		   ?>
	</title>

	<meta name="title" content="<?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Alles over &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archief - '; }
		      elseif (is_search()) {
		         echo 'Zoek op &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Niet gevonden - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description');
		        }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - pagina '. $paged; }
		   ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<meta name="author" content="Reinier Ladan">
	<meta name="Copyright" content="Copyright Reinier Ladan <?php echo date('Y'); ?>. All Rights Reserved.">

	<meta name="DC.title" content="Sinds '82">
	<meta name="DC.subject" content="Weblog over design, techniek en alles daar tussenin">
	<meta name="DC.creator" content="Reinier Ladan">

	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">

	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/_/img/apple-touch-icon.png">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/sinds2012.css">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>



	<div id="page-wrap">

		<div id="header">
			<h1 id="logo"><a href="<?php echo get_option('home'); ?>/"><span><?php bloginfo('name'); ?></span></a></h1>
			<div class="description">Stukje duiding bij het leven van <a rel="me" href="/over-sinds82-en-reinier-ladan" class="link-over">Reinier Ladan</a>.</div>
		</div>
