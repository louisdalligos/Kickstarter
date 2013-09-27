<?php 

/********************************************************
DEFINE ALL THE WIDGETIZED AREA
	-This function will define a widgetized area on your theme
*********************************************************/

function thg_widgets_init() {
	// Setup and initialized the widgetized area
	register_sidebar( array(
		'name' => __( 'Main Widget Area','thg' ),
		'id' => 'main-widget-area',
		'description' => __( 'Main Widget Area','thg' ),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
// Register sidebars by running thg_widgets_init() on the widgets_init hook.
add_action( 'widgets_init', 'thg_widgets_init' ); 

?>