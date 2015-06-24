<?php

function woogle_scripts() {
	$theme_directory = get_template_directory_uri();
	wp_enqueue_style( 'materialize', $theme_directory . '/css/materialize.min.css' );
	wp_enqueue_script( 'materialize', $theme_directory . '/js/materialize.min.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'woogle_scripts' );