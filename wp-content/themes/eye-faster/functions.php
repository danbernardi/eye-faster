<?php
/**
 * @package    zd
 * @version    1.0.0
 * @author     Zen Den Web Design <http://zendenwebdesign.com/>
 */
 
// Get the template directory and make sure it has a trailing slash.
$zd_dir = trailingslashit( get_template_directory() );

// Load the dependencies & frameworks
require_once $zd_dir . 'lib/cmb2/init.php';
require_once $zd_dir . 'inc/metaboxes.php';
require_once $zd_dir . 'inc/shortcodes.php';
require_once $zd_dir . 'inc/custom-post-types.php';
require_once $zd_dir . 'inc/custom-taxonomies.php';
require_once $zd_dir . 'inc/numbered-pagination.php';
 
// Do theme setup on the 'after_setup_theme' hook.
add_action( 'after_setup_theme', 'zd_theme_setup', 5 );

/**
 * Theme setup function.  This function adds support for theme features and defines the default theme
 * actions and filters.
 */
function zd_theme_setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1280, 325, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array( 'primary' => __( 'Primary Menu', 'zd' ) ) );

	// Switch default core markup for search form, comment form, and comments
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
	
	// enable the use of shortcodes inside sidebars
	add_filter('widget_text', 'do_shortcode');
	
	// hides the admin bar
	show_admin_bar( false );
	
	// define custom thumbnail sizes
	if ( function_exists( 'add_image_size' ) ) {
        add_image_size( 'b-thumb', 258, 160, true );
		add_image_size( 'pagetitle', 1560, 600, true );
    	add_image_size( 'team_member', 208, 250, true );
    }
    
    // adds page slug as body class
	function add_slug_body_class( $classes ) {
		global $post;
		if ( isset( $post ) ) {
			$classes[] = $post->post_type . '-' . $post->post_name;
		}
			return $classes;
		}
	add_filter( 'body_class', 'add_slug_body_class' );
	
	// limit exerpt length to custom size
    function custom_excerpt_length( $length ) {
        return 22;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
    
    // change excerpt trailing symbel
    function new_excerpt_more( $more ) {
        return '...';
    }
    add_filter('excerpt_more', 'new_excerpt_more');
	
	
	// load custom scripts & styles
	function zd_scripts() {
		// Load our main stylesheet.
		wp_enqueue_style( 'zd-style', get_stylesheet_uri() );
		// Load our main javascript file.
		wp_enqueue_script('jquery');
		wp_enqueue_script( 'zd-script', get_template_directory_uri() . '/_/js/scripts.js', array(), '1.0.0', true );
	}
	add_action( 'wp_enqueue_scripts', 'zd_scripts' );
	
	
	 // Register our sidebars and widgetized areas.
	function zd_widgets_init() {
		
		// default right sidebar
		register_sidebar( array(
			'name'          => 'Default Sidebar',
			'id'            => 'default_sidebar',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6>',
			'after_title'   => '</h6>',
		) );
		
		
		// footer widget areas
		register_sidebar( array(
			'name'          => 'Footer Block 1',
			'id'            => 'footer_block_1',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6>',
			'after_title'   => '</h6>',
		) );
		
		register_sidebar( array(
			'name'          => 'Footer Block 2',
			'id'            => 'footer_block_2',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6>',
			'after_title'   => '</h6>',
		) );
		
		register_sidebar( array(
			'name'          => 'Footer Block 3',
			'id'            => 'footer_block_3',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6>',
			'after_title'   => '</h6>',
		) );
		
		register_sidebar( array(
			'name'          => 'Footer Block 4',
			'id'            => 'footer_block_4',
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6>',
			'after_title'   => '</h6>',
		) );
	}
	add_action( 'widgets_init', 'zd_widgets_init' );
	
}
