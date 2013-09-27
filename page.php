<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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
						get_template_part( "templates/partials/inc", "page" );
					endwhile; 
					//after_loop();
				?>

			<?php else: ?>
				
				<?php get_template_part( 'templates/partials/inc', 'noresult' ); ?>
				
			<?php endif; ?>
		</div><!-- END .entry -->
	</section><!-- END .primary -->

	<?php get_sidebar(); ?>
	
<?php get_footer(); ?>