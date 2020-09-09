<?php
/*
* Plugin Name: Music Genre Taxonomy
* Description: A short example showing how to add a taxonomy called MUsic Genre
* Version: 1.0
* Author: Per Thykjær Jensen
* Author URI: https://github.com/asathoor/plugins
*/
 
function petj_register_taxonomy_music()
{
    $labels = [
        'name'              => _x('Music', 'taxonomy general name'),
        'singular_name'     => _x('Music', 'taxonomy singular name'),
        'search_items'      => __('Search Music'),
        'all_items'         => __('All Music'),
        'parent_item'       => __('Parent: Music'),
        'parent_item_colon' => __('Parent: Music:'),
        'edit_item'         => __('Edit Music'),
        'update_item'       => __('Update Music'),
        'add_new_item'      => __('Add New Genre'),
        'new_item_name'     => __('New Genre Name'),
        'menu_name'         => __('Music Genre'),
];
$args = [
	'hierarchical'      => true, // make it hierarchical (like categories)
	'labels'            => $labels,
	'show_ui'           => true,
	'show_admin_column' => true,
	'query_var'         => true,
	'rewrite'           => ['slug' => 'music'],
	'show_in_rest'      => TRUE,
	'has_archive'      => true,
];
register_taxonomy('music', ['post'], $args);
}
add_action('init', 'petj_register_taxonomy_music');
