<?php

// =============================================================================
// FUNCTIONS.PHP
// -----------------------------------------------------------------------------
// Overwrite or add your own custom functions to X in this file.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Enqueue Parent Stylesheet
//   02. Additional Functions
// =============================================================================

// Enqueue Parent Stylesheet
// =============================================================================

add_filter( 'x_enqueue_parent_stylesheet', '__return_true' );

function my_scripts() {
	
    wp_register_script(
		'angularjs',
		get_stylesheet_directory_uri() . '/js/shared/angular.min.js'
	);
	wp_register_script(
		'angularjs-route',
		get_stylesheet_directory_uri() . '/js/shared/angular-route.min.js'
	);
	wp_enqueue_script(
		'my-scripts',
		get_stylesheet_directory_uri() . '/js/app.js',
		array( 'angularjs', 'angularjs-route' )
	);
    
	wp_localize_script(
		'my-scripts',
		'myLocalized',
		array(
			'views' => trailingslashit( get_stylesheet_directory_uri() ) . '/js/views/'
			)
	);
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

// Additional Functions
// =============================================================================

