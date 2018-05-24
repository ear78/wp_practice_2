
<?php
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support( 'custom-background' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'html5' );

    // Load in Css
    function wppractice2_enqueue_scripts(){

        wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all');

    }

    add_action( 'wp_enqueue_scripts', 'wppractice2_enqueue_scripts');