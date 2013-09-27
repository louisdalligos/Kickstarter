<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress Kickstarter Theme
 */

get_header(); ?>
	
	<section class="primary full-width">
		<div class="entry" role="main">
			
			<article id="post-0" class="post error404 no-results not-found">
		
				<h1 class="post-title"><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'thg_framework' ); ?></h1>
				<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'thg_framework' ); ?></p>
				<?php get_search_form(); ?>

			</article>

		</div><!-- END .entry -->
	</section><!-- END .primary -->
	
<?php get_footer(); ?>