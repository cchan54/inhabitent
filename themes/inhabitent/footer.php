<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Starter_Theme
 */

?>

            </div><!-- #content -->

            <footer id="colophon" class="site-footer" role="contentinfo">
                <div class="site-info">
                    <div class="footer__contact">
                        <div class="footer__contact-container">
							<h3 class="footer__title-h3">Contact Info</h3>
							<div class="footer-contact"><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></div>
							<div class="footer-contact"><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:778-456-7891">778-456-7891</a></div>
							<div class="footer-container">
								<div class="footer-contact"><i class="fa fa-facebook-square" aria-hidden="true"></i></div>
								<div class="footer-contact"><i class="fa fa-twitter-square" aria-hidden="true"></i></div>
								<div class="footer-contact"><i class="fa fa-google-plus-square" aria-hidden="true"></i></div>
							</div>
						</div>
                    </div>
                    <div class="footer__business-hours">
					<div class="business-hours">
						<h3 class=footer__title-h3>Business Hours</h3>
						<p><span class="font-bold">Monday-Friday:</span> 9am to 5pm</p>

						<p><span class="font-bold">Saturday:</span> 10am to 2pm</p>

						<p><span class="font-bold">Sunday:</span> Closed</p>
						</div>
                    </div>
                    <div class="footer__logo">
						<div class="footer__logo-container">
							<a href="<?php echo inhabitent_the_url()?>"><img src="<?php echo inhabitent_the_url()?>/wp-content/themes/inhabitent/images/logos/inhabitent-logo-text.svg" class="footer__logo-img"/></a>
						</div>
                    </div>
                </div><!-- .site-info -->
                <div class="footer__copyright">
                    <div class="container">
						<p>COPYRIGHT © 2018 INHABITENT</p>
					</div>
                </div>
            </footer><!-- #colophon -->
        </div><!-- #page -->

        <?php wp_footer(); ?>

    </body>
</html>