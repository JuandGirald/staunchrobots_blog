<!DOCTYPE html>
<!--[if lt IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="no-js ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.5, minimum-scale=0.5">
		<title><?php wp_title( 'by', true, 'right' ); bloginfo( 'name' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<?php

			if ( is_singular() && get_option( 'thread_comments' ) )
				wp_enqueue_script( 'comment-reply' );

			$options = get_option ( 'svbtle_options' ); 

			echo $options['google_analytics'];
 
			if( isset( $options['color'] ) && '' != $options['color'] )
				$color = $options['color'];
			else 
				$color = "#ff0000";
	
		?>

		<style>
		blockquote {border-color: <?php echo $color ?>;}figure.logo, aside.alsoby li a:hover, aside.kudo.complete span.circle {background-color: <?php echo $color ?>;}section.preview header#begin h2,ul#user_meta a:hover,nav.pagination span.next a,nav.pagination span.prev a {color: <?php echo $color ?>;}ul#user_meta a:hover,nav.pagination span.next a,nav.pagination span.prev a {border-color: <?php echo $color ?>;}::-moz-selection { background: <?php echo $color ?>; color: #fff; text-shadow: none;}::selection { background: <?php echo $color ?>; color: #fff; text-shadow: none;}
		</style>
		
		<?php wp_head();  ?>
		<style>
		figure.logo a {
			background-image: url(wp-content/themes/svbtle/images/logo.png);
			
		}
		figure.logo, aside.alsoby li a:hover, aside.kudo.complete span.circle{
			background-color: white;
		}
		/* ==========================================================================
   Navigation
   ========================================================================== */
.navbar {
  color:green;
  padding: 20px 0;
  background-color: transparent;
  background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.3)), to(rgba(0, 0, 0, 0)));
  background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0));
  background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0));
  background-image: -o-linear-gradient(top, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0));
  background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0));
  border: none;
  margin-bottom: 0;
  min-height: 0;
}
.navbar-fixed-top {
  border-bottom: none !important;
}
.minified {
  padding: 5px 0;
}
.minified .navbar-brand {
  height: auto !important;
}
img.logo {
  width: 100%
}
.darken-menu {
  background: rgba(0, 0, 0, 0.8);
  -webkit-transition: all 0.4s ease-out;
  -moz-transition: all 0.4s ease-out;
  -o-transition: all 0.4s ease-out;
  transition: all 0.4s ease-out;
}
.dark-menu {
  background-color: rgba(0, 0, 0, 0.8);
  -webkit-transition: all 0.4s ease-out;
  -moz-transition: all 0.4s ease-out;
  -o-transition: all 0.4s ease-out;
  transition: all 0.4s ease-out;
}
.navbar-header {
  display: table;
  width: 20%;
}
.navbar-header .navbar-brand {
  display: table-cell;
  vertical-align: middle;
  float: left;
  padding: 0;
  height: 50px;
}
.container > .navbar-header,
.container-fluid > .navbar-header,
.container > .navbar-collapse,
.container-fluid > .navbar-collapse {
  margin: 0;
}
.navbar-toggle {
  margin: 0;
  background: none;
  border: 1px solid #fff;
  color: #fff;
}
.navbar-toggle .icon-bar {
  background-color: #fff;
}
.navbar-nav {
  float: none;
  font-size: 1em;
  color: #fff;
  text-align: center;
}
.navbar-nav li a {
  color: #fff;
  text-decoration: none;
  background: none;
  background-image: none;
  background-position: 0 0;
  background-repeat: no-repeat;
}
#my-nav {
  float: right;
}
.navbar-nav li a:hover,
.navbar-nav li a:focus {
  background-color: inherit !important;
  color: #d9a13f;
  text-decoration: none;
}
.navbar-nav .active a {
  color: #d9a13f;
  background: none;
  background-image: none;
  background-position: 0 0;
  background-repeat: no-repeat;
}
.navbar-nav .active a:hover,
.navbar-nav .active a:focus {
  color: #bf8726;
  background: none;
}

#twitter-nav {
  padding-left:4px
}
		</style>

		
	</head>
	<body <?php body_class(); ?>>
		 <!-- Navigation Bar -->
  <div class="navbar navbar-fixed-top">
    <div class="container">

      <div class="navbar-header">
        <a class="navbar-brand" href="#welcome"><img class="logo" src="assets/white1.png" alt=""></a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <nav id="my-nav" class="navbar-collapse collapse" role="navigation">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#welcome">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#testimonials">Testimonials</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Leadership</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="/blog">Blog</a></li>
          <li><a href="http://twitter.com/staunchrobots" id="twitter-nav"><img src="assets/twitter-small.png" width="24" heigth="19"/></a></li>
        </ul>
      </nav><!--/.navbar-collapse -->

    </div>
  </div>

		<header id="sidebar">
			<figure class="logo medium">
				<a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a>
			</figure>
			<h1><a href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			<h2><a href="<?php echo home_url( '/' ); ?>"><?php echo $options['theme_username'] ?></a></h2>
			<h3><?php bloginfo( 'description' ); ?></h3>

			<ul id="user_nav">
				<?php   
				$pages = get_pages(); 
  foreach ( $pages as $page ): ?>

  	<li>
  		<a href="<?php echo get_page_link( $page->ID ) ?>" title=""><?php echo $page->post_title ?></a>
  	</li>

<?php endforeach; ?>  
				<?php if (!empty($options['website_link'])): ?>
					<li class="link feed">
						<a href="http://<?php echo $options['website_link'] ?>"><?php echo $options['website_link'] ?></a>
					</li>
				<?php endif ?>
				<?php if (!empty($options['twitter_username'])): ?>
					<li class="link twitter">
						<a target="_blank" href="http://twitter.com/<?php echo $options['twitter_username'] ?>">@<?php echo $options['twitter_username'] ?></a>
					</li>
				<?php endif ?>
				
				<?php if (!empty($options['github_username'])): ?>
					<li class="link github">
						<a target="_blank" href="http://github.com/<?php echo $options['github_username'] ?>">Github</a>
					</li>
				<?php endif ?>
				
				<?php if (!empty($options['contact_email'])): ?>
					<li class="link email">
						<a href="mailto:<?php echo $options['contact_email'] ?>">						
							say hello</a> 
					</li>
				<?php endif ?>
			
				<?php if ($options['rss-link']): ?>
					<li class="link feed">
				      <a href="<?php bloginfo('rss_url'); ?>">feed</a>
				    </li>		
				<?php endif ?>		
		
				<?php if ( is_active_sidebar( 'sidebar' ) ) dynamic_sidebar( 'sidebar' ); ?>

		  </ul>
		  <?php if ($options['attribution-link']): ?>
		    <aside id="svbtle_linkback">
		      <a href="https://github.com/gravityonmars/wp-svbtle">
		        <span class="logo_square"><span class="logo_circle">&nbsp;</span></span>&nbsp;<span class="svbtle">wp-svbtle</span>
		      </a>
		    </aside>
		  <?php endif ?>
		</header>
		
		<section id="river" role="main">
        
        <?php if (isset($_GET['not_found'])): ?>
        <div id="notice"><span>:(</span><br><br>Not found.</div>
        <?php endif; ?>


