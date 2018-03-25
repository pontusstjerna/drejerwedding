<?php

function wedding_script_enqueue() {
    wp_enqueue_style( 
        'mainstyle', 
        get_template_directory_uri() . '/css/wedding.css', 
        array(), 
        '1.0.0',
        'all'
     );

    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css?family=Handlee|Herr+Von+Muellerhoff',
        false
    );

    wp_enqueue_script(
        'bundle',
        get_template_directory_uri() . '/dist/bundle.js', array('jquery'), 
        '1.0.0', 
        true
    );
}

add_action( 'wp_enqueue_scripts', 'wedding_script_enqueue' );

?>