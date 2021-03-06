

		<?php
		/**
		 * The template for displaying the footer
		 *
		 * Contains the closing of the #content div and all content after.
		 *
		 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
		 *
		 * @package svhen
		 */

		?>

			<footer class="footer section">
				<div class="container">
					<div class="row row-xs-1 row-md-2">
						<div class="col-xs-12 col-md-6">
							<ul class="accordion row row-xs-1 row-md-3 mg-bottom-xs-30 accordionDisabled" data-accordion data-accordion data-allow-all-closed="true">
							  <li class="accordion-item col-xs-12 col-md-4" data-accordion-item>
							    <a href="#" class="accordion-title hide-md nav">Nosotros</a>
							    <h3 class="footer-title space-bottom hide-xs show-md">Nosotros</h3>
							    <div class="accordion-content accordionContent" data-tab-content>
							      <?php
							        $args = array(
							          'theme_location' => 'about',
							          'container' => 'nav',
							          'container_class' => '',
							          'menu_class' => ''
							        );
							        wp_nav_menu( $args );
							      ?>
							    </div>
							  </li>

							  <li class="accordion-item col-xs-12 col-md-4" data-accordion-item>
							    <a href="#" class="accordion-title hide-md nav">Iniciativas</a>
							    <h3 class="footer-title space-bottom hide-xs show-md">Iniciativas</h3>
							    <div class="accordion-content accordionContent" data-tab-content>
							      <?php
							        $args = array(
							          'theme_location' => 'iniciatives',
							          'container' => 'nav',
							          'container_class' => '',
							          'menu_class' => ''
							        );
							        wp_nav_menu( $args );
							      ?>
							    </div>
							  </li>

							  <li class="accordion-item col-xs-12 col-md-4" data-accordion-item>
							    <a href="#" class="accordion-title hide-md nav">Biblioteca</a>
							    <h3 class="footer-title space-bottom hide-xs show-md">Biblioteca</h3>
							    <div class="accordion-content accordionContent" data-tab-content>
							      <?php
							        $args = array(
							          'theme_location' => 'library',
							          'container' => 'nav',
							          'container_class' => '',
							          'menu_class' => ''
							        );
							        wp_nav_menu( $args );
							      ?>
							    </div>
							  </li>
							</ul>
						</div>

						<div class="col-xs-12 col-md-6">
							<div class="footer-newsletter space-bottom">
								<h3 class="footer-title space-bottom hide-xs show-md">Mantente Enterado con las últimas noticias</h3>
								<?= do_shortcode( '[contact-form-7 id="4" title="Newsletter"]' ); ?>
							</div>
							<div>
								<h3 class="footer-title space-bottom hide-md">Síguenos</h3>
								<h3 class="footer-title space-bottom hide-xs show-md">Encuentranos también en:</h3>
								<?php if ( have_rows( 'footer_social', 'option' ) ) : ?>
									<div class="row">
										<?php while ( have_rows( 'footer_social', 'option' ) ) : the_row(); ?>
											<figure>
												<a href="<?php the_sub_field( 'footer_social_link', 'option' ); ?>" target="_blank">
													<img src="<?php the_sub_field( 'footer_social_image', 'option' ); ?>" class="footer-social-logo">
												</a>
											</figure>
										<?php endwhile; ?>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</footer>


			<section class="section footer-partners">
				<div class="container">
					<h3 class="center-xs space-bottom">Una Iniciativa de:</h3>
					<?php if ( have_rows( 'footer_partners', 'option' ) ) : ?>
						<div class="row middle-xs center-xs">
							<?php while ( have_rows( 'footer_partners', 'option' ) ) : the_row(); ?>
								<figure class="footer-partners_image">
									<a href="<?php the_sub_field( 'footer_partner_link', 'option' ); ?>" target="_blank">
										<img src="<?php the_sub_field( 'footer_partner_image', 'option' ); ?>">
									</a>
								</figure>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>
			</section>

		</div><!-- /Off canvas content -->

		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
		<script src="<?= get_template_directory_uri(); ?>/dist/bundle.js"></script>
		<?php wp_footer(); ?>

		<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>

		<script type="text/javascript">
		  $(document).ready(function(){
		    $('.project-carousel').slick({
		      infinite: true,
		      slidesToShow: 1,
		      autoplay: true,
		      autoplaySpeed: 3000,
		      fade: true,
		      cssEase: 'linear',
		      prevArrow: '<span class="slick-prev"></span>',
		      nextArrow: '<span class="slick-next"></span>',
		      arrows: true,
		      settings: {
            arrows: true,
            centerMode: false,
          }
		    });
		  });
		</script>


	</body>
</html>

