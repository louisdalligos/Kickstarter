<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress Kickstarter Theme
 */

get_header(); ?>
	
	<section class="primary">
		<div class="entry" role="main">
			<?php if( have_posts() ): before_loop(); ?>
				
				<h1 class="post archive-heading">
					<?php
						if ( is_day() ) :
							printf( __( 'Daily Archives: %s', 'thg_framework' ), '<span>' . get_the_date() . '</span>' );
						elseif ( is_month() ) :
							printf( __( 'Monthly Archives: %s', 'thg_framework' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'thg_framework' ) ) . '</span>' );
						elseif ( is_year() ) :
							printf( __( 'Yearly Archives: %s', 'thg_framework' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'thg_framework' ) ) . '</span>' );
						else :
							_e( 'Archives', 'thg_framework' );
						endif;
					?>
				</h1>
				
				<?php					
					while( have_posts() ): the_post();						
						get_template_part( "templates/partials/inc", "content" );
					endwhile; 
					thg_load_woopagination( true );
					after_loop();
					 
				?>
				
			<?php else: ?>
				
				<?php get_template_part( 'templates/partials/inc', 'noresult' ); ?>
				
			<?php endif; ?>
		</div><!-- END .entry -->
	</section><!-- END .primary -->

	<?php get_sidebar(); ?>
	
<?php get_footer(); ?>