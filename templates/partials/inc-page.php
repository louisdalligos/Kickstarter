<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress Kickstarter Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php //before_post(); ?>
	
	<h1 class="post-title"><?php the_title(); ?></h1>
	<?php the_content(); ?>	
	<?php edit_post_link( __( 'Edit Post', 'thg_framework' ), '<span class="edit-link">', '</span>' ); // SHOWS the "EDIT POST" link when logged in. ?>
	<?php 
		$show_commments = false;

		if( !is_home() || !is_front_page() ):
			if( $show_commments ):
				comments_template( '', true ); 
			endif;
		endif;
	?>
	
	<?php //after_post(); ?>
	
</article>