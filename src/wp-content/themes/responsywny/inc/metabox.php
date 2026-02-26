<?php
// Add the Meta Box

function add_Main_Boxes_meta_box() {
    global $post;
    if ( 'header-home.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
add_meta_box(
'Main_Boxes_meta_box', // $id
'Boksy strona główna:', // $title
'show_Main_Boxes_meta_box', // $callback
'page', // $page
'normal', // $context
'high'); // $priority
}
}
add_action('add_meta_boxes', 'add_Main_Boxes_meta_box');


// Field Array
$prefix = 'Main_Boxes_';
$Main_Boxes_meta_fields = array(

array(
    'label'	=> '1. Tytuł Boksu',
    'id'	=> $prefix.'short-title',
    'type'	=> 'short-title'
),

array(
    'label'	=> '2. Treść Boksu',
    'id'	=> $prefix.'short-desc',
    'type'	=> 'short-desc'
),

array(
    'label'	=> '3. Link do Boksu',
    'id'	=> $prefix.'short-link',
    'type'	=> 'short-link'
),

array(
    'label'	=> '1. Tytuł Boksu',
    'id'	=> $prefix.'short-title-2',
    'type'	=> 'short-title-2'
),

array(
    'label'	=> '2. Treść Boksu',
    'id'	=> $prefix.'short-desc-2',
    'type'	=> 'short-desc-2'
),

array(
    'label'	=> '3. Link do Boksu',
    'id'	=> $prefix.'short-link-2',
    'type'	=> 'short-link-2'
),

array(
    'label'	=> '1. Tytuł Boksu',
    'id'	=> $prefix.'short-title-3',
    'type'	=> 'short-title-3'
),

array(
    'label'	=> '2. Treść Boksu',
    'id'	=> $prefix.'short-desc-3',
    'type'	=> 'short-desc-3'
),

);


// The Callback
function show_Main_Boxes_meta_box() {
global $Main_Boxes_meta_fields, $post;
// Use nonce for verification
echo '<input type="hidden" name="Main_Boxes_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';

// Begin the field table and loop
echo '<table class="form-table">';
foreach ($Main_Boxes_meta_fields as $field) {
// get value of this field if it exists for this post
$meta = get_post_meta($post->ID, $field['id'], true);
// begin a table row with
echo '<tr>
<th><label for="'.$field['id'].'">'.$field['label'].'</label></th>
<td>';
switch($field['type']) {
    
case 'short-title':
echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="60" />
        <br />';
break;

case 'short-desc':
echo '<textarea name="'.$field['id'].'" id="'.$field['id'].'" cols="60" rows="4">'.$meta.'</textarea>
<br />';
break;

case 'short-link':
echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" />
<br />';
break;

case 'short-title-2':
echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="60" />
        <br />';
break;

case 'short-desc-2':
echo '<textarea name="'.$field['id'].'" id="'.$field['id'].'" cols="60" rows="4">'.$meta.'</textarea>
<br />';
break;

case 'short-link-2':
echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" />
<br />';
break;

case 'short-title-3':
echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="60" />
        <br />';
break;

case 'short-desc-3':
echo '<textarea name="'.$field['id'].'" id="'.$field['id'].'" cols="60" rows="4">'.$meta.'</textarea>
<br />';
break;


} //end switch
echo '</td></tr>';
} // end foreach
echo '</table>'; // end table
};




// Save the Data
function save_Main_Boxes_meta($post_id) {
global $Main_Boxes_meta_fields;

// verify nonce
if (!wp_verify_nonce($_POST['Main_Boxes_meta_box_nonce'], basename(__FILE__)))
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
foreach ($Main_Boxes_meta_fields as $field) {
$old = get_post_meta($post_id, $field['id'], true);
$new = $_POST[$field['id']];
if ($new && $new != $old) {
update_post_meta($post_id, $field['id'], $new);
} elseif ('' == $new && $old) {
delete_post_meta($post_id, $field['id'], $old);
}
} // end foreach
}
add_action('save_post', 'save_Main_Boxes_meta');