<?php
/*
 * Program Name :Social icon widget
 */

class thg_social_widget extends WP_Widget{
	
	function thg_social_widget(){
		$widget_options = array('description' => __('Social icons widget'));
		parent::WP_Widget(false,__('THG Framework' .' - Social icons'),$widget_options);
	}
	
	function widget($args, $instance){
		extract($args, EXTR_SKIP);
		$title = apply_filters('widget_title', empty($instance['title']) ? 'Follow Me' : $instance['title']);
		$facebook = $instance['facebook_acct'];
		$twitter = $instance['twitter_acct'];
		$myblog = $instance['myblog'];
							
		$widget_content = '<ul id="social-icons"><li><a href="'.$facebook.'" id="fb" target="_blank" title="Join us on Facebook">Facebook</a></li>';
		$widget_content .= '<li><a href="'.$twitter.'" id="twitter" target="_blank" title="Follow us on Twitter">Twitter</a></li>';
		$widget_content .= '<li><a href="'.$myblog.'" id="myblog" target="_blank" title="Gowalla">Gowalla</a></li></ul>';
		
		
		echo $before_widget;
		if($title)
		echo $before_title . $title . $after_title ;
		echo $widget_content;	
		echo $after_widget;
	}
	
	function update($new_instance,$old_instance){
		$instance = $old_instance;
		$instance['title'] = stripslashes($new_instance['title']);
		$instance['facebook_acct'] = stripslashes($new_instance['facebook_acct']);
		$instance['twitter_acct'] = stripslashes($new_instance['twitter_acct']);
		$instance['myblog'] = stripslashes($new_instance['myblog']);
		
		return $instance;
	}
	
	function form($instance){
		$title = htmlspecialchars($instance['title']);
		$twitter_link = htmlspecialchars($instance['twitter_acct']);
		$facebook_link = htmlspecialchars($instance['facebook_acct']);
		$myblog_link = htmlspecialchars($instance['myblog']);
		
		
		echo '<p><label for="' . $this->get_field_id('title') . '">' . 'Title:' . '</label><input class="widefat" id="' . $this->get_field_id('title') . '" name="' . $this->get_field_name('title') . '" type="text" value="' . $title . '" /></p>';
		
		echo '<p><label for="' . $this->get_field_id('twitter_acct') . '">' . 'Twitter:' . '</label><input class="widefat" id="' . $this->get_field_id('twitter_acct') . '" name="' . $this->get_field_name('twitter_acct') . '" type="text" value="' . $twitter_link . '" /></p>';
		
		echo '<p><label for="' . $this->get_field_id('facebook_acct') . '">' . 'Facebook:' . '</label><input class="widefat" id="' . $this->get_field_id('facebook_acct') . '" name="' . $this->get_field_name('facebook_acct') . '" type="text" value="' . $facebook_link . '" /></p>';
		
		echo '<p><label for="' . $this->get_field_id('myblog') . '">' . 'YOur Blog URL:' . '</label><input class="widefat" id="' . $this->get_field_id('myblog') . '" name="' . $this->get_field_name('myblog') . '" type="text" value="' . $myblog_link . '" /></p>';
	}
}

function thg_social_widget_init(){
	register_widget('thg_social_widget');
}
	
//add_action('widgets_init','thg_social_widget_init');	
?>