<?php
/*
 *Program Name : Custom Post Type
 */

/*
 * Creating a post type. End this comment to enable 
class thg_{change_this}_class{
	function thg_add_{change_this}(){
		$support_editors = array('title','editor','thumbnail');
		//$taxonomies = array('category','post_tag');
		$labels = array(
						'name' => __('{change_this}','thg'),
						'singular_name' => __('{change_this}','thg'),
						'add_new' => __('Add New','thg'),
						'add_new_item' => __('Add New Item to {change_this}','thg'),
						'edit' => __('Edit {change_this}','thg'),
						'edit_item' => __('Edit {change_this}','thg'),
						'new_item' => __('New {change_this} item','thg'),
						'view' => __('View {change_this}','thg'),
						'view_item' => __('View {change_this}','thg'),
						'search_item' => __('Search Items to {change_this}','thg'),
						'not_found' => __('No item found in {change_this}','thg'),
						'not_found_in_trash' => __('No {change_this} item found in Trash','thg'),
						'parent' => __('Parent {change_this}','thg')
						);

		$args = array(
					  'labels' => $labels,
					  'description' => __('{change_this} custom post type.','thg'),
					  'show_ui' => true,
					  'exclude_from_search' =>false,
					  'supports' => $support_editors,
					  'public' => true,
					  'has_archive' => true
					  );
		//Register artist post type
		register_post_type('{change_this}', $args);			  
	}
	
	/*
	// Custom post category
	function thg_{change_this}_category(){
		$rewrite = array('slug' => '{change_this}-category','with_front' =>false);
		$labels = array( array('name' => __('{change_this} Category','remarkable'),
							  'singular_name' => __('{change_this} Category','remarkable'),
							  'search_items' => __('Search {change_this} category','remarkable'),
							  'popular_items' => __('Popular {change_this} Category','remarkable'),
							  'all_items' => __('All {change_this} Category','remarkable'),
							  'parent_item' => __('Parent {change_this} Category','remarkable'),
							  'edit_item' => __('Edit {change_this} Category','remarkable'),
							  'update_item' => __('Update {change_this} Category','remarkable'),
							  'add_new_item' => __('Add New {change_this} Category','remarkable'),
							  'new_item_name' => __('New {change_this} Category','remarkable')
							  )
						);
		register_taxonomy ( '{change_this}_category','{change_this}',
							array('labels' => $labels,
							'hierarchical' => true,
							'public' => true,
							'show_ui' => true,
							'query_var' => '{category_slug}',
							'show_tagcloud' => true,
							'rewrite' => $rewrite,
							'label' =>'{category_slug}'));			
	}
	
	// Custom post tag
	function thg_{change_this}_tag() {
		$rewrite = array('slug' => '{post_tag_slug}','with_front' =>false);
		$labels = array('name' => __( '{tag_taxonomy}', 'remarkable' ),
		 				 'singular_name' => __( '{tag_taxonomy}', 'taxonomy singular name' ),
						 'search_items' =>  __( 'Search {tag_taxonomy}' ),
						 'popular_items' => __( 'Popular {tag_taxonomy}' ),
						 'all_items' => __( 'All {tag_taxonomy}' ),
						 'parent_item' => null,
						 'parent_item_colon' => null,
						 'edit_item' => __( 'Edit {tag_taxonomy}' ), 
						 'update_item' => __( 'Update {tag_taxonomy}' ),
						 'add_new_item' => __( 'Add New {tag_taxonomy}' ),
						 'new_item_name' => __( 'New {tag_taxonomy} Name' ),
						 'separate_items_with_commas' => __( 'Separate {tag_taxonomy} with commas' ),
						 'add_or_remove_items' => __( 'Add or remove {tag_taxonomy}' ),
						 'choose_from_most_used' => __( 'Choose from most popular {tag_taxonomy}' ),
						 'menu_name' => __( '{tag_taxonomy}' ),
		);
		register_taxonomy('{tag_taxonomy}', '{change_this}',
						 array('hierarchical' => false,
							 'labels' => $labels,
							 'show_ui' => true,
							 'update_count_callback' => '_update_post_term_count',
							 'query_var' => true,
							 'rewrite' => $rewrite,
		)); 
	} 
}


//add_action('init',array('thg_{change_this}_class','thg_add_{change_this}'));
//add_action('init',array('thg_{change_this}_class','thg_{change_this}_category'));
//add_action('init',array('thg_{change_this}_class','thg_{change_this}_tag')); */ 
?>