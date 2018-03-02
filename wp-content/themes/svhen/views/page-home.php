
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

<section class="section">
	<div class="container">
		<div class="row row-xs-1 row-md-3">
			<div class="col-xs-12 col-md-4">
				<h2>Vídeos</h2>
				<?php
					$args = array(
						'post_type' => 'videos',
						'posts_per_page' => 1
					);
					$query = new WP_Query( $args );
				?>

				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

					<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php the_field( 'video_id' ); ?>?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					<div class="end-xs">
						<a href="https://www.youtube.com/user/CreoAntofagasta" target="_blank">Ver todos los vídeos</a>
					</div>
				<!-- post -->
				<?php
				endwhile; ?>

				<?php endif; ?>
			</div>

			<div class="col-xs-12 col-md-4">

				<div class="int-home">

					<?php
						$cont = 0;
					 	query_posts( array(
							'category_name' => 'antofagasta-en-la-prensa',
							'posts_per_page' => 3,
						));

						if( have_posts() ) :
					?>
						<h2 class="h3 ver ltz" style="font-size: 38px;">CREO en la Prensa</h2>
					<?php
						while (have_posts()) : the_post();
						$cont++;
					?>
						<a target="_blank" href="<?php echo get_custom_field('url_antofagagasta_en_la_prensa') ?>" ><p class="ltz prensa_p ver"><?php echo get_the_content(); ?></p>
							<p class="p14"><?php echo get_the_title(); ?></p>
						</a>
						<?php if( $num != $cont ) : ?>
						   <div class="linea_prensa"></div>
						<?php
							endif;
						endwhile;
						endif;
						wp_reset_query();
					?>

				</div>
			</div>


			<div class="col-xs-12 col-md-4">

				<h2>Biblioteca</h2>
				<p>Documentación es una sección dónde podrás:</p>
				<?php $args = array(
					'post_type' => 'documents',
					'taxonomy' => 'cat_doc'
				);

					$categories = get_categories( $args );
								$countCat = 1;

					foreach($categories as $category) :

		        $term = get_term_by( 'id', $category->term_id, 'category_projects' );
				?>

						<?php
							$args = array(
							'post_type' => 'documents',
							'tax_query' => array(
									array(
										'taxonomy' => 'cat_doc',
										'field' => 'term_id',
										'terms' => $category->term_id
									)
								)
							);
							$query = new WP_Query( $args );
							if ( $query->have_posts() ) :
								while ( $query->have_posts() ) : $query->the_post();
									if( $countCat <= 5 ) :
						?>
								<div class="space-bottom row row-xs-2">
									<div class="col-xs-8">
										<h3><?php the_title(); ?></h3>
										<em><?= $category->name; ?></em>
									</div>
									<div class="col-xs-4 end-md">
										<a href="<?php the_field('document_file'); ?>" target="_blank" class="button white">Descargar</a>
									</div>
								</div>
			  			<?php endif; $countCat++; endwhile; ?>
			  		<?php endif; ?>
			  		<?php wp_reset_query(); ?>


			 	<?php endforeach; ?>

			 	<div class="end-xs">
			 		<a href="<?= home_url( 'biblioteca' ); ?>">Ir a Biblioteca</a>
			 	</div>
			</div>


		</div>
	</div>
</section>


<!--====  Participación  ====-->

<section class="section">
	<div class="container">
		<div class="row row-xs-1 row-md-2">
			<div class="col-xs-12 col-md-5">
				<h2>Eventos</h2>

				<?php
					$args = array(
						'post_type' => 'events',
						'posts_per_page' => 2
					);
					$query = new WP_Query( $args );
				?>

				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

				<div class="row row-xs-2">
					<div class="col-xs-2">
						<?php the_field( 'event_date' ); ?>
					</div>

					<div class="col-xs-10">
    				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    				<p><strong>Lugar: </strong><?php the_field( 'event_place' ); ?></p>

    				<?php if ( have_rows( 'event_repeater' ) ) : ?>
    					<ul>
    						<?php while ( have_rows( 'event_repeater' ) ) : the_row(); ?>
    							<li><strong>Horario: </strong><?php the_sub_field( 'event_since' ); ?> a <?php the_sub_field( 'event_until' ); ?></li>
    						<?php endwhile; ?>
    					</ul>
    				<?php endif; ?>
    			</div>
    		</div>
				<!-- post -->
				<?php
				endwhile; ?>

				<?php endif; ?><?php wp_reset_query(); ?>

			</div>
			<div class="col-xs-12 col-md-7">
				<h2>Participación</h2>
				<div class="row row-xs-1 row-md-2">
					<div class="col-xs-12 col-md-6">
						<p>Encuesta Activa</p>
						<h3><?php the_field( 'home_survey_title' ); ?></h3>
						<p><?php the_field( 'home_survey_desc' ); ?></p>
						<div>
							<a href="<?php the_field( 'home_survey_button_link' ); ?>" class="button"><?php the_field( 'home_survey_button_text' ); ?></a>
						</div>
					</div>
					<div class="col-xs-12 col-md-6">
						<p>Buzón de Sugerencias</p>
						<h3><?php the_field( 'home_suggestion_title' ); ?></h3>
						<p><?php the_field( 'home_suggestion_desc' ); ?></p>
						<div>
							<a href="<?php the_field( 'home_suggestion_button_link' ); ?>" class="button"><?php the_field( 'home_suggestion_button_text' ); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>