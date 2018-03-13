<?php
/**
 * Theme Functions
 */
function theme_name_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );

}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );