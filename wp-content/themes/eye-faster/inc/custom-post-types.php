<?php

// register buildings post type
function register_investments() {

	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Investments', 'Post Type General Name', 'zd' ),
		'singular_name'       => _x( 'Investment', 'Post Type Singular Name', 'zd' ),
		'menu_name'           => __( 'Investments', 'zd' ),
		'parent_item_colon'   => __( 'Parent Investment', 'zd' ),
		'all_items'           => __( 'All Investments', 'zd' ),
		'view_item'           => __( 'View Investment', 'zd' ),
		'add_new_item'        => __( 'Add New Investment', 'zd' ),
		'add_new'             => __( 'Add New', 'zd' ),
		'edit_item'           => __( 'Edit Investment', 'zd' ),
		'update_item'         => __( 'Update Investment', 'zd' ),
		'search_items'        => __( 'Search Investments', 'zd' ),
		'not_found'           => __( 'Not Found', 'zd' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'zd' ),
	);
	
	// Set other options for Custom Post Type
	$args = array(
		'label'               => __( 'Investments', 'zd' ),
		'description'         => __( 'Featured Investments', 'zd' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', ),
		'taxonomies'          => array( 'category' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'			  => 'dashicons-analytics',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'investments', $args );
}
add_action( 'init', 'register_investments', 0 );


// register testimonials post type
function register_success_stories() {

	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Success Stories', 'Post Type General Name', 'zd' ),
		'singular_name'       => _x( 'Success Story', 'Post Type Singular Name', 'zd' ),
		'menu_name'           => __( 'Success Stories', 'zd' ),
		'parent_item_colon'   => __( 'Parent Success Story', 'zd' ),
		'all_items'           => __( 'All Success Stories', 'zd' ),
		'view_item'           => __( 'View Success Story', 'zd' ),
		'add_new_item'        => __( 'Add New Success Story', 'zd' ),
		'add_new'             => __( 'Add New', 'zd' ),
		'edit_item'           => __( 'Edit Success Story', 'zd' ),
		'update_item'         => __( 'Update Success Story', 'zd' ),
		'search_items'        => __( 'Search Success Stories', 'zd' ),
		'not_found'           => __( 'Not Found', 'zd' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'zd' ),
	);
	
	// Set other options for Custom Post Type
	$args = array(
		'label'               => __( 'success_stories', 'zd' ),
		'description'         => __( 'Featured Success Stories', 'zd' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'revisions', 'tags' ),
		'taxonomies'          => array( 'success_categories' ),
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
	register_post_type( 'success_stories', $args );
}
add_action( 'init', 'register_success_stories', 0 );


// register Team Member post type
function register_team_members() {

	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Team Member', 'Post Type General Name', 'zd' ),
		'singular_name'       => _x( 'Team Member', 'Post Type Singular Name', 'zd' ),
		'menu_name'           => __( 'Team Members', 'zd' ),
		'parent_item_colon'   => __( 'Parent Team Member', 'zd' ),
		'all_items'           => __( 'All Team Members', 'zd' ),
		'view_item'           => __( 'View Team Member', 'zd' ),
		'add_new_item'        => __( 'Add New Team Member', 'zd' ),
		'add_new'             => __( 'Add New', 'zd' ),
		'edit_item'           => __( 'Edit Team Member', 'zd' ),
		'update_item'         => __( 'Update Team Member', 'zd' ),
		'search_items'        => __( 'Search Team Members', 'zd' ),
		'not_found'           => __( 'Not Found', 'zd' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'zd' ),
	);
	
	// Set other options for Custom Post Type
	$args = array(
		'label'               => __( 'team_members', 'zd' ),
		'description'         => __( 'Featured Team Members', 'zd' ),
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
		'menu_icon'			  => 'dashicons-groups',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'team_members', $args );
}
add_action( 'init', 'register_team_members', 0 );

?>