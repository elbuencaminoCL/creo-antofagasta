
<?php
    /**
    * Template Name: Ficha Proyecto
    */
  get_header();

?>
<style type="text/css">
.abajo {
	position: relative;
}
.abajo:before {
	content: '';
	position: absolute;
background-color: rgba(200, 0, 0, 0.7 );
}

</style>

	<section id="chipProyectBanner">
		<div class="container">
			<figure style="background-color: rgba( <?= hexdec('ffffff'); ?>, <?= hexdec('aa'); ?>, <?= hexdec('ff'); ?>, 0.75 ) )" class="chip-proyect-banner-figure row middle-xs center-xs">
				<img src="<?php the_field( 'clone_banner_image' ); ?>">
				<h2><?php the_field( 'clone_banner_title' ); ?></h2>
			</figure>

			<figure class="chip-proyect-banner-figure row middle-xs center-xs abajo"<?php the_field('clone_image_color') ?> >
				<img src="<?php the_field( 'clone_banner_image' ); ?>">
				<h2><?php the_field( 'clone_banner_title' ); ?></h2>
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
						<div><?php the_field( 'clone_chip_project_title_desc' );?></div>
					</section><!-- /¿De qué se trata este proyecto? -->

					<section><!-- Card proyecto en cifras -->
						<div><?php if ( have_rows( 'clone_chip_project' ) ) : ?>
							<?php while ( have_rows( 'clone_chip_project' ) ) : the_row(); ?>
								<h2><?php the_sub_field( 'title' ); ?></h2>

								<?php if ( have_rows( 'content_repeater' ) ) : ?>
									<?php while ( have_rows( 'content_repeater' ) ) : the_row(); ?>
										<p><?php the_sub_field( 'desc' ); ?></p>
									<?php endwhile; ?>
								<?php endif; ?>

							<?php endwhile; ?>
						<?php endif; ?></div>
					</section><!-- /Card proyecto en cifras -->
				</div>
   	  	<!--====  End of Contenido de la columna izquierda  ====-->

				<!--=====================================================
				=            Contenido de la columna derecha            =
				======================================================-->
				<div class="col-xs-12 col-md-4">

				</div>
				<!--====  End of Contenido de la columna derecha  ====-->

   	  </div>
    </div>
	</section>



<?php get_footer(); ?>