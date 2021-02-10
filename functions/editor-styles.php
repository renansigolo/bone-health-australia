<?php
/**
 * Adds your styles to the WordPress editor
 *
 * @package BoneHealth
 */

add_action( 'init', 'add_editor_styles' );
function add_editor_styles() {
	add_editor_style( get_template_directory_uri() . '/assets/styles/style.css' );
}