<?php
// services, projects, testimonials, events, posts


function register_services() {

	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Services', 'Post Type General Name', 'zd' ),
		'singular_name'       => _x( 'Service', 'Post Type Singular Name', 'zd' ),
		'menu_name'           => __( 'Services', 'zd' ),
		'parent_item_colon'   => __( 'Parent Service', 'zd' ),
		'all_items'           => __( 'All Services', 'zd' ),
		'view_item'           => __( 'View Service', 'zd' ),
		'add_new_item'        => __( 'Add New Service', 'zd' ),
		'add_new'             => __( 'Add New', 'zd' ),
		'edit_item'           => __( 'Edit Service', 'zd' ),
		'update_item'         => __( 'Update Service', 'zd' ),
		'search_items'        => __( 'Search Services', 'zd' ),
		'not_found'           => __( 'Not Found', 'zd' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'zd' ),
	);
	
	// Set other options for Custom Post Type
	$args = array(
		'label'               => __( 'services', 'zd' ),
		'description'         => __( 'Featured Services', 'zd' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', ),
		'taxonomies'          => array( 'service_categories' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			  => 'dashicons-exerpt-view',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'services', $args );
}
add_action( 'init', 'register_services', 0 );



function register_projects() {

	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Projects', 'Post Type General Name', 'zd' ),
		'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'zd' ),
		'menu_name'           => __( 'Projects', 'zd' ),
		'parent_item_colon'   => __( 'Parent Project', 'zd' ),
		'all_items'           => __( 'All Projects', 'zd' ),
		'view_item'           => __( 'View Project', 'zd' ),
		'add_new_item'        => __( 'Add New Project', 'zd' ),
		'add_new'             => __( 'Add New', 'zd' ),
		'edit_item'           => __( 'Edit Project', 'zd' ),
		'update_item'         => __( 'Update Project', 'zd' ),
		'search_items'        => __( 'Search Projects', 'zd' ),
		'not_found'           => __( 'Not Found', 'zd' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'zd' ),
	);
	
	// Set other options for Custom Post Type
	$args = array(
		'label'               => __( 'projects', 'zd' ),
		'description'         => __( 'Featured Projects', 'zd' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'revisions', 'tags' ),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			  => 'dashicons-index-card',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'projects', $args );
}
add_action( 'init', 'register_projects', 0 );



function register_testimonials() {

	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Testimonial', 'Post Type General Name', 'zd' ),
		'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'zd' ),
		'menu_name'           => __( 'Testimonials', 'zd' ),
		'parent_item_colon'   => __( 'Parent Testimonial', 'zd' ),
		'all_items'           => __( 'All Testimonials', 'zd' ),
		'view_item'           => __( 'View Testimonial', 'zd' ),
		'add_new_item'        => __( 'Add New Testimonial', 'zd' ),
		'add_new'             => __( 'Add New', 'zd' ),
		'edit_item'           => __( 'Edit Testimonial', 'zd' ),
		'update_item'         => __( 'Update Testimonial', 'zd' ),
		'search_items'        => __( 'Search Testimonials', 'zd' ),
		'not_found'           => __( 'Not Found', 'zd' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'zd' ),
	);
	
	// Set other options for Custom Post Type
	$args = array(
		'label'               => __( 'testimonials', 'zd' ),
		'description'         => __( 'Featured Testimonials', 'zd' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			  => 'dashicons-testimonial',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'testimonials', $args );
}
add_action( 'init', 'register_testimonials', 0 );


function register_events() {

	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Event', 'Post Type General Name', 'zd' ),
		'singular_name'       => _x( 'Event', 'Post Type Singular Name', 'zd' ),
		'menu_name'           => __( 'Events', 'zd' ),
		'parent_item_colon'   => __( 'Parent Event', 'zd' ),
		'all_items'           => __( 'All Events', 'zd' ),
		'view_item'           => __( 'View Event', 'zd' ),
		'add_new_item'        => __( 'Add New Event', 'zd' ),
		'add_new'             => __( 'Add New', 'zd' ),
		'edit_item'           => __( 'Edit Event', 'zd' ),
		'update_item'         => __( 'Update Event', 'zd' ),
		'search_items'        => __( 'Search Events', 'zd' ),
		'not_found'           => __( 'Not Found', 'zd' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'zd' ),
	);
	
	// Set other options for Custom Post Type
	$args = array(
		'label'               => __( 'events', 'zd' ),
		'description'         => __( 'Featured Events', 'zd' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'taxonomies'          => array( '' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			  => 'dashicons-calendar-alt',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'events', $args );
}
add_action( 'init', 'register_events', 0 );

?>