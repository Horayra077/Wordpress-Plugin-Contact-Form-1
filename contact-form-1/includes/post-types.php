<?php

function wp_contact_post_type()
{
    $labels = array(
        'name'                  => _x('Forms', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Form', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('Forms', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('Form', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'add_new_item'          => __('Add New Form', 'textdomain'),
        'new_item'              => __('New Form', 'textdomain'),
        'edit_item'             => __('Edit Form', 'textdomain'),
        'view_item'             => __('View Form', 'textdomain'),
        'all_items'             => __('All Forms', 'textdomain'),
        'search_items'          => __('Search Forms', 'textdomain'),
        'parent_item_colon'     => __('Parent Forms:', 'textdomain'),
        'not_found'             => __('No Forms found.', 'textdomain'),
        'not_found_in_trash'    => __('No Forms found in Trash.', 'textdomain'),
        'featured_image'        => _x('Form Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'archives'              => _x('Form archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain'),
        'insert_into_item'      => _x('Insert into Form', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain'),
        'uploaded_to_this_item' => _x('Uploaded to this Form', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
        'filter_items_list'     => _x('Filter Forms list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain'),
        'items_list_navigation' => _x('Forms list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain'),
        'items_list'            => _x('Forms list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'wp_contact'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title'),
    );

    register_post_type('wp_contact', $args);
}

add_action('init', 'wp_contact_post_type');
