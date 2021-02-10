<?php

// Register menus.
register_nav_menus(
	array(
		'mobile-menu' => __( 'Mobile Menu', 'bone_health' ),   // Mobile Menu nav
	)
);

// The Off Canvas Menu.
function nav_menu() {
	wp_nav_menu(
		array(
			'container'      => false,                            // Remove nav container
			'menu_id'        => 'nav-menu',                // Adding custom nav id
			'menu_class'     => 'nav-menu vertical menu drilldown',    // Adding custom nav class
			'items_wrap'     => '<ul id="%1$s" class="%2$s" data-drilldown data-close-on-click="true">%3$s</ul>',
			'theme_location' => 'mobile-menu',                    // Where it's located in the theme
			'depth'          => 2,                                // Limit the depth of the nav
			'fallback_cb'    => false,                            // Fallback function (see below)
			'walker'         => new Off_Canvas_Menu_Walker(),
		)
	);
}

class Off_Canvas_Menu_Walker extends Walker_Nav_Menu {
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent  = str_repeat( "\t", $depth );
		$output .= "\n$indent<ul class=\"vertical menu nested\">\n";
	}
}

// Header Fallback Menu.
function joints_main_nav_fallback() {
	wp_page_menu(
		array(
			'show_home'   => true,
			'menu_class'  => '', // Adding custom nav class.
			'include'     => '',
			'exclude'     => '',
			'echo'        => true,
			'link_before' => '', // Before each link.
			'link_after'  => '',  // After each link.
		)
	);
}

// Add Foundation active class to menu.
function required_active_nav_class( $classes, $item ) {
	if ( $item->current == 1 || $item->current_item_ancestor == true ) {
		$classes[] = 'active';
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'required_active_nav_class', 10, 2 );
