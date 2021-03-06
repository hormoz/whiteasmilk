<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; بایگانی وبلاگ <?php } ?> <?php wp_title(); ?></title>

	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" media="all" href="http://blog.local/wp-content/themes/whiteasmilk/rtl.css">
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php
        wp_enqueue_script('jquery');
        wp_enqueue_script('lazyload', get_template_directory_uri() . '/js/jquery.lazyload.mini.js', 'jquery', false);
    ?>

	<?php wp_get_archives('type=monthly&format=link'); ?>

	<?php wp_head(); ?>
</head>
<body>

<div id="page">
<div id="header">

	<h1><a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a></h1>
	<p id="blog_description"><?php bloginfo('description'); ?></p>
	
</div>
<hr class="hrhide" />
