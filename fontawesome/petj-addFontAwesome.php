<?php
/*
Plugin Name: add Fontawesome
Plugin URI: https://github.com/asathoor/plugins
Description: Will add the CSS for Fontawesome.
Version: 1.0
Author: Per Thykjaer Jensen
Author URI:https://multimusen.dk
Textdomain: Pers2020Child
License: GPLv3
About this version: Minor bug fix.
*/
function petj_fontawesome(){
  wp_enqueue_style('petj-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', array(), '4.1.1');
  }

add_action('wp_enqueue_scripts', 'petj_fontawesome' );
?>
