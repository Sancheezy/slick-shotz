<?php
/*
Template Name: Front
*/
get_header();
?>
<section class="atf wood-bg padding-vertical-4">
	<div class="container">
		<h1 class="headline text-center white-text bold mb-4">The <span class="orange-text">Only</span> Legal-to-Carry Flask!</h1>
		<div class="column col-12 col-md-6">
			<div class="padding-horizontal-15px">
				<!-- <img src="http://rogersanchize.com/dev/slick-shotz/wp-content/uploads/2018/05/atf-image.jpg" class="img-responsive mb-1" /> -->
				<iframe class="atf-video" width="100%" src="https://www.youtube.com/embed/NxItyaob9x0?rel=0&amp;showinfo=0" frameborder="0" ></iframe>
				<p class="amazon-reviews text-center">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<span class="white-text">on</span>
					<img src="http://rogersanchize.com/dev/slick-shotz/wp-content/uploads/2018/05/amazon_logo.png" class="img-responsive amazon-logo"
				</p>
			</div><!--end padding-->
		</div><!--end column-->
		<div class="column col-12 col-md-6">
			<div class="padding-horizontal-15px">
				<ul class="benefits white-text mb-4">
					<li class="mb-3">Take with you to concerts, clubs, bars, and sports events</li>
					<li class="mb-3">Save money while you fill up your favorite drinks</li>
					<li class="mb-3">Undectable by metal detectors, conveyor belts and even pat downs</li>
					<li class="mb-3">100% Legal</li>
				</ul>
				<a href="http://rogersanchize.com/dev/slick-shotz/shop" class="button cta-button">Shop Now »</a>
			</div>
		</div><!--end column-->
	</div><!--end container-->
</section><!--end atf-->

<section class="how-it-works padding-vertical-4">
	<div class="container text-center">
		<h1 class="bold mb-1">How it Works</h1>
		<h3 class="mb-4">Easy as 1-2-3</h3>
		<div class="column col-12 col-md-4">
			<div class="padding-horizontal-15px">
				<img src="http://rogersanchize.com/dev/slick-shotz/wp-content/uploads/2018/07/step1.jpg" class="img-responsive" />
				<span class="spacer-5 block">&nbsp;</span>
				<h2 class="bold"><span class="orange-text">1.</span> Fill It</h2>
				<span class="spacer-10 block">&nbsp;</span>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				<span class="spacer-30 block">&nbsp;</span>
			</div>	
		</div>

		<div class="column col-12 col-md-4">
			<div class="padding-horizontal-15px">
				<img src="http://rogersanchize.com/dev/slick-shotz/wp-content/uploads/2018/07/step2.jpg" class="img-responsive" />
				<span class="spacer-5 block">&nbsp;</span>
				<h2 class="bold"><span class="orange-text">2.</span> Seal It</h2>
				<span class="spacer-10 block">&nbsp;</span>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				<span class="spacer-30 block">&nbsp;</span>
			</div>	
		</div>

		<div class="column col-12 col-md-4">
			<div class="padding-horizontal-15px">
				<img src="http://rogersanchize.com/dev/slick-shotz/wp-content/uploads/2018/07/step3.jpg" class="img-responsive" />
				<span class="spacer-5 block">&nbsp;</span>
				<h2 class="bold"><span class="orange-text">3.</span> Use It</h2>
				<span class="spacer-10 block">&nbsp;</span>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				<span class="spacer-30 block">&nbsp;</span>
			</div>	
		</div>
		<div class="column col-12 col-md-12">
			<a href="http://rogersanchize.com/dev/slick-shotz/shop" class="button cta-button chapter-cta">Shop Starter Kits »</a>
		</div>
	</div>
</section>

<section class="featured-products padding-vertical-4">
	<div class="container">
		<header class="text-center">
			<h1 class="bold">Featured Products</h1>
			<h3 class="mb-4">FREE SHIPPING within the contiguous U.S</h3>
		</header>	
		<?php echo do_shortcode( ' [featured_products per_page=”3″ columns=”3″ orderby=”date” order=”desc”] ' ); ?>
	</div>
</section>

<section class="instagram padding-vertical-4">
	<div class="container">
		<header class="text-center">
			<h1 class="bold">Get Social with #SlickShotz</h1>
			<h3 class="mb-4">Share your photos on social media</h3>
		</header>	
	</div>
</section>
<?php
get_footer();
?>