<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head>
	<title><?php wp_title('|',true,'right'); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="robots" content="noodp">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
	<link href="http://staunchrobotsblog.herokuapp.com/blog/wp-content/themes/rachelbaker-bootstrapwp-Twitter-Bootstrap-for-WordPress-0c06b68/ico/favicon.png" type="image/png" rel="shortcut icon">
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<script type='text/javascript'>
	(function (d, t) {
	  var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
	  bh.type = 'text/javascript';
	  bh.src = '//www.bugherd.com/sidebarv2.js?apikey=0xamn3tyxqujy6als4oy2q';
	  s.parentNode.insertBefore(bh, s);
	  })(document, 'script');
	</script>
</head>
<body <?php body_class(); ?>>
	<div id="page">
		<header>
			<div class="header-wrapper">
				<a class="logo-placer" href="http://www.staunchrobots.com/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" title="" id="logo"></a>
				<nav>
					<ul class="desktop">
						<?php site_menu('Main Menu'); ?>
						<li><a href="http://twitter.com/staunchrobots"><img src="<?php echo get_template_directory_uri();?>/images/twitter-small.png"></a></li>
					</ul>
					<div class="menu-toggle-button" data-menu-id="mobile-menu">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</div>
					<ul class="menu-list" id="mobile-menu">
						<?php site_menu('Main Menu'); ?>
						<li><a href="http://twitter.com/staunchrobots"><img src="<?php echo get_template_directory_uri();?>/images/twitter-small.png"></a></li>
					</ul>
				</nav>
			</div>
		</header>

		<section id="main">
		