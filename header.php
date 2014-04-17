<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
		<title><?php if(is_front_page()) bloginfo('name'); else wp_title(''); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<!--[if lt IE 9]>
			<script src="<?php bloginfo('template_directory'); ?>/js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
	</head>

	<body <?php body_class($class); ?>>
		<!--[if lt IE 8]>
			<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
		<![endif]-->

		<nav class="navbar navbar-inverse navbar-fixed-top" id="nav-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i> MENU</button>
					<a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
				</div>
				<div class="navbar-collapse collapse" id="nav-main">
					<?php
						$nav = array(
							'theme_location' => 'Main Menu',
							'menu' => 'Main Menu',
							'container' => false,
							'menu_class' => 'nav navbar-nav navbar-right',
							'menu_id' => 'nav-main',
							'fallback_cb' => 'wp_page_menu',
							'walker' => new Dropdown_Walker_Nav_Menu()
						);
						wp_nav_menu( $nav );
					?>
				</div>
			</div>
		</nav>

		