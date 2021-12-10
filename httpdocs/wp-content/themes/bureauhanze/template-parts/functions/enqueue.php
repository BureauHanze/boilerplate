<?php

// Register and enqueue scripts and styles
function namespace_theme_stylesheets() {
    wp_register_style( 'style',  get_template_directory_uri() .'/assets/css/style.min.css', array(), null, 'all' );
    wp_enqueue_style( 'style' );
    
    // wp_enqueue_script( 'script-jquery-dep', get_template_directory_uri() . '/assets/js/jquerydep.min.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'script-footer', get_template_directory_uri() . '/assets/js/footer.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.min.js', array(), '1.0.0', false );
}
add_action( 'wp_enqueue_scripts', 'namespace_theme_stylesheets', 999999 );

add_theme_support( 'post-thumbnails' );
add_filter( 'use_block_editor_for_post', '__return_false' );
remove_filter('the_content', 'wpautop');