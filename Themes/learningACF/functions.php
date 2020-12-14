<?php

// Enqueuing
function load_css()
{

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', [], 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', [], 1, 'all');
    wp_enqueue_style('main');

    wp_register_style('magnific', get_template_directory_uri() . '/css/magnific.css', [], 1, 'all');
    wp_enqueue_style('magnific');

}
add_action('wp_enqueue_scripts', 'load_css');

function load_js()
{
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', ['jquery'], 1, true);
    wp_enqueue_script('bootstrap');

    wp_register_script('magnific', get_template_directory_uri() . '/js/magnific.js', ['jquery'], 1, true);
    wp_enqueue_script('magnific');

    wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', ['jquery'], 1, true);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_js');


// Nav Menus
register_nav_menus( array(
    'top-menu' => __( 'Top Menu', 'theme' ),
    'footer-menu' => __( 'Footer Menu', 'theme' ),
) );

// Theme Support
add_theme_support('menus');
add_theme_support( 'post-thumbnails' );

// Image Sizes
add_image_size('small', 600, 600, false);

function first_post_type()
{
    $args = array(

        'labels' => array (
            'name' => 'Team Members',
            'singular name' => 'Team member',
        ),


        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-multisite',
        'supports' => array('title', 'editor', 'thumbnail'),
        ''

    );


        register_post_type('Team Members', $args);


}

add_action('init', 'first_post_type');



function second_post_type()
{
    $args = array(

        'labels' => array (
            'name' => 'Locations',
            'singular name' => 'Location',
        ),


        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-site-alt3',
        'supports' => array('title', 'editor', 'thumbnail'),
        ''

    );


        register_post_type('Locations', $args);


}

add_action('init', 'second_post_type');

