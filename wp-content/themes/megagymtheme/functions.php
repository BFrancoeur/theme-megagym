<?php

// Enqueue styles and scripts
function mgtrt_enqueue_styles_and_scripts()
{
    // Normalize CSS
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@400;700;900&family=Staatliches&display=swap', array(), '1.0.0');

    // SlickNav Responsive Mobile Menu styles
    wp_enqueue_style('slicknavstyles', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.10');

    // Main stylesheet
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'google-fonts'), '1.0.0');

    // jQuery
    wp_enqueue_script('jquery');

    // SlickNav JS
    wp_enqueue_script('slicknavjs', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);

    // Scripts JS
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.10', true);
}

add_action('wp_enqueue_scripts', 'mgtrt_enqueue_styles_and_scripts', 10);

// Create menus
function mgtrt_register_nav_menus()
{
    // register nav menus
    register_nav_menus(array(
        'main-menu'     => 'Main Menu',
        'footer-menu'   => 'Footer Menu',
        'sidebar-menu'  => 'Sidebar Menu'
    ));
}

add_action('init', 'mgtrt_register_nav_menus');

// Enable Feature Images and other WordPress features

function mgtrt_setup()
{
    // Register image sizes
    add_image_size('square',       350, 350, true);
    add_image_size('portrait',     350, 724, true);
    add_image_size('box',          400, 375, true);
    add_image_size('mediumLandscape',   700, 400, true);
    add_image_size('blog',         966, 644, true);
    add_image_size('fullWidthLandscape',  1200, 800, true);
    // Add featured image support
    add_theme_support('post-thumbnails');
}


add_action('after_setup_theme', 'mgtrt_setup');
