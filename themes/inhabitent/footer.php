<?php
/**
 * The template for displaying the footer.
 *
 * @package inhabitent_theme_Theme
 */
?>
</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="ftr-section container">
		<div class="contact">
			<h3>Contact Info</h3>
			<p>
				<i class="fa fa-envelope"></i>																																																				
				<a href="mailto:info@inhabitent.com">info@inhabitent.com</a>
			</p>
			<p>
				<i class="fa fa-phone"></i>
				778-456-7891
			</p>
			<p>										
				<i class="fa fa-facebook-square"></i>
				<i class="fa fa-twitter-square"></i>
				<i class="fa fa-google-plus-square"></i>
			</p>

		</div>


		<div class="hours">
		<h3>Business Hours</h3>
			<p>
				<span class="day-of-week">Monday-Friday:</span>
				9am - 5pm
			</p>
			<p>
				<span class="day-of-week">Saturday:</span>
				10am - 2pm
			</p>
			<p>
				<span class="day-of-week">Sunday:</span>
				Closed
			</p>
		</div>

		<div class="foot-logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php echo get_template_directory_uri(). "./assets/images/logos/inhabitent-logo-text.svg" ?>"  alt="Tent Logo" ?>
			</a>
		</div>
		
		<div class="site-info">
			
				<p class="copyright">
					Copyright &#169; 2016 Inhabitent
				</p>
			
		</div>
	</div>
	
</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>
