<?php

	global $post;

	$woo_metaboxes = array();

	if ( 'post' == get_post_type() || !get_post_type() ) {

		// This is the content of the "Custom Settings"
		// If you want to remove the "Custom Settings" just remove this snippets.
		
		$woo_metaboxes["_sample_text"] = array (
			"name"  => "sample_text",
			"std"  => "",
			"label" => "Sample Text",
			"type" => "text",
			"desc" => "This is the description."
		);
		
		$woo_metaboxes["_sample_upload"] = array (
			"name"  => "sample_upload",
			"std"  => "",
			"label" => "Sample Upload",
			"type" => "upload",
			"desc" => "This is the description."
		);
		
		$woo_metaboxes["_sample_textarea"] = array (
			"name"  => "sample_textarea",
			"std"  => "",
			"label" => "Sample Textarea",
			"type" => "textarea",
			"desc" => "This is the description."
		);
		
		$woo_metaboxes["_sample_calendar"] = array (
			"name"  => "sample_calendar",
			"std"  => "",
			"label" => "Sample Calendar",
			"type" => "calendar",
			"desc" => "This is the description."
		);
		
		$woo_metaboxes["_sample_text"] = array (
			"name"  => "sample_text",
			"std"  => "",
			"label" => "Sample Text",
			"type" => "text",
			"desc" => "This is the description."
		);
		
		$woo_metaboxes["_sample_time"] = array (
			"name"  => "sample_time",
			"std"  => "",
			"label" => "Sample Time",
			"type" => "time",
			"desc" => "This is the description."
		);
		
		$woo_metaboxes["_sample_time_mask"] = array (
			"name"  => "sample_time_mask",
			"std"  => "",
			"label" => "Sample Time Mask",
			"type" => "time_masked",
			"desc" => "This is the description."
		);
		
		$woo_metaboxes["_sample_select"] = array (
			"name"  => "sample_select",
			"std"  => "",
			"label" => "Sample Select",
			"type" => "select2",
			"desc" => "This is the description.",
			"options" => array(
							"Option1" => "Option 1", "Option2" => "Option 2"
						)
		);
		
		$woo_metaboxes["_sample_check"] = array (
			"name"  => "sample_check",
			"std"  => "",
			"label" => "Sample Checkbox",
			"type" => "checkbox",
			"desc" => "This is the description. True or False"
		);
		
		$woo_metaboxes["_sample_radio"] = array (
			"name"  => "sample_radio",
			"std"  => "",
			"label" => "Sample Radio",
			"type" => "radio",
			"desc" => "This is the description. True or False",
			"options" => array("Option1" => "Option1", "Option2" => "Option2")
		);
		
		$woo_metaboxes["_sample_images"] = array (
			"name"  => "sample_images",
			"std"  => "",
			"label" => "Sample Images",
			"type" => "images",
			"desc" => "Choose among these images",
			"options" => array(
							"Option1" => $theme_url."/functions/images/1c.png",
							"Option2" => $theme_url."/functions/images/2cl.png",
							"Option3" => $theme_url."/functions/images/2cr.png",
							"Option4" => $theme_url."/functions/images/3cl.png",
							"Option5" => $theme_url."/functions/images/3cm.png",
							"Option6" => $theme_url."/functions/images/3cr.png",
						)
		);

	}

?>