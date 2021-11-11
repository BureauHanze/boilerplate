<?php
// Product Custom Post Type
function projecten_init() {
    // set up product labels
    $labels = array(
        'name' => 'Projecten',
        'singular_name' => 'Projecten',
        'add_new' => 'Nieuw project toevoegen',
        'add_new_item' => 'Nieuw project toevoegen',
        'edit_item' => 'Project wijzigen',
        'new_item' => 'Nieuw project',
        'all_items' => 'Alle projecten',
        'view_item' => 'Project bekijken',
        'search_items' => 'Project zoeken',
        'not_found' =>  'Geen projecten gevonden',
        'not_found_in_trash' => 'Geen projecten in de prullenbak', 
        'parent_item_colon' => '',
        'menu_name' => 'Projecten',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'projecten'),
        'query_var' => true,
        'menu_icon' => 'dashicons-admin-post',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type( 'projecten', $args );
    
    // register taxonomy
    register_taxonomy('project_category', 'projecten', array('hierarchical' => true, 'label' => 'Category', 'query_var' => true, 'rewrite' => array( 'slug' => 'project-category' )));
}
add_action( 'init', 'projecten_init' );