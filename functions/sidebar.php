<?php
/**
 * Sidebars and widgetized areas
 *
 * @package BoneHealth
 */

function joints_register_sidebars() {
	register_sidebar(
		array(
			'id'            => 'sidebar1',
			'name'          => __( 'Sidebar 1', 'bone_health' ),
			'description'   => __( 'The first (primary) sidebar.', 'bone_health' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widgettitle">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'id'            => 'offcanvas',
			'name'          => __( 'Offcanvas', 'bone_health' ),
			'description'   => __( 'The offcanvas sidebar.', 'bone_health' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widgettitle">',
			'after_title'   => '</h4>',
		)
	);
} /** end register sidebars */

add_action( 'widgets_init', 'joints_register_sidebars' );
