
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
		<div class="container">
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
   	  <div class="row row-xs-1 row-md-2">

   	  	<!--=======================================================
   	  	=            Contenido de la columna izquierda            =
   	  	========================================================-->
				<div class="col-xs-12 col-md-8">
					<section><!-- ¿De qué se trata este proyecto? -->
						<div><?php the_field( 'clone_project_desc_title_desc' ); ?></div>
					</section><!-- /¿De qué se trata este proyecto? -->


					<section><!-- Card proyecto en cifras -->
						<div><?php if ( have_rows( 'clone_project_cypher' ) ) : ?>
							<?php while ( have_rows( 'clone_project_cypher' ) ) : the_row(); ?>
								<h2><?php the_sub_field( 'title' ); ?></h2>

								<?php if ( have_rows( 'content_repeater' ) ) : ?>
									<div class="row row-xs-1 row-md-2">
									<?php while ( have_rows( 'content_repeater' ) ) : the_row(); ?>
										<div class="col-xs-12 col-md-6">
											<p><?php the_sub_field( 'subtitle' ); ?></p>
											<h5><?php the_sub_field( 'desc' ); ?></h5>
										</div>
									<?php endwhile; ?>
									</div>
								<?php endif; ?>

							<?php endwhile; ?>
						<?php endif; ?></div>
					</section><!-- /Card proyecto en cifras -->


					<section><!-- Logotipo patrocinadores -->
						<?php if ( have_rows( 'clone_sponsor' ) ) : ?>
							<?php while ( have_rows( 'clone_sponsor' ) ) : the_row(); ?>
								<p><?php the_sub_field( 'title' ); ?></p>
								<div class="row row-xs-1 row-md-3">

									<?php if ( have_rows( 'gallery_repeater' ) ) : ?>
										<?php while ( have_rows( 'gallery_repeater' ) ) : the_row(); ?>
											<div class="col-xs-12 col-md-4">
												<p><?php the_sub_field( 'gallery_desc' ); ?></p>
												<img src="<?php the_sub_field( 'gallery_image' ); ?>">
											</div>
										<?php endwhile; ?>
									<?php endif; ?>

								</div>
							<?php endwhile; ?>
						<?php endif; ?>
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