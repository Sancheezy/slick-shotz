	<footer class="footer dk-grey-bg padding-vertical-4">
		<div class="container">
			<div class="top-row">
				<div class="column col-12 col-md-4">
					<div class="padding-horizontal-15px">
						<p><span class="bold white-text brand-name">Slick Shotz</span> <small class="privacy-links text-right"><a href="#" class="footer-link white-text">Privacy Policy</a> | <a href="#" class="footer-link white-text">Terms & Conditions</a></small></p>
						<span class="spacer-5 block">&nbsp;</span>
						<p class="muted-text">&copy; 2015 – <?php echo date('Y'); ?> Slick Shotz. All rights reserved.</p>
					</div>
				</div>

				<div class="column col-12 col-md-3">
					<div class="padding-horizontal-15px">
						<p class="white-text">Accepted Payments:</p>
						<span class="spacer-5 block">&nbsp;</span>
						<ul class="payment-icons">
							<li><i class="fa fa-amazon white-text"></i></li>
							<li><i class="fa fa-cc-paypal white-text"></i></li>
							<li><i class="fa fa-cc-visa white-text"></i></li>
							<li><i class="fa fa-cc-amex white-text"></i></li>
							<li><i class="fa fa-cc-mastercard white-text"></i></li>
							<li><i class="fa fa-cc-discover white-text"></i></li>
						</ul>
					</div>
				</div>

				<div class="column col-12 col-md-3">
					<div class="padding-horizontal-15px">
						<p class="mb-2 white-text">Contact Us:</p>
						<a href="mailto:info@slickshotz.com" class="white-text">info@slickshotz.com</a>
					</div>
				</div>

				<div class="column col-12 col-md-2">
					<div class="padding-horizontal-15px">
						<p class="mb-2 white-text">Follow Us:</p>
						<a href="https://www.instagram.com/slickshotz/" target="_blank">
							<i class="fa fa-instagram white-text fa-2x"></i>
						</a>
						<a href="https://www.facebook.com/slickshotz/" target="_blank">
							<i class="fa fa-facebook-square white-text fa-2x"></i>
						</a>	
					</div>
				</div>
			</div><!--end top row-->
			<div class="bottom-row text-center padding-vertical-2">
				<ul class="security-seals">
					<li><img src="http://rogersanchize.com/dev/slick-shotz/wp-content/uploads/2018/05/norton_98px.png" class="img-responsive" /></li>
					<!-- <li><img src="http://localhost:8888/slick-shotz/wp-content/uploads/2018/05/mcafee.png" class="img-responsive" /></li> -->
					<li><img src="http://rogersanchize.com/dev/slick-shotz/wp-content/uploads/2018/05/truste_seal_v3.png" class="img-responsive" /></li>
				</ul>
			</div><!--end bottom row-->
		</div><!--end container-->
	</footer>

	<script type="text/javascript" defer>
	/* Toggle between adding and removing the "responsive" class to mobile-menu-container when the user clicks on the icon */
	function myFunction(x) {
		//toggle menu icon and x
	    x.classList.toggle("change");

	    //show/hide mobile menu
	    var x = document.getElementById("main-menu-mobile");
	    if (x.className === "mobile-menu-container") {
	        x.className += " responsive-menu";
	    } else {
	        x.className = "mobile-menu-container";
	    } 
	}
	</script>
</div><!--end wrapper-->
<?php wp_footer(); ?>
</body><!--end body-->
</html><!--end html-->