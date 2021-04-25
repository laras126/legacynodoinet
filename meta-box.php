<?php

// Code from tutorial 'How to Create a Better Meta Box in WordPress Post Editing Page' on Deluxe Blog Tips: http://www.deluxeblogtips.com/2010/04/how-to-create-meta-box-wordpress-post.html
// Thanks!


$prefix = 'dbt_';

$meta_box = array(
	'id' => 'wpfolio-meta-box',
	'title' => 'Artwork Info',
	'page' => 'post',
	'context' => 'normal',
	'priority' => 'high',
	'fields' => array(
		array(
			'name' => 'Dimensions', // name of field shown to user
			'desc' => 'Enter the artwork\'s dimensions here', // short description below the field
			'id' => $prefix . '_dimen', // id of field used to store the value
			'type' => 'text', // type: text, textarea, radio, or checkbox
			'std' => '' // set default value
		),
		array(
            'name' => 'Collaborators',
            'desc' => 'Enter any collaborators here',
            'id' => $prefix . '_collab',
            'type' => 'text',
            'std' => ''
		)
	)
);

add_action('admin_menu', 'wpfolio_add_box');

// Add meta box
function wpfolio_add_box() {
	global $meta_box;
	
	add_meta_box($meta_box['id'], $meta_box['title'], 'wpfolio_show_box', $meta_box['page'], $meta_box['context'], $meta_box['priority']);
}

// Callback function to show fields in meta box
function wpfolio_show_box() {
	global $meta_box, $post;
	
	// Use nonce for verification
	echo '<input type="hidden" name="wpfolio_meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
	
	echo '<table class="form-table">';

	foreach ($meta_box['fields'] as $field) {
		// get current post meta data
		$meta = get_post_meta($post->ID, $field['id'], true);
		
		echo '<tr>',
				'<th style="width:20%"><label for="', $field['id'], '">', $field['name'], '</label></th>',
				'<td>';
		switch ($field['type']) {
			case 'text':
				echo '<input type="text" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:97%" />',
					'<br />', $field['desc'];
				break;
			case 'text':
				echo '<textarea name="', $field['id'], '" id="', $field['id'], '" cols="60" rows="4" style="width:97%">', $meta ? $meta : $field['std'], '</textarea>',
					'<br />', $field['desc'];
				break;
		}
		echo 	'<td>',
			'</tr>';
	}
	echo '</table>';
} 


add_action('save_post', 'wpfolio_save_data');

// Save data from meta box
function wpfolio_save_data($post_id) {
	global $meta_box;
	
	// verify nonce
	if (!wp_verify_nonce($_POST['wpfolio_meta_box_nonce'], basename(__FILE__))) {
		return $post_id;
	}

	// check autosave
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return $post_id;
	}

	// check permissions
	if ('page' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id)) {
			return $post_id;
		}
	} elseif (!current_user_can('edit_post', $post_id)) {
		return $post_id;
	}
	
	foreach ($meta_box['fields'] as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
		
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], $new);
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}
}


// Display meta box info in post footer
function display_metabox_in_post() {
	echo '<p><?php get_post_meta($post->ID, "_collab", true); ?></p>';
	echo '<p><?php get_post_meta($post->ID, "_dimen", true); ?></p>';
}

add_action('thematic_belowpost', 'display_metabox_in_post'); 

?>