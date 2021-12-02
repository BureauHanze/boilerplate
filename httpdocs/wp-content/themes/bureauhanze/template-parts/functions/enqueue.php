<?php

// Register and enqueue scripts and styles
function namespace_theme_stylesheets() {
    wp_register_style( 'style',  get_template_directory_uri() .'/assets/css/style.min.css', array(), null, 'all' );
    wp_enqueue_style( 'style' );

	wp_enqueue_script( 'script',  get_template_directory_uri() .'/assets/js/bundle.js', false, false, true);
    wp_enqueue_script( 'script' );
    
}
add_action( 'wp_enqueue_scripts', 'namespace_theme_stylesheets', 999999 );

add_theme_support( 'post-thumbnails' );
add_filter( 'use_block_editor_for_post', '__return_false' );
remove_filter('the_content', 'wpautop');