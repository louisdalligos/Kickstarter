<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress Kickstarter Theme
 */

get_header(); ?>
	
	<section class="primary">
		<div class="entry" role="main">
			<?php if( have_posts() ): ?>
			
				<?php
					//before_loop();
					while( have_posts() ): the_post();						
						get_template_part( "templates/partials/inc", "post" );
					endwhile; 
					//after_loop();
				?>

			<?php else: ?>
				
				<?php get_template_part( 'templates/partials/inc', 'noresult' ); ?>
				
			<?php endif; ?>
		</div><!-- end entry -->
	</section><!-- end primary -->

	<?php get_sidebar(); ?>
	
<?php get_footer(); ?>