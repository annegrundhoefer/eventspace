<?php 

register_post_type( 'audience',
    array(
        'labels' => array(
            'name'                  => 'Audience Panels',
            'singular_name'         => 'Audience Panel',
            'add_new'               => 'Add New',
            'add_new_item'          => 'Add New Panel',
            'edit_item'             => 'Edit Panel',
            'new_item'              => 'New Panel',
            'all_items'             => 'All Panels',
            'view_item'             => 'View Panel',
            'search_items'          => 'Search Panels',
            'not_found'             => 'No channels found',
            'not_found_in_trash'    => 'No channels found in trash',
            'parent_item_colon'     => '',
            'menu_name'             => 'Audience Panels'
        ),
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite'               => false,
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'menu_position'         => null,
        'menu_icon'             => 'dashicons-admin-users',
        'supports'              => array( 'title', 'page-attributes' )
    )
);

register_post_type( 'packages',
    array(
        'labels' => array(
            'name'                  => 'Packages',
            'singular_name'         => 'Package',
            'add_new'               => 'Add New',
            'add_new_item'          => 'Add New Package',
            'edit_item'             => 'Edit Package',
            'new_item'              => 'New Package',
            'all_items'             => 'All Packages',
            'view_item'             => 'View Package',
            'search_items'          => 'Search Packages',
            'not_found'             => 'No channels found',
            'not_found_in_trash'    => 'No channels found in trash',
            'parent_item_colon'     => '',
            'menu_name'             => 'Packages'
        ),
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite'               => false,
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'menu_position'         => null,
        'menu_icon'             => 'dashicons-cart',
        'supports'              => array( 'title', 'page-attributes' )
    )
);

register_post_type( 'past_events',
    array(
        'labels' => array(
            'name'                  => 'Past Events',
            'singular_name'         => 'Event',
            'add_new'               => 'Add New',
            'add_new_item'          => 'Add New Event',
            'edit_item'             => 'Edit Event',
            'new_item'              => 'New Event',
            'all_items'             => 'All Events',
            'view_item'             => 'View Event',
            'search_items'          => 'Search Events',
            'not_found'             => 'No channels found',
            'not_found_in_trash'    => 'No channels found in trash',
            'parent_item_colon'     => '',
            'menu_name'             => 'Past Events'
        ),
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite'               => false,
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'menu_position'         => null,
        'menu_icon'             => 'dashicons-calendar-alt',
        'supports'              => array( 'title', 'page-attributes' )
    )
);

register_post_type( 'sponsors',
    array(
        'labels' => array(
            'name'                  => 'Sponsors',
            'singular_name'         => 'Sponsor',
            'add_new'               => 'Add New',
            'add_new_item'          => 'Add New Sponsor',
            'edit_item'             => 'Edit Sponsor',
            'new_item'              => 'New Sponsor',
            'all_items'             => 'All Sponsors',
            'view_item'             => 'View Sponsor',
            'search_items'          => 'Search Sponsors',
            'not_found'             => 'No channels found',
            'not_found_in_trash'    => 'No channels found in trash',
            'parent_item_colon'     => '',
            'menu_name'             => 'Sponsors'
        ),
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite'               => false,
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'menu_position'         => null,
        'menu_icon'             => 'dashicons-awards',
        'supports'              => array( 'title', 'page-attributes' )
    )
);

?>