<?php
/*
Plugin Name: PETJ's add Fontawesome to WordPress
Plugin URI: https://github.com/asathoor/plugins
Description: Add the Fontawesome CSS.
Version: 1.0
Author: Per Thykjaer Jensen
Author URI: https://multimusen.dk
Textdomain: Pers2020Child
License: GPLv3
*/

function petj_fontawsome(){
  wp_enqueue_style(
    'petj-fontawesome',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css',
    array(),
    '4.1.1',
    all );
  }

add_action(
  'wp_enqueue_scripts',
  'petj_fontawsome' );
?>
