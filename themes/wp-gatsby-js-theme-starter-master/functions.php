<?php
add_theme_support( 'custom-logo' );
add_theme_support( 'menus' );


/* custom Portfolio post type */

function create_custom_portfolio_post_type(){
	// first arg name of post type, second arg an array of options
	register_post_type('portfolio',
					  array(
						  // labels is an array of additional options for label that WP expects
						  // for a custom post type
						  // labels are what we see in the dashboard for a custom post type.
						  // for visual purposes
						  'labels' => array(
							  	// __ is a function
						  		'name' => __('Portfolio'),
							  	'singular_name' => __('Portfolio')
						  ),
						  	// show in dash
						  	'show_in_admin_bar' => true,
						  	// show in API
						  	'show_in_rest' => true
					  ));
	// first arg is the post type
	// second arg is an array of what we want to support within our portfolio. In this instance
	// we will be able to add a thumbnail and an excerpt.
	add_post_type_support('portfolio', array('thumbnail', 'excerpt'));
}

// register with WordPress with init followed by the function that defines our post type

add_action('init', 'create_custom_portfolio_post_type');
