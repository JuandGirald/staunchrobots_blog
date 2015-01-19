<?php
// ------------------------------------------
// Don't edit this file, use custom.php only!
// ------------------------------------------
 
// Core Enqueues
function mr_core_scripts_styles() {
	global $wp_styles;
	if(is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

	wp_enqueue_script('jquery');
	wp_enqueue_script('jquery.main.js',get_template_directory_uri().'/js/jquery.main.js');
	wp_enqueue_script('modernizr.min.2.7.1',get_template_directory_uri().'/js/modernizr.min.2.7.1.js');
	

	wp_enqueue_style('mr-style',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','mr_core_scripts_styles');

// Generate Pretty Menu
function site_menu($name='',$x=1) {
	if($name) {
		$menu = wp_nav_menu('container_class=menu&echo=0&menu='.$name.'&depth='.$x);
	} else {
		$menu = wp_nav_menu('container_class=menu&echo=0&depth='.$x);
	}

	/* Remove the wrapper and the poorly used title element */
	$menu = str_replace('<div class="menu">','',$menu);
	$menu = str_replace('<ul>','',$menu);
	$menu = str_replace('</ul></div>','',$menu);
	$menu = preg_replace('/<ul id=\"(.*?)\" class=\"(.*?)\">/','',$menu);
	$menu = preg_replace('/title=\"(.*?)\"/','',$menu);
	echo $menu;
}

// If is page or subpage
function is_page_or_subpage_of($x){
	global $post;

	// If numeric or slug, get the corresponding information
	if(!is_numeric($x)) {
		$page = get_page_by_path($x);
	} else {
		$page->ID = $x;
	}

	// If page or subpage
	if(is_page($x) || in_array($page->ID,get_post_ancestors($post->ID))) {
		return true;
	} else {
		return false;
	}
}

// Remove Generator
function no_generator() { return ''; }
add_filter('the_generator','no_generator');

// Remove Gravity Forms TabIndex's
add_filter("gform_tabindex", create_function("", "return false;"));

// Editor Style
add_editor_style();

// Theme Support
add_theme_support('automatic-feed-links');
add_theme_support('post-thumbnails');
add_theme_support('nav-menus');

// Disable auto-linking to full size images
update_option('image_default_link_type','none');



