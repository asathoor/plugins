<?php
/*
Plugin Name: PETJ's add animation and jQuery
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
  
  // add jQuery
  wp_enqueue_script( 'petj-jQuery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true );

  // add CSS library
  style( 'petj-animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), '4.1.1', all );
}

/* Add the "action" */
add_action( 'wp_enqueue_scripts', 'petj_add_jq_and_animate' );
?>
