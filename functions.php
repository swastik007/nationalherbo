<?php
/**
 * National herbo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package National_herbo
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function national_herbo_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on National herbo, use a find and replace
		* to change 'national-herbo' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'national-herbo', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'national-herbo' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'national_herbo_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'national_herbo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function national_herbo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'national_herbo_content_width', 640 );
}
add_action( 'after_setup_theme', 'national_herbo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function national_herbo_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'national-herbo' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'national-herbo' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'national_herbo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function national_herbo_scripts() {
	wp_enqueue_style( 'national-herbo-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'national-herbo-style', 'rtl', 'replace' );

	wp_enqueue_script( 'national-herbo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'national_herbo_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/* Custom Post Type */
/* create custom post team members */


function team_members_post() {

	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Team Members', 'Post Type General Name', 'nationalherbo' ),
		'singular_name'       => _x( 'Team Member', 'Post Type Singular Name', 'nationalherbo' ),
		'menu_name'           => __( 'Team Members', 'nationalherbo' ),
		'parent_item_colon'   => __( 'Parent Team Member', 'nationalherbo' ),
		'all_items'           => __( 'All Team Members', 'nationalherbo' ),
		'view_item'           => __( 'View Team Member', 'nationalherbo' ),
		'add_new_item'        => __( 'Add Team Member', 'nationalherbo' ),
		'add_new'             => __( 'Add Team Member', 'nationalherbo' ),
		'edit_item'           => __( 'Edit Team Member', 'nationalherbo' ),
		'update_item'         => __( 'Update Team Member', 'nationalherbo' ),
		'search_items'        => __( 'Search Team Member', 'nationalherbo' ),
		'not_found'           => __( 'Not Found', 'nationalherbo' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'nationalherbo' ),
	);
	
	
	// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'Team Members', 'nationalherbo' ),
		'description'         => __( 'Team Member news and reviews', 'nationalherbo' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes' ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'department' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 7,
		'menu_icon'           => 'dashicons-universal-access-alt',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest' => true,
		// This is where we add taxonomies to our CPT
		'taxonomies'          => array( 'post_tag','department' ),
		); 
	
	// Registering your Custom Post Type
	register_post_type( 'team-members', $args );
	
	}
		
	add_action( 'init', 'team_members_post', 0 );


/* create custom post team members */


function video_post() {

	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Videos', 'Post Type General Name', 'nationalherbo' ),
		'singular_name'       => _x( 'Video', 'Post Type Singular Name', 'nationalherbo' ),
		'menu_name'           => __( 'Videos', 'nationalherbo' ),
		'parent_item_colon'   => __( 'Parent Video', 'nationalherbo' ),
		'all_items'           => __( 'All Videos', 'nationalherbo' ),
		'view_item'           => __( 'View Video', 'nationalherbo' ),
		'add_new_item'        => __( 'Add Video', 'nationalherbo' ),
		'add_new'             => __( 'Add Video', 'nationalherbo' ),
		'edit_item'           => __( 'Edit Video', 'nationalherbo' ),
		'update_item'         => __( 'Update Video', 'nationalherbo' ),
		'search_items'        => __( 'Search Video', 'nationalherbo' ),
		'not_found'           => __( 'Not Found', 'nationalherbo' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'nationalherbo' ),
	);
	
	
	// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'Videos', 'nationalherbo' ),
		'description'         => __( 'Video news and reviews', 'nationalherbo' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes' ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'department' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-controls-play',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest' => true,
		// This is where we add taxonomies to our CPT
		'taxonomies'          => array( 'post_tag','department' ),
		); 
	
	// Registering your Custom Post Type
	register_post_type( 'video_post', $args );
	
	}
		
	add_action( 'init', 'video_post', 0 );

	//adding demo custom post type for subscription by ashish
	function subscription_post() {

		// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Subscriptions', 'Post Type General Name', 'nationalherbo' ),
			'singular_name'       => _x( 'Subscription', 'Post Type Singular Name', 'nationalherbo' ),
			'menu_name'           => __( 'Subscriptions', 'nationalherbo' ),
			'parent_item_colon'   => __( 'Parent Subscription', 'nationalherbo' ),
			'all_items'           => __( 'All Subscriptions', 'nationalherbo' ),
			'view_item'           => __( 'View Subscription', 'nationalherbo' ),
			'add_new_item'        => __( 'Add New Subscription', 'nationalherbo' ),
			'add_new'             => __( 'Add New', 'nationalherbo' ),
			'edit_item'           => __( 'Edit Subscription', 'nationalherbo' ),
			'update_item'         => __( 'Update Subscription', 'nationalherbo' ),
			'search_items'        => __( 'Search Subscription', 'nationalherbo' ),
			'not_found'           => __( 'Not Found', 'nationalherbo' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'nationalherbo' ),
		);
	
		// Set other options
		$args = array(
			'label'               => __( 'Subscriptions', 'nationalherbo' ),
			'description'         => __( 'Subscription plans or packages', 'nationalherbo' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'revisions' ),
			'taxonomies'          => array( 'category', 'post_tag' ), // Optional
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 6,
			'menu_icon'           => 'dashicons-groups',
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'show_in_rest'        => true,
			'capability_type'     => 'post',
		);
	
		register_post_type( 'subscription', $args );
	}
	
	add_action( 'init', 'subscription_post', 0 );
	

function theme_stylescript(){
    wp_enqueue_style( 'owl_theme_css', get_template_directory_uri() . '/assets/vendor/owl/owl.theme.default.css' );
    wp_enqueue_style( 'owlcarousel_css', get_template_directory_uri() . '/assets/vendor/owl/owl.carousel.min.css' );
    wp_enqueue_style( 'bootstrap_icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css' );
	// wp_enqueue_style( 'tailwind_css', get_template_directory_uri() . '/assets/css/src/output.css', array(), '0.2.8' );
    wp_enqueue_style( 'nationalherbo_css', get_template_directory_uri() . '/assets/css/theme.css', array(), '0.2.8' );
    // Enqueue jQuery
// wp_enqueue_script('jquery');
     // Enqueue jQuery from CDN
    // wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);
	wp_enqueue_script( 'tailwind_css_script', 'https://cdn.tailwindcss.com/3.4.16' );
     // Enqueue other JS files
    wp_enqueue_script( 'owlcarousel_js', get_template_directory_uri() . '/assets/vendor/owl/owl.carousel.min.js', array('jquery'), null, true );
	
    wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'), '2.2.8', true );
}

add_action('wp_enqueue_scripts', 'theme_stylescript');