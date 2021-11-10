<?php

function university_post_types(){
///Event post type
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
///Program post type
	register_post_type('program', array(
		'show_in_rest' => true,
		'public' => true,
		'labels' => array(
			'name' => 'Programs',
			'add_new_item' => 'Add New Program',
			'edit_item' => 'Edit Program',
			'all_items' => 'All Programs',
			'singular_name' => 'Program',
			'item_updated' => 'Program Updated',
		),
		'menu_icon' => 'dashicons-awards',
		'has_archive' => true,
		'rewrite' => array(
			'slug' => 'programs',
		),
		'supports' => array('title', 'editor'),
	));
	///Professors post type
	register_post_type('professor', array(
		'show_in_rest' => true,
		'public' => true,
		'labels' => array(
			'name' => 'Professors',
			'add_new_item' => 'Add New Professor',
			'edit_item' => 'Edit Professor',
			'all_items' => 'All Professors',
			'singular_name' => 'Professor',
			'item_updated' => 'Professor Updated',
		),
		'menu_icon' => 'dashicons-welcome-learn-more',
		'supports' => array('title', 'editor'),
	));
}



add_action('init', 'university_post_types');
