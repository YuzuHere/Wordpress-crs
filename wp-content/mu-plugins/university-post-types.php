<?php

function university_post_types(){
    register_post_type('event', array(
        'show_in_rest' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event',
            'item_updated' => 'Event Updated',
        ),
        'menu_icon' => 'dashicons-calendar',
        'has_archive' => true,
        'rewrite' => array(
            'slug' => 'events',
        ),
        'supports' => array('title', 'editor', 'excerpt'),
    ));
}


add_action('init', 'university_post_types');
