<?php

// Slim down WordPress
get_template_part( 'template-parts/functions/remove');

// Enqueue scripts & styles
get_template_part( 'template-parts/functions/enqueue');

// Register image sizes
get_template_part( 'template-parts/functions/image-sizes');

// Advanced Custom Fields functions
get_template_part( 'template-parts/functions/acf');

// Register Custom Post Type Projecten
get_template_part( 'template-parts/functions/cpt-projecten');

// Schema.org
get_template_part( 'template-parts/functions/schema');

// Register WordPress menu's
register_nav_menus( array(  
    'main' => __( 'Primary Navigation', 'Bureauhanze' ),  
    'wpml' => __('wpml', 'Bureauhanze')  
) );

// Limit excerpt length
function my_excerpt_length($length){
    return 10;
    }
add_filter('excerpt_length', 'my_excerpt_length');

// Add post thumbnail support
add_theme_support( 'post-thumbnails' );

/* Custom Widget on Dashboard */
get_template_part( 'template-parts/functions/widgets');