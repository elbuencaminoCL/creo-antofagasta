

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
							<ul class="accordion row row-xs-1 row-md-3" data-accordion>
							  <li class="accordion-item col-xs-12 col-md-4 is-active" data-accordion-item>
							    <a href="#" class="accordion-title hide-md">Accordion 1</a>
							    <h5 class="footer-title space-bottom">Nosotros</h5>
							    <div class="accordion-content" data-tab-content>
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
							  <li class="accordion-item col-xs-12 col-md-4 is-active" data-accordion-item>
							    <a href="#" class="accordion-title hide-md">Accordion 2, you can't open me.</a>
							    <h5 class="footer-title space-bottom">Iniciativas</h5>
							    <div class="accordion-content" data-tab-content>
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
							  <li class="accordion-item col-xs-12 col-md-4 is-active" data-accordion-item>
							    <a href="#" class="accordion-title hide-md">Accordion 3, you can't open me.</a>
							    <h5 class="footer-title space-bottom">Biblioteca</h5>
							    <div class="accordion-content" data-tab-content>
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
								<h5 class="footer-title space-bottom">Mantente Enterado con las últimas noticias</h5>
								<?= do_shortcode( '[contact-form-7 id="4" title="Newsletter"]' ); ?>
							</div>
							<div>
								<h5 class="footer-title space-bottom">Encuentranos también en:</h5>
								<?php if ( have_rows( 'footer_social', 'option' ) ) : ?>
									<div class="row">
										<?php while ( have_rows( 'footer_social', 'option' ) ) : the_row(); ?>
											<figure>
												<a href="<?php the_sub_field( 'footer_social_link', 'option' ); ?>" target="_blank">
													<img width="200px" src="<?php the_sub_field( 'footer_social_image', 'option' ); ?>">
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
					<p class="center-xs">Una Iniciativa de:</p>
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

		<script src="<?= get_template_directory_uri(); ?>/dist/bundle.js"></script>
		<?php wp_footer(); ?>

	</body>
</html>
