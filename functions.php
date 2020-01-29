<?php

//Add theme support
add_theme_support( 'menus' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );


function load_stylesheets() {

    wp_register_style('google-font', "https://fonts.googleapis.com/css?family=Fredoka+One|Permanent+Marker|Poppins:400,700,800&display=swap", [], '', 'all' );
    wp_enqueue_style('google-font');

    wp_register_style('slick', "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css", [], '', 'all' );
    wp_enqueue_style('slick');    
      
    wp_register_style('foundation', get_template_directory_uri() . '/assets/css/foundation.css', [], '', 'all' );
    wp_enqueue_style('foundation');    

    wp_register_style('font-awesome', get_template_directory_uri() . '/assets/css/all.css', [], '', 'all' );
    wp_enqueue_style('font-awesome');    

    wp_register_style('style', get_template_directory_uri() . '/style.css', ['foundation', 'font-awesome', 'google-font', 'slick'], false, 'all');
    wp_enqueue_style('style');

    // wp_register_style('slick', get_template_directory_uri() . '/assets/css/slick.css', [], '', 'all' );
    // wp_enqueue_style('slick');
    
    // wp_register_style('slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css', ['slick'], '', 'all' );
    // wp_enqueue_style('slick-theme');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');


function include_jquery()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/vendor/jquery-3.4.1.min.js', '', 1, true);
    add_action('wp_enqueue_scripts', 'jquery');
}

add_action('wp_enqueue_scripts', 'include_jquery');


function include_foundation()
{
    wp_register_script( 'what-input', get_template_directory_uri() . '/assets/js/vendor/what-input.js', ['jquery'], '', true );
    wp_enqueue_script( 'what-input' );

    wp_register_script( 'foundation-style', get_template_directory_uri() . '/assets/js/vendor/foundation.js', ['jquery', 'what-input'], '', true );
    wp_enqueue_script( 'foundation-style' );
}

add_action('wp_enqueue_scripts', 'include_foundation');


function include_fontawesome()
{
    wp_register_script( 'font-script', get_template_directory_uri() . '/assets/js/vendor/all.js', ['jquery'], '', true );
    wp_enqueue_script( 'font-script' );
}

add_action('wp_enqueue_scripts', 'include_fontawesome');


function include_slick()
{
    wp_register_script( 'slick-style', "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js", ['jquery', 'font-script'], '', true );
    wp_enqueue_script( 'slick-style' );
}

add_action('wp_enqueue_scripts', 'include_slick');


function init_app_dependencies()
{
    wp_register_script( 'app-init', get_template_directory_uri() . '/assets/js/app.js', ['jquery', 'what-input', 'foundation-style', 'font-script', 'slick-style'], '', true );
    wp_enqueue_script( 'app-init' );

    // wp_register_script( 'slick-init', get_template_directory_uri() . '/assets/js/slickinit.js', ['slick-style'], '', true );
    // wp_enqueue_script( 'slick-init' );    

}

add_action('wp_enqueue_scripts', 'init_app_dependencies');


function themename_custom_logo_setup() 
{
    $defaults = array(
    'height'      => 52,
    'width'       => 164,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    
    add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


//Register Menu Locations
register_nav_menus (

    array( 
        'main-menu' => esc_html__( 'Main Menu', 'josephtheme' ),
    )
);

add_image_size('smallest', 200, 200, true);
add_image_size('largest', 400, 400, true);

?>