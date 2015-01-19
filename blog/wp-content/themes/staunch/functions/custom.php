<?php

// Image Sizes
set_post_thumbnail_size(150,150,true);
add_image_size('thumb',300,300,true);



// Menus
register_nav_menus( array(
	'primary' => 'Main Menu',
));

// Widgets
if (function_exists('register_sidebar')) {
    register_sidebar(array(
		'name' => 'Sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
}



