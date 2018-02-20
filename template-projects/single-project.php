
<?php
  get_header();

  $hex = get_field('clone_image_color');
  list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
?>

<style type="text/css">

	.banner-figure:before {
		background-color: rgba( <?= "$r, $g, $b"; ?>, .8 );
	}

</style>

	<!--============================
	=            Banner            =
	=============================-->
	<section>
		<div>
			<figure class="banner-figure row middle-xs center-xs">
				<img src="<?php the_field( 'clone_banner_image' ); ?>">
				<div class="banner-content container">
					<h2><?php the_field( 'clone_banner_title' ); ?></h2>
				</div>
			</figure>
		</div>
	</section>
	<!--====  End of Banner  ====-->


	<!--================================
	=            Breadcrumb            =
	=================================-->

	<!--====  End of Breadcrumb  ====-->


	<section>
		<div class="container">
			<p class="space-top f-small">Inicio / Iniciativas / Ciudad de Mar / Parque Metropolitano Borde Costero</p>
		</div>
	</section>

	<section>
    <div class="container">
   	  <div class="row row-xs-1 row-md-2">

   	  	<!--=======================================================
   	  	=            Contenido de la columna izquierda            =
   	  	========================================================-->
				<div class="card col-xs-12 col-md-8">
					<section>
						<div>
							<?php the_field( 'clone_project_desc_title_desc' ); ?>
						</div>
					</section>


					<section class="project-data"><!-- Card proyecto en cifras -->
						<?php if ( have_rows( 'clone_project_cypher' ) ) : ?>
							<?php while ( have_rows( 'clone_project_cypher' ) ) : the_row(); ?>
								<h4 class="project-data_title white" style="background-color: <?= $hex; ?>"><?php the_sub_field( 'title' ); ?></h4>
								<div class="project-data_content">

									<?php if ( have_rows( 'content_repeater' ) ) : ?>
										<?php while ( have_rows( 'content_repeater' ) ) : the_row(); ?>
											<p><?php the_sub_field( 'desc' ); ?></p>
										<?php endwhile; ?>
									<?php endif; ?>

								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</section><!-- /Card proyecto en cifras -->


					<section><!-- Carrusel -->
						<?php echo do_shortcode("[hslide id=1]"); ?>
					</section>
					<!--====  End of Carrusel  ====-->


					<section><!-- Acordeón Sectores a Intervenir -->
						<div class="accordion" data-accordion>
							<?php if ( have_rows( 'clone_accordion' ) ) : ?>
								<?php $count = 1; ?>
								<?php while ( have_rows( 'clone_accordion' ) ) : the_row(); ?>
									<?php if ( have_rows( 'accordion_repeater' ) ) : ?>
										<?php while ( have_rows( 'accordion_repeater' ) ) : the_row(); ?>

											<li class="accordion-item <?= ($count == 1) ? 'is-active' : ''; ?>" data-accordion-item>
											  <!-- Accordion tab title -->
											  <a href="#" class="accordion-title"><?php the_sub_field( 'accordion_title' ); ?></a>

											  <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
											  <div class="accordion-content" data-tab-content>
													<p><?php the_sub_field( 'accordion_desc' ); ?></p>
											  </div>
											</li>

										<?php $count ++; ?>
										<?php endwhile; ?>
									<?php endif; ?>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</section><!-- /Acordeón Sectores a Intervenir -->


					<section><!-- Logotipo patrocinadores -->
						<div class="row row-xs-1 row-md-3">
							<?php if ( have_rows( 'clone_sponsor' ) ) : ?>
								<?php while ( have_rows( 'clone_sponsor' ) ) : the_row(); ?>

									<?php if ( have_rows( 'gallery_repeater' ) ) : ?>
										<?php while ( have_rows( 'gallery_repeater' ) ) : the_row(); ?>
											<div class="col-xs-12 col-md-4">
												<p><?php the_sub_field( 'gallery_desc' ); ?></p>
												<img src="<?php the_sub_field( 'gallery_image' ); ?>">
											</div>
										<?php endwhile; ?>
									<?php endif; ?>

								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</section><!-- /Logotipo patrocinadores -->


				</div>
   	  	<!--====  End of Contenido de la columna izquierda  ====-->

				<!--=====================================================
				=            Contenido de la columna derecha            =
				======================================================-->
				<div class="col-xs-12 col-md-4">

				</div>
				<!--====  End of Contenido de la columna derecha  ====-->

   	  </div>

   	  <div class="row">
   	  	<h2><?php the_field( 'clone_project_relation_title' ); ?></h2>
   	  	<?php if ( have_rows( 'clone_project_relation' ) ) : ?>
 	  			<?php while ( have_rows( 'clone_project_relation' ) ) : the_row(); ?>
 	  				<?php if ( have_rows( 'gallery_repeater' ) ) : ?>
  						<?php while ( have_rows( 'gallery_repeater' ) ) : the_row(); ?>
  							<img src="<?php the_sub_field( 'gallery_image' ); ?>">
  							<p><?php the_sub_field( 'gallery_desc' ); ?></p>
  						<?php endwhile; ?>
 	  				<?php endif; ?>
 	  			<?php endwhile; ?>
   	  	<?php endif; ?>
   	  </div>



    </div>
	</section>



<?php get_footer(); ?>