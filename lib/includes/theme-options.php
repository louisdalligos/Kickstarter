<?php

function woo_options() {
	// VARIABLES
	$themename = "THG Theme";
	$shortname = "woohg";
	$manualurl = "";

	$GLOBALS['template_path'] = get_bloginfo('template_directory');
	$theme_url = $GLOBALS['template_path'];
	
	//Access the WordPress Categories via an Array
	$woo_categories = array();  
	$woo_categories_obj = get_categories('hide_empty=0');
	foreach ($woo_categories_obj as $woo_cat) { $woo_categories[$woo_cat->cat_ID] = $woo_cat->cat_name; }
	$categories_tmp = array_unshift($woo_categories, "Select a category:");    
		   
	//Access the WordPress Pages via an Array
	$woo_pages = array();
	$woo_pages_obj = get_pages('sort_column=post_parent,menu_order');    
	foreach ($woo_pages_obj as $woo_page) { $woo_pages[$woo_page->ID] = $woo_page->post_name; }
	$woo_pages_tmp = array_unshift($woo_pages, "Select a page:");       

	//More Options
	$images_dir =  get_template_directory_uri() . '/lib/functions/images/';
	$includes_images_dir =  get_template_directory_uri() . '/lib/includes/images/';

	// THIS IS THE DIFFERENT FIELDS
	$options = array();   

	$options[] = array( "name" => "Branding and Identity",
						"icon" => "misc",
						"type" => "heading");

	$options[] = array( "name" => "Site Logo",
						"desc" => "Upload your site logo here.",
						"id" => $shortname."_site_logo",
						"std" => "",
						"type" => "upload");
						
	$options[] = array( "name" => "Site Favicon",
						"desc" => "Upload your site favicon here.",
						"id" => $shortname."_site_favicon",
						"std" => "",
						"type" => "upload");	

	$options[] = array( "name" => "Site Copyright",
						"icon" => "misc",
						"type" => "heading");
	 
	$options[] = array( "name" => "General Site Copyright Text",
						"desc" => "Enter the site copyright text",
						"id" => $shortname."_site_copyright",
						"std" => "",
						"type" => "textarea");

	// Add extra options through function
	if ( function_exists("woo_options_add") )
		$options = woo_options_add($options);

	if ( get_option('woo_template') != $options) update_option('woo_template',$options);      
	if ( get_option('woo_themename') != $themename) update_option('woo_themename',$themename);   
	if ( get_option('woo_shortname') != $shortname) update_option('woo_shortname',$shortname);
				  
				  
	// Woo Metabox Options
	include( 'theme-metabox.php' );			
	

	// Add extra metaboxes through function
	if ( function_exists("woo_metaboxes_add") )
		$woo_metaboxes = woo_metaboxes_add($woo_metaboxes);
		
	if ( get_option('woo_custom_template') != $woo_metaboxes) update_option('woo_custom_template',$woo_metaboxes);   


	remove_meta_box( 'woothemes-settings' , 'page' , 'normal' );	


}

add_action( 'admin_head','woo_options' );  
add_action( 'init', 'woo_global_options' );
function woo_global_options(){
	global $woo_options;
	$woo_options = get_option( 'woo_options' ); 
}	

?>