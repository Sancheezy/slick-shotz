<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <main id="main">
 *
 * @package Smashtech
 */
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html <?php language_attributes(); ?> class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->

<head>	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="robots" content="NOODP">
	<meta name="description" content="Slick Shotz - The Only Legal-To-Carry Flask">

	<!-- wordpress head functions -->
	<?php wp_head(); ?>
	<!-- end of wordpress head -->

	<link rel="shortcut icon" href="http://blog.skinnyfit.com/wp-content/uploads/2017/12/favicon-32x32_c60fc2a8752b2cf2e64faa08ebfcc43a.png" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!-- media-queries.js (fallback) -->
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
	<![endif]-->

	<!-- html5.js -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!--google font-->
	<style>
		@import url('https://fonts.googleapis.com/css?family=Montserrat:400,700');
	</style>
</head>

<?php flush(); ?>

<?php
	$page_slug = '';
	if(is_page()) {
		$page_slug = 'page-'.$post->post_name;
	}
?>

<body <?php body_class($page_slug); ?>>
	<noscript id="deferred-styles">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	</noscript>
	<script>
		var loadDeferredStyles = function() {
        	var addStylesNode = document.getElementById("deferred-styles");
        	var replacement = document.createElement("div");
        	replacement.innerHTML = addStylesNode.textContent;
        	document.body.appendChild(replacement)
        	addStylesNode.parentElement.removeChild(addStylesNode);
      	};
      	var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
      	window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
      	if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
     	else window.addEventListener('load', loadDeferredStyles);
    </script>

	<div class="wrapper">
		<section class="top-bar lt-grey-bg">
			<div class="container">
				<div class="padding-horizontal-15px">
					<ul class="payment-icons text-right">
						<li><i class="fa fa-amazon amazon-orange"></i></li>
						<li><i class="fa fa-cc-paypal paypal-blue"></i></li>
						<li><i class="fa fa-cc-visa visa-blue"></i></li>
						<li><i class="fa fa-cc-amex amex-blue"></i></li>
						<li><i class="fa fa-cc-mastercard mc-blue"></i></li>
						<li><i class="fa fa-cc-discover discover"></i></li>
						<li class="orange-text">Free Shipping</li>
					</ul>
				</div><!--end padding-->	
			</div><!--end container-->
		</section><!--end top bar-->
		<nav class="main-nav padding-vertical-3">
			<div class="container">
				<div class="padding-horizontal-15px">
					<div class="column col-5 col-md-2">
						<a href="http://rogersanchize.com/dev/slick-shotz" class="orange-text bold logo">
							<h2 class="headline">Slick Shotz</h2>
						</a>
					</div><!--end column-->
					<div class="column col-md-10 hidden-xs">
						<div class="text-right">
							<?php wp_nav_menu(
								array( 
								'theme_location' => 'main-nav', 
								'container_class' => 'menu-container',
								) 
							); // Adjust using Menus in Wordpress Admin ?>
						</div><!--end text center-->	
					</div><!--end column-->
					<div class="column hamburger-icon">
						<a href="javascript:void(0);" class="icon visible-xs" onclick="myFunction(this)">
							<span class="bar1"></span>
							<span class="bar2"></span>
							<span class="bar3"></span>
						</a>
					</div><!--end column-->
				</div><!--end padding-->
			</div><!--end container-->
		</nav><!--end main nav-->
		<!--mobile menu-->
		<div class="column col-xs-12 visible-xs">
			<div class="mobile-menu-container" id="main-menu-mobile">
				<?php wp_nav_menu(
					array( 
					'theme_location' => 'main-mobile-menu'
					) 
				); // Adjust using Menus in Wordpress Admin ?>
			</div><!--end text center-->	
		</div><!--end column-->






