<?php
/**
 * menus to be used in theme
 */
register_nav_menus( array(
	'main-nav' => __( 'Main Menu', 'slick shotz' ), 
	'footer-nav' => __( 'Footer Menu', 'slick shotz'),
	'main-mobile-menu' => __('Mobile Main Menu', 'slick shotz')
) );

function wp_nav_menu_custom_args( $args = '' ) {
	$args['menu_class'] = 'menu clearfix';
	return $args;
}
add_filter( 'wp_nav_menu_args', 'wp_nav_menu_custom_args' );

//end menus
?>