<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress Kickstarter Theme
 */

get_header(); ?>
	
	<section class="primary">
		<div class="entry" role="main">
			<?php if( have_posts() ): before_loop(); ?>
				
				<h1 class="post archive-heading"><?php printf( __( 'Search Results for: %s', 'thg_framework' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				
				<?php					
					while( have_posts() ): the_post();						
						get_template_part( "templates/partials/inc", "content" );
					endwhile; 
					after_loop();					
				?>
				
			<?php else: ?>
				
				<?php get_template_part( 'templates/partials/inc', 'noresult' ); ?>
				
			<?php endif; ?>
		</div><!-- END .entry -->
	</section><!-- END .primary -->

	<?php get_sidebar(); ?>
	
<?php get_footer(); ?>