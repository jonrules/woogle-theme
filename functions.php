<?php

define( 'WOOGLE_VERSION', '1.0.1' );

function woogle_scripts() {
	$theme_directory = get_template_directory_uri();
	// jQuery
	if ( ! is_admin() ) {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', 'https://code.jquery.com/jquery-2.1.1.min.js', array(), WOOGLE_VERSION, true );
		wp_enqueue_script( 'jquery' );
	}
	// Materialize
	wp_enqueue_style( 'materialize', $theme_directory . '/css/materialize.min.css', array(), WOOGLE_VERSION );
	wp_enqueue_script( 'materialize', $theme_directory . '/js/materialize.min.js', array( 'jquery' ), WOOGLE_VERSION, true );
	// Fonts
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), WOOGLE_VERSION );
	// Animate.css
	wp_enqueue_style( 'animate-css', $theme_directory . '/css/animate.css', array(), WOOGLE_VERSION );
	// Scrollspy
	wp_enqueue_script( 'jquery-scrollspy', $theme_directory . '/js/jquery-scrollspy.js', array( 'jquery' ), WOOGLE_VERSION );
	// Theme
	wp_enqueue_style( 'woogle', $theme_directory . '/style.css', array(), WOOGLE_VERSION );
	wp_enqueue_script( 'woogle', $theme_directory . '/js/scripts.js', array( 'materialize' ), WOOGLE_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'woogle_scripts' );

function woogle_setup() {

	/*
	 * Make theme available for translation.
	* Translations can be filed in the /languages/ directory.
	* If you're building a theme based on twentyfifteen, use a find and replace
	* to change 'twentyfifteen' to the name of your theme in all the template files
	*/
// 	load_theme_textdomain( 'woogle', get_template_directory() . '/languages' );

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
	* See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	*/
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'woogle' ),
		'social'  => __( 'Social Links Menu', 'woogle' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	* to output valid HTML5.
	*/
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	*
	* See: https://codex.wordpress.org/Post_Formats
	*/
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );
	
	register_nav_menus( array(
		'left-menu' => __( 'Left Menu', 'woogle' ),
		'footer-menu' => __( 'Footer Menu', 'woogle' ),
	) );
}
add_action( 'after_setup_theme', 'woogle_setup' );

/**
 * Register widget areas.
 */
function woogle_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Left Sidebar', 'woogle' ),
		'id'            => 'left-sidebar',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'woogle' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'woogle_widgets_init' );

function woogle_mime_types( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'woogle_mime_types');
