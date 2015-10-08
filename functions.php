<?php function am_scripts() {
    wp_enqueue_style( 'am-style', get_stylesheet_uri());
 }
add_action( 'wp_enqueue_scripts', 'am_scripts' );
