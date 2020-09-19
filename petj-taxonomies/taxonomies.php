<?php
/*
* Plugin Name: Multimusens taxonomier
* Description: Hierarkisk inddeling af artikler, fx efter sprog.
* Version: 1.0
* Author: Per Thykjær Jensen
* Author URI: https://github.com/asathoor/plugins
*/

function petj_register_taxonomy_music()
{
    $labels = [
        'name'              => _x('Taxonomies', 'taxonomy general name'),
        'singular_name'     => _x('Taxonomi', 'taxonomy singular name'),
        'search_items'      => __('Søg taxonomi'),
        'all_items'         => __('Alle Taxonomierne'),
        'parent_item'       => __('Overordnet taxonomi'),
        'parent_item_colon' => __('Overordnet taxonomi:'),
        'edit_item'         => __('Rediger taxonomien'),
        'update_item'       => __('Opdater taxonomien'),
        'add_new_item'      => __('Lav en ny taxonomi'),
        'new_item_name'     => __('Taxonomiens navn'),
        'menu_name'         => __('Hierarkiske Taxonomier'),
];
$args = [
	'hierarchical'      => true, // make it hierarchical (like categories)
	'labels'            => $labels,
	'show_ui'           => true,
	'show_admin_column' => true,
	'query_var'         => true,
	'rewrite'           => ['slug' => 'music'],
	'show_in_rest'      => TRUE, // will make the taxonomy visible in block editors
	'has_archive'      => true,
];
register_taxonomy('music', ['post'], $args);
}
add_action('init', 'petj_register_taxonomy_music');
