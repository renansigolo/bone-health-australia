<?php
/**
 * Enqueue scripts
 *
 * @package BoneHealth
 */

function site_scripts() {
	global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way.

	// Adding scripts file in the footer.
	wp_enqueue_script(
		'tiny-slider-js',
		get_template_directory_uri() . '/assets/scripts/tiny-slider.js',
		array(),
		filemtime( get_template_directory() . '/assets/scripts/js' ),
		true
	);

	// Adding scripts file in the footer.
	wp_enqueue_script(
		'site-js',
		get_template_directory_uri() . '/assets/scripts/scripts.js',
		array( 'jquery' ),
		filemtime( get_template_directory() . '/assets/scripts/js' ),
		true
	);

	// Register main stylesheet.
	wp_enqueue_style(
		'tiny-slider-css',
		get_template_directory_uri() . '/assets/styles/tiny-slider.css',
		array(),
		filemtime( get_template_directory() . '/assets/styles/scss' ),
		'all'
	);

	// Register main stylesheet.
	wp_enqueue_style(
		'site-css',
		get_template_directory_uri() . '/assets/styles/style.css',
		array(),
		filemtime( get_template_directory() . '/assets/styles/scss' ),
		'all'
	);

	// Comment reply script for threaded comments.
	if ( is_singular() && comments_open() && ( get_option( 'thread_comments' ) === 1 ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'site_scripts', 999 );