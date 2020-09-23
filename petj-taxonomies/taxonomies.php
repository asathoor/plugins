<?php
/*
* Plugin Name: Taxonomies - english version
* Description: Create a hierarchy of taxonomies for your posts. Note: this is the international branch of the plugin.
* Version: 2.0
* Author: Per Thykjær Jensen
* Author URI: https://github.com/asathoor/plugins
*/

/* this function will register the taxonomy */
function petj_register_taxonomy()
{
    $labels = [
        'name'              => _x('Taxonomies', 'taxonomy general name'),
        'singular_name'     => _x('Taxonomy', 'taxonomy singular name'),
        'search_items'      => __('Seek Taxonomy'),
        'all_items'         => __('Alle Taxonomies'),
        'parent_item'       => __('Parent Taxonomy'),
        'parent_item_colon' => __('Parent taxonomy:'),
        'edit_item'         => __('Edit the taxonomy'),
        'update_item'       => __('Update the  taxonomy'),
        'add_new_item'      => __('Create new taxonomy'),
        'new_item_name'     => __('New Taxonomy Name'),
        'menu_name'         => __('Hierarchical Taxonomies'),
];

/* arguments for the taxonomy */
$args = [
	'hierarchical'      => true, // make it hierarchical (as in category / sub-category)
	'labels'            => $labels,
	'show_ui'           => true,
	'show_admin_column' => true,
	'query_var'         => true,
	'rewrite'           => ['slug' => 'taxonomy'],
	'show_in_rest'      => TRUE, // will make the taxonomy visible in block editors
	'has_archive'      => true,
];
register_taxonomy('taxonomy', ['post'], $args);
}

/* hook into the initialization */
add_action('init', 'petj_register_taxonomy');
