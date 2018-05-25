
<?php
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support( 'custom-background' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'html5' );

    // Load in Css and JS
    function wppractice2_enqueue_scripts(){

        wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

        wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all');

        // JS scripts
        wp_enqueue_script('wppractice2-scripts', get_template_directory_uri() . '/assets/js/functions.js', [ 'jquery' ], null, false);


    }

    add_action( 'wp_enqueue_scripts', 'wppractice2_enqueue_scripts');

