<?php
/*
Plugin Name: add Jquery to WordPress
Plugin URI: https://github.com/asathoor/plugins
Description: Will add scripts
Version: 1.0
Author: Per Thykjaer Jensen
Author URI:https://multimusen.dk
Textdomain: Pers2020Child
License: GPLv3
Based on @url: https://developer.wordpress.org/plugins/post-types/registering-custom-post-types/
About this version:
Corrected quotation marks.
*/

/* Create a function */
function petj_add_jq_and_animate(){
  // wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
  // https://code.jquery.com/jquery-3.6.0.min.js

  // add jQuery
  wp_enqueue_script( 'petj-jQuery',
    'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',
    array(),
    '3.5.1',
    true );

  // add CSS library
  wp_enqueue_style( 'petj-animate-css',
  'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css',
  array(),
  '4.1.1',
  all );
}

add_action( 'wp_enqueue_scripts', 'petj_add_jq_and_animate' );
?>
