<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<title><?php if (is_single() || is_page() || is_archive()) { wp_title('',true); } else { bloginfo('name'); echo(' &#8212; '); bloginfo('description'); } ?></title>
	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/custom.css" type="text/css" media="screen" />
	<!--[if lte IE 7]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/ie7.css" media="screen" />
	<![endif]-->
	<!--[if lte IE 6]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/ie6.css" media="screen" />
	<![endif]-->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>
</head>
<body class="custom">

<div id="container">

	<div id="masthead">
	
	<a style="" href="<?php bloginfo('url'); ?>" title="AAJA New England Chapter - Asian American Jurnalists Association"><img src="/wp-content/themes/aajane/images/AAJANE_logo.gif" alt="Asian American Journalists Association New England Chapter" width="970" height="280" border="0" /></a>
	</div>

	
	<ul id="nav">
		<!--<li><a <?php if (is_home()) echo('class="current" '); ?>href="<?php bloginfo('url'); ?>">front page</a></li>
		<li><a <?php if (is_archive() || is_page('archives')) echo('class="current" '); ?>href="<?php bloginfo('url'); ?>/archives/">archives</a></li>
		<li><a <?php if (is_page('about')) echo('class="current" '); ?>href="<?php bloginfo('url'); ?>/about/">about</a></li>-->
		<li class="rss"><a href="<?php bloginfo('rss2_url'); ?>">RSS</a></li>
	</ul>
	
	
	<div id="header_img">



	</div>
