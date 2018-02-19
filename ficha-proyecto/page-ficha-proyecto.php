
<?php
    /**
    * Template Name: Ficha Proyecto
    */
  get_header();

  $hex = get_field('clone_chip_project_image_color');
  list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
?>

<style type="text/css">

	.chip-proyect-banner-figure:before {
		background-color: rgba( <?= "$r, $g, $b"; ?>, .8 );
	}

</style>

	<section>
		<div class="container">
			<figure class="chip-proyect-banner-figure row middle-xs center-xs">
				<img src="<?php the_field( 'clone_chip_project_banner_image' ); ?>">
				<h2><?php the_field( 'clone_chip_project_banner_title' ); ?></h2>
			</figure>
		</div>
	</section>

	<!--================================
	=            Breadcrumb            =
	=================================-->

	<!--====  End of Breadcrumb  ====-->

	<section class="chipProyectContent">
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
									<?php while ( have_rows( 'content_repeater' ) ) : the_row(); ?>
										<p><?php the_sub_field( 'desc' ); ?></p>
									<?php endwhile; ?>
								<?php endif; ?>

							<?php endwhile; ?>
						<?php endif; ?></div>
					</section><!-- /Card proyecto en cifras -->

					<section><!-- Acordeón Sectores a Intervenir -->
						<div>
							<?php if ( have_rows( 'clone_accordion' ) ) : ?>
								<?php while ( have_rows( 'clone_accordion' ) ) : the_row(); ?>
									<h2><?php the_sub_field( 'title' ); ?></h2>

									<?php if ( have_rows( 'accordion_repeater' ) ) : ?>
										<?php while ( have_rows( 'accordion_repeater' ) ) : the_row(); ?>
											<p><?php the_sub_field( 'accordion_title' ); ?></p>
										<?php endwhile; ?>
									<?php endif; ?>

								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</section><!-- /Acordeón Sectores a Intervenir -->

					<section><!-- Logotipo patrocinadores -->
						<div>
							<?php if ( have_rows( 'clone_sponsor' ) ) : ?>
								<?php while ( have_rows( 'clone_sponsor' ) ) : the_row(); ?>

									<?php if ( have_rows( 'gallery_repeater' ) ) : ?>
										<?php while ( have_rows( 'gallery_repeater' ) ) : the_row(); ?>
											<p><?php the_sub_field( 'gallery_desc' ); ?></p>
											<img src="<?php the_sub_field( 'gallery_image' ); ?>">
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