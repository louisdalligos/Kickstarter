<?php

add_action('after_setup_theme', 'thg_framework_setup');
if ( ! isset( $content_width ) ) $content_width = 1140;

function thg_framework_setup(){
	
	global $settings;
	
	// SHOW_WOO_PAGINATION | Value = True or False | If false, you will use WordPress Default Pagination
	// SHOW_POST_NAVIGATION | Value = True or False | If true, you will be able to see the "Next and Previous" post link
	// SHOW_BREADCRUMB | Value = True or False | If false, breadcrumb will not appear
	// SHOW_POST_META_HEADER | Value = True or False | If true, the "author" and "date publish" will be displayed
	// SHOW_POST_META_FOOTER  Value = True or False | If true, the "category" and "tag" will be displayed
	
	$settings = array(
		'show_woo_pagination' => true,
		'show_post_navigation' => true,
		'show_breadcrumb' => true,
		'show_post_meta_header' => true,
		'show_post_meta_footer' => true,
		'support_background' => true,
		'support_post_format' => false
	);
	
	include_once('lib/includes/theme-custom-posttype.php');		// Use this to create custom post types
	include_once('lib/includes/theme-sidebar.php');						// Use this to create/register sidebars
	include_once('lib/includes/theme-widget.php');						// Use this to create custom widgets
	include_once('lib/includes/theme-helper.php');						// Contains built-in functions by HTML Guys
	include_once('lib/includes/theme-setup.php');							// Contains theme setup.settings
	include_once('lib/includes/theme-options.php');						// Use this to create Theme Options and Post Metaboxes
	include_once('lib/includes/theme-custom-functions.php');	// Use this to create your own functions
	include_once('functions/admin-init.php');							// Loads Woo Framework

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1500, 9999 ); // Unlimited height, soft crop

	if( true == $settings['support_background'] ){
		add_theme_support( 'custom-background' );
	}
	
	if( true == $settings['support_post_format'] ){
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat') );
	}
	
}

