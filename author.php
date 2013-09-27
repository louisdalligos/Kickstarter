<?php
/**
 * The template for displaying Authors.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress Kickstarter Theme
 */

get_header(); ?>
	
	<section class="primary">
		<div class="entry" role="main">
			<?php if( have_posts() ): before_loop(); ?>
				
				<h1 class="post archive-heading"><?php printf( __( 'Author Archives: %s', 'thg_framework' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?></h1>
				
				<?php
					/* Since we called the_post() above, we need to
					 * rewind the loop back to the beginning that way
					 * we can run the loop properly, in full.
					 */
					rewind_posts();
	
					// If a user has filled out their description, show a bio on their entries.
					if ( get_the_author_meta( 'description' ) ) : 
				?>
					<div class="author-info">
						<div class="author-avatar">
							<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
						</div><!-- .author-avatar -->
						<div class="author-description">
							<h2><?php printf( __( 'About %s', 'thg_framework' ), get_the_author() ); ?></h2>
							<p><?php the_author_meta( 'description' ); ?></p>
						</div><!-- .author-description	-->
					</div><!-- .author-info -->
				
				<?php
					endif; 					
					
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