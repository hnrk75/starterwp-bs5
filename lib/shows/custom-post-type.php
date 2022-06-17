<?php
/**
 * Add Custom Post Type
 * 
 * @author Henrik Pettersson <kontakt@hnrkagency.se>
 * @package StarterWP
 */

    function custom_post_type() {
        $labels = array(
            'name'                => _x( 'Post Type', 'Post Type General Name', 'text-domain' ),
            'singular_name'       => _x( 'Post Type', 'Post Type Singular Name', 'text-domain' ),
            'menu_name'           => __( 'Post Types', 'text-domain' ),
            'all_items'           => __( 'All Post Types', 'text-domain' ),
            'view_item'           => __( 'View Post Type', 'text-domain' ),
            'add_new_item'        => __( 'Add New Post Type', 'text-domain' ),
            'add_new'             => __( 'Add New', 'text-domain' ),
            'edit_item'           => __( 'Edit Post Type', 'text-domain' ),
            'update_item'         => __( 'Update Post Type', 'text-domain' ),
            'search_items'        => __( 'Search Post Type', 'text-domain' ),
            'not_found'           => __( 'Not Found', 'text-domain' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'text-domain' ),
        );
        
        $args = array(
            'label'               => __( 'Post Types', 'text-domain' ),
            'description'         => __( 'Post Types review', 'text-domain' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats' ),
            'hierarchical'        => true,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_icon'           =>'dashicons-open-folder',
            'menu_position'       => 6,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
            'show_in_rest'        => true,
            'taxonomies'          => array( 'category', 'tags' ),
        );
        
        // Registering your Custom Post Type
        register_post_type( 'custompostypes', $args );
    }
    add_action( 'init', 'custom_post_type', 0 );
