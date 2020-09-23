<?php
/*
Plugin Name: Pers Custom Post Types
Plugin URI: https://github.com/asathoor/plugins
Description: Plugin to register the music post type
Version: 1.0
Author: Per Thykjaer Jensen
Author URI:https://multimusen.dk
Textdomain: Pers2020Child
License: GPLv3

Based on @url: https://developer.wordpress.org/plugins/post-types/registering-custom-post-types/
About this version:

Corrected quotation marks.
*/

function petj_custom_post_type() {
    register_post_type('petj_music',
        array(
            'labels'      => array(
                'name'          => __('Music', 'Pers2020Child'),
                'singular_name' => __('Music', 'Pers2020Child'),
            ),
                'public'      => true,
                'has_archive' => true,
				'show_in_rest' => true,
        )
    );
}
add_action('init', 'petj_custom_post_type'); // hook into init