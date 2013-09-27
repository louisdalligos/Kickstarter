<?php
/**
 * The template for displaying Category pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress Kickstarter Theme
 */

get_header(); ?>
	
	<section class="primary">
		<div class="entry" role="main">
			<?php if( have_posts() ): before_loop(); ?>
				
				<h1 class="post archive-heading"><?php printf( __( 'Category Archives: %s', 'thg_framework' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>
				<?php if ( category_description() ) : // Show an optional category description ?>
					<div class="post archive-meta"><?php echo category_description(); ?></div>
				<?php endif; ?>

				<?php					
					while( have_posts() ): the_post();						
						get_template_part( "templates/partials/inc", "content" );
					endwhile; 
					after_loop();
					
				?>
				
			<?php else: ?>
				
				<?php get_template_part( 'templates/partials/inc', 'noresult' ); ?>
				
			<?php endif; ?>
		</div><!-- end entry -->
	</section><!-- end primary -->

	<?php get_sidebar(); ?>
	
<?php get_footer(); ?>