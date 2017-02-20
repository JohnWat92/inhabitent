<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<!--<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>-->
					<div class = informationBlock>
						<div class = contactInfo>
							<h3> contact info </h3>
							<p><i class= "fa fa-envelope fa-lg"></i><a href = ""> info@inhabitent.com</a></p>
							<p><i class= "fa fa-phone fa-lg"></i> <a href = "">778-456-7891</a></i></p>
							<p><i class= "fa fa-facebook-square fa-lg"></i><i class= "fa fa-twitter-square fa-lg"></i><i class= "fa fa-google-plus-square fa-lg"></i></p>
						</div>
						<div class = businessHours>
							<h3> business hours </h3>
							<p>Monday-Friday: 9am to 5pm</p>
							<p>Saturday: 10am to 2pm </p>
							<p> Sunday: Closed </p>
						</div>
						<div class = companyLogo>
							<p> WOOO IM A LOGO </p>
							<!--<img src= "./images/logos/inhabitent-logo-text.svg">-->
								<!--<img src= "./inhabitent-logo-text.svg">-->
						</div>
					</div>
					<div class = "footerCopyRight">
						<p> copyright &copy; 2016 inhabitent </p>
					</div>

				</div><!-- .site-info -->

			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
