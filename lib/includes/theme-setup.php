<?php

$shortname = "woohg";
$framework_icon = get_template_directory_uri() . '/assets/images/admin/option-icon.jpg';
$framework_logo = get_template_directory_uri() . '/assets/images/admin/option-logo.png';
update_option( 'framework_woo_backend_icon',$framework_icon);
update_option( 'framework_woo_backend_header_image',$framework_logo);
	
/*******************************
 Wordpress Menu Features
  -This is how you will enable the wordpress 3.0+ Menu System on your theme
********************************/

if ( function_exists( 'wp_nav_menu' ) ){
	if (function_exists('add_theme_support')) {
		add_theme_support('nav-menus');
		add_action( 'init', 'register_my_menus' );
		function register_my_menus() {
			register_nav_menus(
				array( 
					'main-navigation' => 'Main Navigation'
				)
			);
		}
	}
}

//##########################################//
//###### DO NOT CHANGE ANYTHING BELOW ######//
//##########################################//

function before_header(){ do_action( 'before_header' ); }
function after_header(){ do_action( 'after_header' ); }

function before_contents(){ do_action( 'before_contents' ); }
function after_contents(){ do_action( 'after_contents' ); }

function before_loop(){ do_action( 'before_loop' ); }
function after_loop(){ do_action( 'after_loop' ); }

function before_post(){ do_action( 'before_post' ); }
function after_post(){ do_action( 'after_post' ); }

function after_title(){ do_action( 'after_title' ); }
function after_article(){ do_action( 'after_article' ); }

function before_footer(){ do_action( 'before_footer' ); }
function after_footer(){ do_action( 'after_footer' ); }


function woohg_enque_admin_styles() {
	wp_register_style('adminstyleover', get_template_directory_uri() . "/admin-styles.css", null, null, false);
}

function woohg_enqueque_admin_styles() {
	wp_enqueue_style('adminstyleover');
}

function woohg_enque_admin_scripts() {
	wp_register_script('replacetext', get_template_directory_uri()."/assets/js/jquery.ba-replacetext.min.js", null, null, true);
	wp_register_script('removewoogh', get_template_directory_uri()."/assets/js/remove-woos.js", null, null, true);
}

function woohg_enqueque_admin_scripts() {
	wp_enqueue_script('replacetext');
	wp_enqueue_script('removewoogh');
}

function init_scripts() {
	
	// CSS first
	wp_register_style('main_style', get_stylesheet_directory_uri().'/style.css', null, '1.0', 'all' );
	wp_enqueue_style( 'main_style' );

	// JavaScript
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	if ( !is_admin() ) {
		wp_enqueue_script('jquery');
		wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.6.2.min.js', false, NULL );
		wp_enqueue_script('customplugins', get_template_directory_uri() . '/assets/js/plugins.min.js', array('jquery'), NULL, true );
		wp_enqueue_script('customscripts', get_template_directory_uri() . '/assets/js/main.min.js', array('jquery'), NULL, true );
	}
}

if(is_admin()){
	add_action('init', 'woohg_enque_admin_styles'); 
	add_action('init', 'woohg_enqueque_admin_styles');
	add_action('init', 'woohg_enque_admin_scripts');
	add_action('init', 'woohg_enqueque_admin_scripts');
}

// Enqueue scripts
add_action( 'wp_enqueue_scripts', 'init_scripts' );