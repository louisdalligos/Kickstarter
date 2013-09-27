<?php
/**
 * @package WordPress Kickstarter Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( get_post_format(), get_the_ID() ); ?>>
	
	<?php //before_post(); ?>
	
	<h1 class="post-title"><?php the_title(); ?></h1>
	<?php after_title(); ?>
	<?php the_content(); ?>	
	<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'thg_framework' ), 'after' => '</div>' ) ); // SHOWS the page break navigation. ?>
	<?php after_article(); ?>
	<p>&nbsp;</p>
	<?php edit_post_link( __( 'Edit Post', 'thg_framework' ), '<span class="edit-link">', '</span>' );  // SHOWS the "EDIT POST" link when logged in. ?>
	
	<?php 
		$show_commments = true;

		if( $show_commments ):
			comments_template( '', true ); 
		endif;
		
		//after_post();
	?>
	
</article>