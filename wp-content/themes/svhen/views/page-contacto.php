<?php
    /**
    * Template Name: Contacto
    */
  get_header();


?>

<section class="space-bottom">
	<figure class="row middle-xs center-xs">
		<img src="<?php the_field( 'contact_banner_image' ); ?>" class="believe-banner-image">
		<div class="banner-content container">
			<h1 class="f-white space-bottom"><?php the_field( 'contact_banner_title' ); ?></h1>
			<p class="f-white"><?php the_field( 'contact_banner_desc' ); ?></p>
		</div>
	</figure>
</section>

<section class="section">
	<div class="container">
		<h2 class="space-bottom">Contácto</h2>
		<div class="row row-xs-1 row-md-2">
			<div class="col-xs-12 col-md-6 bg-white card-border pd-60 space-bottom">
				<?= do_shortcode( '[contact-form-7 id="239" title="Formulario de Contácto"]' ); ?>
			</div>

			<div class="col-xs-12 col-md-6">
				<p><?php the_field( 'contact_data' ); ?></p>
			</div>
		</div>
	</div>
</section>





<?php get_footer(); ?>