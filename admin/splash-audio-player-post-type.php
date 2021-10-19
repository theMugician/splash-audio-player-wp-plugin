<?php

if ( !function_exists( 'splash_audio_player_posttype' ) ) {

    function splash_audio_player_posttype() {
        $supports = array(
            'title', // post title
        );

        $labels = array(
            'name' => _x('Audio Players', 'plural'),
            'singular_name' => _x('Audio Player', 'singular'),
            'menu_name' => _x('Audio Players', 'admin menu'),
            'name_admin_bar' => _x('Audio Players', 'admin bar'),
            'add_new' => _x('Add New', 'add new'),
            'add_new_item' => __('Add New Audio Player'),
            'new_item' => __('New Audio Players'),
            'edit_item' => __('Edit Audio Players'),
            'view_item' => __('View Audio Players'),
            'all_items' => __('All Audio Players'),
            'search_items' => __('Search Audio Players'),
            'not_found' => __('No Audio Players found.'),
        );

        $args = array(
            'supports' => $supports,
            'labels' => $labels,
            'public' => true,
            'query_var' => true,
            'taxonomies' => array('post_tag'),
            'rewrite' => array('slug' => 'splash_audio_player'),
            'hierarchical' => false,
            'exclude_from_search'   => true,
            'publicly_queryable'    => true,
            'show_in_rest'       => true
        );
        register_post_type('splash_audio_player', $args);
    }
}
add_action('init', 'splash_audio_player_posttype');