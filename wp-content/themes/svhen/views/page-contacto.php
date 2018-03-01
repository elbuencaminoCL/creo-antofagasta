<?php
    /**
    * Template Name: Contacto
    */
  get_header();


?>

<section>
	<figure class="row middle-xs center-xs">
		<img src="<?php the_field( 'contact_banner_image' ); ?>" class="believe-banner-image">
		<div class="banner-content container">
			<h2><?php the_field( 'contact_banner_title' ); ?></h2>
			<p><?php the_field( 'contact_banner_desc' ); ?></p>
		</div>
	</figure>
</section>

<section>
	<div class="container">
		<div class="row row-xs-1 row-md-2">
			<div class="col-xs-12 col-md-6">
				<h5 class="space-bottom">Contáctanos</h5>
				<?= do_shortcode( '[contact-form-7 id="239" title="Formulario de Contácto"]' ); ?>
			</div>

			<div class="col-xs-12 col-md-6">
				<p><?php the_field( 'contact_data' ); ?></p>
			</div>
		</div>
	</div>
</section>





<?php get_footer(); ?>