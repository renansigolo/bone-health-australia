<?php
/**
 * Disable Gutenberg Custom Colour Picker and Font Sizes
 *
 * @package BoneHealth
 * */

function wpdc_disable_gutenberg_custom_colour_picker() {
	add_theme_support( 'disable-custom-colors' );
	add_theme_support( 'disable-custom-font-sizes' );
}

add_action( 'after_setup_theme', 'wpdc_disable_gutenberg_custom_colour_picker' );

/** Define Gutenberg Custom Colour Palettes */
function wpdc_add_custom_gutenberg_color_palette() {
	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => esc_html__( 'Dark Blue', 'wpdc' ),
				'slug'  => 'dark-blue',
				'color' => '#1b386d',
			),
			array(
				'name'  => esc_html__( 'Light Blue', 'wpdc' ),
				'slug'  => 'light-blue',
				'color' => '#298bcf',
			),
			array(
				'name'  => esc_html__( 'Orange', 'wpdc' ),
				'slug'  => 'orange',
				'color' => '#f99d1c',
			),
			array(
				'name'  => esc_html__( 'Green', 'wpdc' ),
				'slug'  => 'green',
				'color' => '#95c93d',
			),
			array(
				'name'  => esc_html__( 'Pink', 'wpdc' ),
				'slug'  => 'pink',
				'color' => '#e66ca9',
			),
			array(
				'name'  => esc_html__( 'Purple', 'wpdc' ),
				'slug'  => 'purple',
				'color' => '#9078b7',
			),
			array(
				'name'  => esc_html__( 'Gray', 'wpdc' ),
				'slug'  => 'gray',
				'color' => '#d8d8d8',
			),
			array(
				'name'  => esc_html__( 'Dark Gray', 'wpdc' ),
				'slug'  => 'dark-gray',
				'color' => '#333333',
			),
			array(
				'name'  => esc_html__( 'Black', 'wpdc' ),
				'slug'  => 'black',
				'color' => '#0a0a0a',
			),
			array(
				'name'  => esc_html__( 'White', 'wpdc' ),
				'slug'  => 'white',
				'color' => '#ffffff',
			),
		)
	);
}

add_action( 'after_setup_theme', 'wpdc_add_custom_gutenberg_color_palette' );

/** Disable Gutenberg Custom Colour Picker */
function wpdc_add_custom_gutenberg_fonts() {
	// Block Editor Font Sizes.
	add_theme_support(
		'editor-font-sizes',
		array(
			array(
				'name' => __( 'Small', 'wpdc' ),
				'size' => 12,
				'slug' => 'small',
			),
			array(
				'name' => __( 'Normal', 'wpdc' ),
				'size' => 16,
				'slug' => 'normal',
			),
			array(
				'name' => __( 'Medium', 'wpdc' ),
				'size' => 18,
				'slug' => 'medium',
			),
			array(
				'name' => __( 'Large', 'wpdc' ),
				'size' => 36,
				'slug' => 'large',
			),
			array(
				'name' => __( 'Huge', 'wpdc' ),
				'size' => 50,
				'slug' => 'huge',
			),
		)
	);

	add_theme_support( 'editor-styles' );
}

add_action( 'after_setup_theme', 'wpdc_add_custom_gutenberg_fonts' );


