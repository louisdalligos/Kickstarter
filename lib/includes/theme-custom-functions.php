<?php 

	add_action( 'before_post', 'banner_text_before' );
	function banner_text_before(){
		echo "<div style='background: #000; color: #fff; margin-bottom: 20px; text-align: center; padding: 10px 0'>";
		echo "This is a banner text inserted before each post via 'before_post' hook";
		echo "</div>";
	}
	
	add_action( 'after_post', 'banner_text_after' );
	function banner_text_after(){
		echo "<div style='background: #000; color: #fff; margin-top: 20px; text-align: center; padding: 10px 0'>";
		echo "This is a banner text inserted after each post via 'after_post' hook";
		echo "</div>";
	}
	
	add_action( 'before_loop', 'before_loop_banner' );
	function before_loop_banner(){
		echo "<div style='background: #000; color: #fff; margin-top: 20px; text-align: center; padding: 10px 0'>";
		echo "This is a banner text inserted before post loop via 'before_loop' hook";
		echo "</div>";
	}
	
	add_action( 'after_loop', 'after_loop_banner' );
	function after_loop_banner(){
		echo "<div style='background: #000; color: #fff; margin-top: 20px; text-align: center; padding: 10px 0'>";
		echo "This is a banner text inserted before post loop via 'before_loop' hook";
		echo "</div>";
	}
	
	add_action( 'before_header', 'before_header_banner' );
	function before_header_banner(){
		echo "<div style='background: #a1d2ff; color: #000; text-align: center; padding: 10px 0'>";
		echo "This is a banner text inserted before header via 'before_header' hook";
		echo "</div>";
	}
	
	add_action( 'before_footer', 'before_footer_banner' );
	function before_footer_banner(){
		echo "<div style='background: #000; color: #fff; text-align: center; padding: 10px 0'>";
		echo "This is a banner text inserted before footer via 'before_footer' hook";
		echo "</div>";
	}
	
	add_action( 'after_footer', 'after_footer_banner' );
	function after_footer_banner(){
		echo "<div style='background: #000; color: #fff; text-align: center; padding: 10px 0'>";
		echo "This is a banner text inserted after footer via 'after_footer' hook";
		echo "</div>";
	}
	
	add_action( 'after_header', 'after_header_banner' );
	function after_header_banner(){
		echo "<div style='background: #a1d2ff; color: #000; text-align: center; padding: 10px 0'>";
		echo "This is a banner text inserted after header via 'after_header' hook";
		echo "</div>";
	}
	
	add_action( 'before_contents', 'before_contents_banner' );
	function before_contents_banner(){
		echo "<div style='background: #000; color: #fff; text-align: center; padding: 10px 0'>";
		echo "This is a banner text inserted after header via 'after_header' hook";
		echo "</div>";
	}
	
	add_action( 'after_contents', 'after_contents_banner' );
	function after_contents_banner(){
		echo "<div style='background: #000; color: #fff; text-align: center; padding: 10px 0'>";
		echo "This is a banner text inserted after header via 'after_header' hook";
		echo "</div>";
	}
	

	// DONT CHANGE ANYTHING HERE //
	if( function_exists( 'thg_load_woopagination' ) ){				
		add_action( 'after_loop', 'thg_load_woopagination' );			
	}
	
	if( function_exists( 'thg_add_post_navigation' ) ){
		add_action( 'after_post', 'thg_add_post_navigation' );
	}
	
	if( function_exists( 'thg_load_breadcrumb' ) ){
		add_action( 'before_contents', 'thg_load_breadcrumb' );
	}
	
	if( function_exists( 'thg_add_post_meta' ) ){
		add_action( 'after_title', 'thg_add_post_meta' ); 
	}
	
	if( function_exists( 'thg_add_post_meta_data' ) ){
		add_action( 'after_article', 'thg_add_post_meta_data' ); 
	}

	

?>