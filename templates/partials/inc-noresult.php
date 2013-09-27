<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress Kickstarter Theme
 */
?>

<article id="post-0" class="post no-results not-found">
	
	<?php //before_post(); ?>
	
	<h1 class="post-title"><?php _e( 'Nothing Found', 'thg_framework' ); ?></h1>
	<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'thg_framework' ); ?></p>
	<?php get_search_form(); ?>
	
	<?php //after_post(); ?>
	
</article>