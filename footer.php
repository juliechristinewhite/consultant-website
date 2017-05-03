<footer>

	<div class="container">

		<div class="footer__form">
			<h3>NEWS LETTER</h3>
			<p>Enter your email address to get updates</p>
			<input type="email" placeholder="Email Address">
			<input type="submit" value="Subscribe">
		</div>

		<div class="footer__content">
			<div class="content__logo"></div>
			<div class="content__quickLinks">
				<h4>QUICK LINKS</h4>
				<div class="content__quickLinks--flex flex">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">News</a></li>
						<li><a href="#">Pages</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
					<ul>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Blog Post</a></li>
						<li><a href="#">404 Page</a></li>
						<li><a href="#">Career</a></li>
						<li><a href="#">Team</a></li>
						<li><a href="#">Shortcode</a></li>
					</ul>
				</div>
			</div>
			<div class="content__address">
				<h4>ADDRESS</h4>
				<div class="content__address--flex flex">
					<div class="addressSection__address">
						<p>Consultancy</p>
						<p>Second Street PO 8559</p>
						<p>Krishnapuram 0045</p>
					</div>
					<div class="addressSection__other">
						<p><span class="addressSection--white">Call:</span> +91 8856-552-8462</p>
						<p><span class="addressSection--white">Email:</span> info@consult.com</p>
						<ul>
							<li><a href="https://facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="https://linkedin.com">
							<i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="https://google.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="https://youtube.com"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	
	</div>

	<div class="footer__copyright">

	  <div class="container">
	    <p><?php echo date('Y'); ?>&copy;Consultation. All Rights Reserved.</p>
	  </div>

  	</div>

</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>