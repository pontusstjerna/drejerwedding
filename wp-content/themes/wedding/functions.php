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
        'stickymenu', 
        get_template_directory_uri() . '/css/stickymenu.css', 
        array(), 
        '1.0.0',
        'all'
     );

     wp_enqueue_style( 
        'pages', 
        get_template_directory_uri() . '/css/pages.css', 
        array(), 
        '1.0.0',
        'all'
     );

    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css?family=Marck+Script|VT323|Raleway|Pinyon+Script',
        false
    );

    wp_enqueue_script(
        'bundle',
        get_template_directory_uri() . '/dist/bundle.js', array('jquery'), 
        '1.0.0', 
        true
    );
}

function create_post_register_interest() {
    $labels = array(
        'name' => 'Register Interest',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'hierarchical' => true,
        'supports' => array(
            'title',
            'editor',
            'page-attributes'
            )
        );

    register_post_type( 'register_interest', $args );
}

add_action( 'wp_enqueue_scripts', 'wedding_script_enqueue' );
add_action( 'init', 'create_post_register_interest' );

?>