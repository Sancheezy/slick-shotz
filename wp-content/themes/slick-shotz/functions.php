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

// add custom button text to products category page
add_filter( 'add_to_cart_text', 'woo_custom_product_add_to_cart_text' );            // < 2.1
add_filter( 'woocommerce_product_add_to_cart_text', 'woo_custom_product_add_to_cart_text' );  // 2.1 +
  
function woo_custom_product_add_to_cart_text() {
  
    return __( 'Buy Now »', 'woocommerce' ); 
}

// more info button
function more_information() {
	global $product;
	if ($product){
		$url = esc_url($product->get_permalink() );
		echo '<a rel="nofollow" href="' .$url .'" class="btn grey-button info-button white-text">More Info »</a>';
	}
}
add_action('woocommerce_after_shop_loop_item_title','more_information');

// single product add to cart
/**
 * Change the "Add to Cart" text on the single product page
 *
 * @return string
 */
function wc_custom_single_addtocart_text() {
    return "Buy Now »";
}
add_filter( 'woocommerce_product_single_add_to_cart_text', 'wc_custom_single_addtocart_text' );

/* Restricting shipping only to continental U.S. by removing certain states from default U.S. list */
add_filter( 'woocommerce_states', 'custom_woocommerce_states' );

function custom_woocommerce_states( $states ) {
$excluded_states = array('AK', 'AA', 'AE', 'AP', 'AS', 'GU', 'MP', 'PR', 'UM', 'VI', 'HI');
foreach($excluded_states as $no_state){
unset($states['US'][$no_state]);
}

return $states;
}

// change Place order text on checkout
/* Add to the functions.php file of your theme */

add_filter( 'woocommerce_order_button_text', 'woo_custom_order_button_text' ); 

function woo_custom_order_button_text() {
    return __( 'Complete My Order »', 'woocommerce' ); 
}

// Ship to a different address closed by default

add_filter( 'woocommerce_ship_to_different_address_checked', '__return_false' );

?>