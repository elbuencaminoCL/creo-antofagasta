
<?php
    /**
    * Template Name: Home
    */
  get_header();
?>


<!--==============================
=            Carrusel            =
===============================-->
<section>
	<div class="container">
		<?php echo do_shortcode("[hslide id=3]"); ?>
	</div>
</section>
<!--====  End of Carrusel  ====-->


<!--============================
=            Banner            =
=============================-->
<section>
	<div class="container home-banner-container">
		<figure class="home-banner-figure center-xs" >
			<img src="<?php the_field( 'home_banner_image' ); ?>" class="home-banner-image">
			<h2 class="home-banner-title hide-md f-white"><?php the_field( 'home_banner_title' ); ?></h2>
		</figure>

		<div class="row row-xs-1 row-md-1 center-xs end-md home_banner_row pd-30">
			<div class="col-xs-12 col-md-6 start-md">
				<h2 class="hide-xs show-md f-white"><?php the_field( 'home_banner_title' ); ?></h2>
				<p class="f-white"><?php the_field( 'home_banner_desc' ); ?></p>
				<div class="end-xs">
					<a href="#" class="button button-full-xs">Conoce más sobre creo</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====  End of Banner  ====-->


<?php get_footer(); ?>