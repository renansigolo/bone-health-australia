<?php
/** For more info: https://developer.wordpress.org/themes/basics/theme-functions */

// Theme support options
// function replace_core_jquery_version() {
// wp_deregister_script( 'jquery-core' );
// wp_register_script( 'jquery-core', "https://code.jquery.com/jquery-3.5.1.min.js", array(), '3.5.1' );
// wp_register_script( 'jquery-core', "https://code.jquery.com/jquery-2.2.4.min.js", array(), '2.2.4' );
// wp_deregister_script( 'jquery-migrate' );
// wp_register_script( 'jquery-migrate', "https://code.jquery.com/jquery-migrate-3.3.1.min.js", array(), '3.3.1' );
// }
// add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );

// Theme support options
require_once get_template_directory() . '/functions/theme-support.php';

// WP Head and other cleanup functions
require_once get_template_directory() . '/functions/cleanup.php';

// Register scripts and stylesheets
require_once get_template_directory() . '/functions/enqueue-scripts.php';

// Register custom menus and menu walkers
require_once get_template_directory() . '/functions/menu.php';

// Register sidebars/widget areas
require_once get_template_directory() . '/functions/sidebar.php';

// Makes WordPress comments suck less
require_once get_template_directory() . '/functions/comments.php';

// Replace 'older/newer' post links with numbered navigation
require_once get_template_directory() . '/functions/page-navi.php';

// Adds support for multiple languages
require_once get_template_directory() . '/functions/translation/translation.php';

// Adds site styles to the WordPress editor
// require_once(get_template_directory().'/functions/editor-styles.php');

// Remove Emoji Support
// require_once(get_template_directory().'/functions/disable-emoji.php');

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/functions/related-posts.php');

// Use this as a template for custom post types
// require_once(get_template_directory().'/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/functions/login.php');

// Customize the WordPress admin
// require_once(get_template_directory().'/functions/admin.php');

// Overwrite Gutenberg defaults
// require_once(get_template_directory().'/functions/gutenberg.php');

/** ACF Functions */
// Options Page
if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page();
	acf_add_options_sub_page( 'Header' );
	acf_add_options_sub_page( 'Footer' );
}
