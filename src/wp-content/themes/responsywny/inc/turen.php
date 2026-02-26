<?php
// Add the Meta Box
function add_turen_meta_box() {
add_meta_box(
'turen_meta_box', // $id
'Krótki opis', // $title
'show_turen_meta_box', // $callback
'special2', // $page
'normal', // $context
'high'); // $priority
}
add_action('add_meta_boxes', 'add_turen_meta_box');


// Field Array
$prefix = 'turen_';
$turen_meta_fields = array(
array(
    'label'	=> 'Krótki opis',
    'desc'	=> 'Wpisz krótki opis.',
    'id'	=> $prefix.'desc',
    'type'	=> 'desc'
),

);


// The Callback
function show_turen_meta_box() {
global $turen_meta_fields, $post;
// Use nonce for verification
echo '<input type="hidden" name="turen_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';

// Begin the field table and loop
echo '<table class="form-table">';
foreach ($turen_meta_fields as $field) {
// get value of this field if it exists for this post
$meta = get_post_meta($post->ID, $field['id'], true);
// begin a table row with
echo '<tr>
<th><label for="'.$field['id'].'">'.$field['label'].'</label></th>
<td>';
switch($field['type']) {


case 'desc':
echo '<textarea name="'.$field['id'].'" id="'.$field['id'].'" cols="60" rows="4">'.$meta.'</textarea>
		<br /><span class="description">'.$field['desc'].'</span>';
break;

			
} //end switch
echo '</td></tr>';
} // end foreach
echo '</table>'; // end table
echo '<table><tr><td><br><b>Ważna informacja: minimalny rozmiar wgrywanego obrazka wyróżniającego to:  720px szerokości i 520px wysokości. </b></td></tr></table>';

};




// Save the Data
function save_turen_meta($post_id) {
global $turen_meta_fields;

// verify nonce
if (!wp_verify_nonce($_POST['turen_meta_box_nonce'], basename(__FILE__)))
return $post_id;
// check autosave
if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
return $post_id;
// check permissions
if ('page' == $_POST['post_type']) {
if (!current_user_can('edit_page', $post_id))
return $post_id;
} elseif (!current_user_can('edit_post', $post_id)) {
return $post_id;
}

// loop through fields and save the data
foreach ($turen_meta_fields as $field) {
$old = get_post_meta($post_id, $field['id'], true);
$new = $_POST[$field['id']];
if ($new && $new != $old) {
update_post_meta($post_id, $field['id'], $new);
} elseif ('' == $new && $old) {
delete_post_meta($post_id, $field['id'], $old);
}
} // end foreach
}
add_action('save_post', 'save_turen_meta');
