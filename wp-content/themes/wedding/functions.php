<?php
/**
 * Theme Functions
 */
function theme_name_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

function my_theme_enqueue_scripts() {
    
    wp_enqueue_script( 'bundle', get_stylesheet_directory_uri() . '/dist/bundle.js', array('jquery'), 1, false );    
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_scripts' );

?>