<?php



///////////// START thg_woo_pagination /////////////
if ( ! function_exists( 'thg_load_woopagination' ) ) :
	function thg_load_woopagination(){
		
		global $settings;
		$status = $settings["show_woo_pagination"];
		
		if( $status ): 
			$args = array( 
					'prev_next' => true, 
					'prev_text' => __( 'Previous Entries |', 'thg_framework' ), 
					'next_text' => __( ' | Next Entries', 'thg_framework' ), 
					'before' 	=> '<div class="pagination woo-pagination">', 
					'after' 	=> '</div>' 
				); 

			woo_pagination( $args );

		else: ?>

			<div class="pagination">
				<span class="prev"><?php next_posts_link( sprintf(__("Previous"), 'thg_framework' ) ); ?></span>
				<span class="next"><?php previous_posts_link( sprintf(__("Next"), 'thg_framework' ) ); ?></span>
			</div><!-- end pagination -->
			
	<?php
		endif;
	}
endif;

///////////// START thg_load_breadcrumb /////////////
if ( ! function_exists( 'thg_load_breadcrumb' ) ) :
	function thg_load_breadcrumb(){
		global $settings;
		$status = $settings['show_breadcrumb'];
		if( $status ): 
			$args = array(
				'separator' => '>',
				'before' => '<span class="breadcrumb-title">' . __( 'This is where you are:', 'thg_framework' ) . '</span>'
			);

			woo_breadcrumbs( $args ); 
		endif;
	}
endif;

///////////// START thg_add_post_meta_data /////////////
if ( ! function_exists( 'thg_add_post_meta_data' ) ) :

	/**
	 * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
	 */
	function thg_add_post_meta_data() {
		global $settings;
		$status = $settings['show_post_meta_footer'];
		if( $status ):
			// Translators: used between list items, there is a space after the comma.
			$categories_list = get_the_category_list( __( ', ', 'thg_framework' ) );

			// Translators: used between list items, there is a space after the comma.
			$tag_list = get_the_tag_list( '', __( ', ', 'thg_framework' ) );

			$date = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a>',
				esc_url( get_permalink() ),
				esc_attr( get_the_time() ),
				esc_attr( get_the_date( 'c' ) ),
				esc_html( get_the_date() )
			);

			$author = sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				esc_attr( sprintf( __( 'View all posts by %s', 'thg_framework' ), get_the_author() ) ),
				get_the_author()
			);

			// Translators: 1 is category, 2 is tag, 3 is the date and 4 is the author's name.
			if ( $tag_list ) {
				$utility_text = __( 'This entry was posted in %1$s and tagged %2$s on %3$s<span class="by-author"> by %4$s</span>.', 'thg_framework' );
			} elseif ( $categories_list ) {
				$utility_text = __( 'This entry was posted in %1$s on %3$s<span class="by-author"> by %4$s</span>.', 'thg_framework' );
			} else {
				$utility_text = __( 'This entry was posted on %3$s<span class="by-author"> by %4$s</span>.', 'thg_framework' );
			}

			printf(
				$utility_text,
				$categories_list,
				$tag_list,
				$date,
				$author
			);

			echo "<div class='clearfix'></div>";
		endif; 
	}
	
endif;
///////////// END thg_add_post_meta_data /////////////

///////////// START thg_add_post_meta /////////////
if( !function_exists( 'thg_add_post_meta' ) ):

	function thg_add_post_meta( $status ){ 
		global $settings; 
		$status = $settings['show_post_meta_header'];
		global $authordata; 
		
		if( $status ): 
		?>
		<p class="post-meta">
			<span class="meta-prep meta-prep-author"><?php _e('By', 'thg_framework'); ?> </span>
			<span class="author vcard"><a class="url fn n" href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" title="<?php printf( __( 'View all articles by %s', 'thg_framework' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
			<span class="meta-sep"> | </span>
			<span class="meta-prep meta-prep-entry-date"><?php _e('Published', 'thg_framework'); ?> </span>
			<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO') ?>"><?php the_time( get_option( 'date_format' ) ); ?></abbr></span>
		</p>
		
	<?php 
		endif;
	}
	
endif; 
///////////// END thg_add_post_meta /////////////

///////////// START thg_add_post_navigation /////////////
if( !function_exists( 'thg_add_post_navigation' ) ):

	function thg_add_post_navigation(){
		global $settings;
		$status = $settings['show_post_navigation'];
		if( $status ): 
			if( is_single() ):
				echo "<div class='post-navigation'>";
						previous_post_link("<span class='prev'>%link</span>");
						next_post_link("<span class='next'>%link</span>");
				echo "</div>";
			endif; 
		endif;
	}
	
endif; 
///////////// END thg_add_post_navigation /////////////

///////////// START CUSTOM EXCERPT LENGTH /////////////
function thg_excerpt_length( $length ) {
	$length = 100;
	return $length;
}
add_filter( 'excerpt_length', 'thg_excerpt_length' );

function thg_continue_reading_link() {
	return  __( '...<p class="readmore"><a href="'. get_permalink() .'">Read More +</a></p>','thg_theme' );
}

function thg_auto_excerpt_more( $more ) {
	return thg_continue_reading_link();
}

add_filter( 'excerpt_more', 'thg_auto_excerpt_more' );
///////////// END CUSTOM EXCERPT LENGTH /////////////

///////////// START CUSTOM EXCERPT LENGHT /////////////
function the_excerpt_max_charlength($charlength, $echo) {
	$excerpt = strip_tags(get_the_excerpt());
	$charlength++;

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			if ($echo) {
				echo mb_substr( $subex, 0, $excut ); 
			} else {
				return mb_substr( $subex, 0, $excut );
			}
		} else {
			if ($echo) {
				echo $subex;
			} else {
				return $subex;
			}
		}
		echo '';
	} else {
		if ($echo) {
			echo $excerpt;
		} else {
			return $excerpt;
		}
	}
}
///////////// END CUSTOM EXCERPT LENGHT /////////////


///////////// Retrieve all categories
function woohg_get_categories(){
		//$categories = array();
	$categories = get_categories('title_li=&orderby=name&hide_empty=0');
	return $categories;
}

/* This function will get the category ID using the category name passed in the parameter */
function get_category_id($cat_name){
	$term = get_term_by('name', $cat_name, 'category');
	return $term->term_id;
}

///////////// Retrieve all pages
function woohg_get_pages(){
	$pages = get_pages('title_li=&orderby=name&hide_empty=0');
	return $pages;
}

///////////// Trim the post title according to the number parameter. /////////////
function trim_post_title($char){
    $title = get_the_title($post->ID);
    $title = substr($title,0,$char);
    echo $title;
}
	
///////////// Sub Page Checker Return ID if parent page exists /////////////
function check_is_subpage() {
    global $post;                                 	  // load details about this page
        if ( is_page() && $post->post_parent ) {      // test to see if the page has a parent
               return $post->post_parent;             // return the ID of the parent post
        } else {                                      // there is no parent so...
               return false;                          // ...the answer to the question is false
        }
} 

///////////// STRAT REMOVE WORDPRESS GENERATED GALLERY STYLE /////////////
function remove_gallery_css( $css ) {
		return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );
	}
add_filter( 'gallery_style', 'remove_gallery_css' );
///////////// END REMOVE WORDPRESS GENERATED GALLERY STYLE /////////////

///////////// START SET TIME TO "UNTITLED" IF NO TITLE IS SET /////////////
add_filter('the_title', 'thg_post_title');
function thg_post_title($title) {
	if ($title == '') {
		return 'Untitled';
	} else {
		return $title;
	}
}

add_filter('wp_title', 'thg_filter_wp_title');
function thg_filter_wp_title($title) {
	return $title . esc_attr(get_bloginfo('name'));
}
///////////// END SET TIME TO "UNTITLED" IF NO TITLE IS SET /////////////

add_action( 'init', 'thg_add_shortcodes' );
function thg_add_shortcodes() {
	add_shortcode('wp_caption', 'fixed_img_caption_shortcode');
	add_shortcode('caption', 'fixed_img_caption_shortcode');
	add_filter('img_caption_shortcode', 'my_img_caption_shortcode_filter',10,3);
	add_filter('widget_text', 'do_shortcode');
}

function my_img_caption_shortcode_filter($val, $attr, $content = null){
	
	extract(shortcode_atts
				(array( 'id'	=> '',
						'align'	=> '',
						'width'	=> '',
						'caption' => ''
						), 
				$attr)
			);
			
	if ( 1 > (int) $width || empty($caption) )
		return $val;
	
	$capid = '';
	
	if ( $id ) {
		$id = esc_attr($id);
		$capid = 'id="figcaption_'. $id . '" ';
		$id = 'id="' . $id . '" aria-labelledby="figcaption_' . $id . '" ';
	}
	
	return '<figure ' . $id . 'class="wp-caption ' . esc_attr($align) . '" style="width: '
	. (10 + (int) $width) . 'px">' . do_shortcode( $content ) . '<figcaption ' . $capid 
	. 'class="wp-caption-text">' . $caption . '</figcaption></figure>';

}

function thg_framework_get_page_number() {
	if (get_query_var('paged')) {
		print ' | ' . __( 'Page ' , 'the_framework') . get_query_var('paged');
	}
}

///////////// START COMMENTS /////////////
if ( ! function_exists( 'thg_framework_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own thg_framework_comment(), and that function will be used instead.
 */
function thg_framework_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments.
	?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		<p><?php _e( 'Pingback:', 'thg_framework' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( 'Edit', 'thg_framework' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
		// Proceed with normal comments.
		global $post;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<header class="comment-meta comment-author vcard">
				<?php
					echo get_avatar( $comment, 44 );
					printf( '<cite class="fn">%1$s %2$s</cite>',
						get_comment_author_link(),
						// If current post author is also comment author, make it known visually.
						( $comment->user_id === $post->post_author ) ? '<span> ' . __( 'Post author', 'thg_framework' ) . '</span>' : ''
					);
					printf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
						esc_url( get_comment_link( $comment->comment_ID ) ),
						get_comment_time( 'c' ),
						/* translators: 1: date, 2: time */
						sprintf( __( '%1$s at %2$s', 'thg_framework' ), get_comment_date(), get_comment_time() )
					);
				?>
			</header><!-- .comment-meta -->

			<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'thg_framework' ); ?></p>
			<?php endif; ?>

			<section class="comment-content comment">
				<?php comment_text(); ?>
				<?php edit_comment_link( __( 'Edit', 'thg_framework' ), '<p class="edit-link">', '</p>' ); ?>
			</section><!-- .comment-content -->

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'thg_framework' ), 'after' => ' <span>&darr;</span>', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->
	<?php
		break;
	endswitch; // end comment_type check
}
endif;
///////////// END COMMENTS /////////////