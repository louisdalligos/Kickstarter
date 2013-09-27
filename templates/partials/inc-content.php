<?php
/**
 * @package WordPress Kickstarter Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( get_post_format(), get_the_ID() ); ?>>
	
	<?php //before_post(); ?>
	
	<?php if ( is_sticky() && is_home() && !is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'thg_framework' ); ?>
		</div>
	<?php endif; ?>

	<h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<?php after_title(); ?>
	<?php the_excerpt(); ?>	
	<?php after_article(); ?>
	<?php edit_post_link( __( 'Edit Post', 'thg_framework' ), '<span class="edit-link">', '</span>' ); // SHOWS the "EDIT POST" link when logged in. ?>
	<?php thg_add_post_navigation( true ); // ADD the post navigation links. Remove this if not needed. ?>
	
	<div class="clearfix"></div>
	
	<?php //after_post(); ?>
	
</article>