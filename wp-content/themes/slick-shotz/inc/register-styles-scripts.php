<?php
/*
* enqueue styles and scripts
*/
/**
* Dequeue jQuery Migrate script in WordPress.
*/
function isa_remove_jquery_migrate( &$scripts) {
    if(!is_admin()) {
        $scripts->remove( 'jquery');
        $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.12.4' );
    }
}
add_filter( 'wp_default_scripts', 'isa_remove_jquery_migrate' );

function slick_shotz_enqueue_styles() {
	wp_enqueue_style( 'skinnyfit-core', get_template_directory_uri().'/style.css');
	wp_enqueue_script( 'plugins-js', get_template_directory_uri().'/inc/js/plugins.js', array('jquery'), '1.0.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'slick_shotz_enqueue_styles' );
?>