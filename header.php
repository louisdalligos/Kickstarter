<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package WordPress Kickstarter Theme
 */
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title(''); ?></title>
	<meta name="description" content="<?php echo bloginfo('description'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php 
		global $woo_options;
		$favicon = ( $woo_options['woohg_site_favicon'] == null ? $favicon = get_bloginfo( 'stylesheet_directory' )."/assets/images/favicon.ico" : $woo_options['woohg_site_favicon'] ); 
	?>
  <link href="<?php echo $favicon; ?>" rel="shortcut icon" type="image/x-icon" />
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header>
		<?php //before_header(); ?>
		<a href="<?php echo home_url(); ?>">
			<?php if( $woo_options['woohg_site_logo'] <> null ): ?>
				<img src="<?php echo $woo_options['woohg_site_logo']; ?>" alt="<?php echo get_bloginfo( 'name' ); ?>" title="<?php echo get_bloginfo( 'description' ); ?>">
			<?php else: ?>
				<img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/images/logo.png" alt="<?php echo get_bloginfo( 'name' ); ?>" title="<?php echo get_bloginfo( 'description' ); ?>">
			<?php endif; ?>
		</a>
		<nav>
			<?php wp_nav_menu( 
					array( 'theme_location' => 'main-navigation', 
						   'menu_class' => '', 
						   'container' => false,
						   'container_class' => ''
					) 
			  ); 
			?>
		</nav>		
		<?php //after_header(); ?>
	</header>
	
	<div id="content">
		<?php //before_contents(); ?>