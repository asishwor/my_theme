<?php
function create_custom_post_types()
{
    $supports = array(
        'title',
        'editor',
        'author',
        'thumbnail',
        'excerpt',
        'custom_fields',
        'comments',
        'revisions',
        'post_formats'

    );
    $args = array(
        'labels' => array(
            'name' => __('News'),
            'singular_name' => __('news')
        ),
        'supports' => $supports,
        'capability_types' => 'post',
        'show_ui' => true,
        'taxonomies' => array('catagory', 'tags'),
        'show_in_menus' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'show_in_rest' => true,
        'public' => true,
        'query_var' => true,
        'hierarchical' => false,
        'can_export' => true,
        'rewrite' => array('slug' => 'news'),
        'has_archive' => true,

    );
    register_post_type('news', $args);
}
;

add_action('init', 'create_custom_post_types');

?>