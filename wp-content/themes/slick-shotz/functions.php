<?php 
//begin functions
// Include styles and scripts registration
	include( 'inc/register-styles-scripts.php' );
	include( 'inc/register-menus.php' );

//featured thumbnails   
add_theme_support( 'post-thumbnails' );

//woocommerce custom theme support
function slick_shotz_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'slick_shotz_add_woocommerce_support' );

// /**
//  * Change number or products per row to 3
//  */
// add_filter('loop_shop_columns', 'loop_columns');
// if (!function_exists('loop_columns')) {
// 	function loop_columns() {
// 		return 3; // 3 products per row
// 	}
// }

// remove woocommerce styles
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

// start custom container
add_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper');
// overwrite existing output content wrapper function
function woocommerce_output_content_wrapper() {
	echo '<section class="woocommerce">
			<div class="container">';
}
// end custom container
add_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end');
function woocommerce_output_content_wrapper_end() {
		echo '</div><!-- end container -->
	</section><!-- end section -->';
}
?>