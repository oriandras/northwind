<?php
/**
 * Northwind functions and definitions
 *
 * @package Northwind
 */

function northwind_scripts() {
	// Enqueue the main stylesheet (style.css).
	wp_enqueue_style( 'northwind-style', get_stylesheet_uri() );

	// Enqueue the northwind.css which is generated from scss.
	wp_enqueue_style( 'northwind-custom', get_template_directory_uri() . '/northwind.css', array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'northwind_scripts' );
