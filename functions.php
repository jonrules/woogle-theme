<?php

define( 'WOOGLE_VERSION', '1.0.0' );

function woogle_scripts() {
	$theme_directory = get_template_directory_uri();
	// Materialize
	wp_enqueue_style( 'materialize', $theme_directory . '/css/materialize.min.css', array(), WOOGLE_VERSION );
	wp_enqueue_script( 'materialize', $theme_directory . '/js/materialize.min.js', array( 'jquery' ), WOOGLE_VERSION );
	// Theme
	wp_enqueue_style( 'woogle', $theme_directory . '/style.css', array(), WOOGLE_VERSION );
}
add_action( 'wp_enqueue_scripts', 'woogle_scripts' );