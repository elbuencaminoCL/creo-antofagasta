
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

<!--====  Iniciativas  ====-->

<section>
	<div class="container">
		<h3><?php the_field( 'home_projects_title' ); ?></h3>
		<p><?php the_field( 'home_projects_description' ); ?></p>

		<div class="row row-xs-1 row-sm-2 row-md-4">
			<?php

			$posts = get_field('home_projects_relation');

			if( $posts ): ?>
			    <?php foreach( $posts as $post):

			    	$color = get_field('clone_image_color');
			    ?>
		        <?php setup_postdata($post); ?>

						<div class="col-xs-12 col-md-3 space-bottom">
							<a href="<?php the_permalink(); ?>">
								<figure <?= ($color) ? 'style="background-color: ' . $color . '"' : ''; ?> class="figure-project row middle-xs center-xs">
									<?php if( get_field( 'clone_banner_image' ) ) : ?>
										<img src="<?php the_field( 'clone_banner_image' ); ?>">
									<?php endif; ?>

									<div class="<?= ( get_field( 'clone_banner_image' ) ? 'banner-content' : '' ); ?> container">
										<h2><?php the_title(); ?></h2>
									</div>
								</figure>
							</a>
						</div>

			    <?php endforeach; ?>
			    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>
		</div>
		<div class="center-xs">
			<a href="<?= get_field('home_projects_button_link'); ?>" target="_blank" class="button"><?php the_field( 'home_projects_button_text' ); ?></a>
		</div>
	</div>
</section>

<!--====  End Iniciativas  ====-->

<!--============================
=            Noticias            =
=============================-->

<?php get_template_part( 'partials/content', 'home-news' ); ?>

<!--====  End of Noticias  ====-->




<!--============================
=            Banner            =
=============================-->
<section>
	<div class="home-banner-container">
		<figure class="home-banner-figure center-xs" >
			<img src="<?php the_field( 'home_banner_image' ); ?>" class="home-banner-image">
			<h2 class="home-banner-title hide-md f-white"><?php the_field( 'home_banner_title' ); ?></h2>
		</figure>


		<div class="container row row-xs-1 row-md-1 center-xs end-md home_banner_row pd-30">
			<div class="col-xs-12 col-md-6 start-md">
				<h2 class="hide-xs show-md f-white"><?php the_field( 'home_banner_title' ); ?></h2>
				<p class="f-white"><?php the_field( 'home_banner_desc' ); ?></p>
				<div class="end-xs">
					<a href="<?= home_url( 'que-es-creo-antofagasta' ); ?>" class="button button-full-xs">Conoce más sobre creo</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Banner  ====-->



<!--====  Creo en la Prensa  ====-->

<div class="int-home">

	<?php
		$cont = 0;
	 	query_posts( array(
			'category_name' => 'antofagasta-en-la-prensa',
			'posts_per_page' => 3,
		));


		if(have_posts()) :
	?>
		 	<h2 class="h3 ver ltz" style="font-size: 38px;"> <?php  echo 'En la prensa','Press releases';  ?> </h2>
	<?php
		while (have_posts()) : the_post();
		$cont++;
	?>
		<a target="_blank" href="<?php echo get_custom_field('url_antofagagasta_en_la_prensa') ?>" ><p class="ltz prensa_p ver"><?php echo get_the_content(); ?></p>
			<p class="p14"><?php echo get_the_title(); ?></p>
	    </a>
	<?php if($num!=$cont){ ?>
	    <div class="linea_prensa"></div>
	<?php
		}
		endwhile;
		endif;
		wp_reset_query();
	?>

</div>


<?php get_footer(); ?>