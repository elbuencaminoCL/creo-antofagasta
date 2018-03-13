
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
<section class="bg-purple">
	<div class="container pd-30-0">
		<header class="center-xs start-md">
			<h2 class="f-bold f-white mg-bottom-15"><?php the_field( 'home_projects_title' ); ?></h2>
			<div class="f-white space-bottom">
				<?php the_field( 'home_projects_description' ); ?>
			</div>
		</header>

		<div class="projectCarousel row row-xs-1 row-sm-2 row-md-4 space-bottom">
			<?php

			$posts = get_field('home_projects_relation');

			if( $posts ): ?>
			    <?php foreach( $posts as $post):

			      $hex = get_field('clone_image_color');
			      list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");

			    ?>

		        <?php setup_postdata($post); ?>

						<div class="card-project col-xs-12 col-md-3">
							<a href="<?php the_permalink(); ?>" class="card-project-link">
								<figure class="card-project-figure">
									<?php if( get_field( 'clone_banner_image' ) ) : ?>
										<img src="<?php the_field( 'clone_banner_image' ); ?>">
									<?php endif; ?>

									<div class="card-project-title" style="background-color: rgba( <?= "$r, $g, $b"; ?>, .8 );">
										<h2 class="f-white"><?php the_title(); ?></h2>
									</div>
								</figure>
							</a>
						</div>

			    <?php endforeach; ?>
			    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>
		</div>
		<div class="center-xs">
			<a href="<?= get_field('home_projects_button_link'); ?>" target="_blank" class="button button-full-xs"><?php the_field( 'home_projects_button_text' ); ?></a>
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
	<div class="home_banner_wrap">
		<figure class="home_banner_figure">
			<img src="<?php the_field( 'home_banner_image' ); ?>" alt="" />
			<h1 class="home_banner_col_title f-white space-bottom center-xs start-md hide-md"><?php the_field( 'home_banner_title' ); ?></h1>
		</figure>

		<div class="home_banner_container container">
			<div class="home_banner_col">
				<h1 class="home_banner_col_title f-white space-bottom center-xs start-md hide-xs show-md"><?php the_field( 'home_banner_title' ); ?></h1>
				<p class="home_banner_caption space-bottom center-xs start-md"><?php the_field( 'home_banner_desc' ); ?></p>
				<div class="end-md">
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
			<div class="col-xs-12 col-md-4 space-bottom"><!-- Videos -->
				<h2 class="f-bold mg-bottom-15">Vídeos</h2>
				<?php
					$args = array(
						'post_type' => 'videos',
						'posts_per_page' => 2
					);
					$query = new WP_Query( $args );
				?>

				<div class="row row-xs-2">
					<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
						<div class="space-bottom believe-video">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php the_field( 'video_id' ); ?>?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						</div>
					<!-- post -->
					<?php endwhile; ?>

					<div class="believe-video-desc">
						<p class="f-tiny"><strong>Video Informativo</strong></p>
						<p class="jump-line"><?= get_the_title(); ?></p>
					</div>

					<?php endif; ?>
				</div>

				<div class="end-xs">
					<a href="https://www.youtube.com/user/CreoAntofagasta" class="f-link" target="_blank">Ver todos los vídeos</a>
				</div>
			</div><!-- /Videos -->

			<div class="col-xs-12 col-md-4 space-bottom hide-xs show-md"><!-- CREO en la prensa -->
				<div class="int-home">

					<?php
						$cont = 0;
					 	query_posts( array(
							'category_name' => 'antofagasta-en-la-prensa',
							'posts_per_page' => 3,
						));

						if( have_posts() ) :
					?>
						<h2 class="f-bold mg-bottom-15">CREO en la Prensa</h2>
					<?php
						while (have_posts()) : the_post();
						$cont++;
					?>
						<div class="divider mg-bottom-16 pd-bottom-32">
							<a target="_blank" href="<?php echo get_custom_field('url_antofagagasta_en_la_prensa') ?>">
								<p class="f-black f-small"><strong><?php echo get_the_content(); ?></strong></p>
								<p class="f-dark-gray no-space f-normal"><?php echo get_the_title(); ?></p>
							</a>
						</div>
						<?php
						endwhile;
						endif;
						wp_reset_query();
					?>
				</div>
			</div><!-- /CREO en la prensa -->

			<div class="col-xs-12 col-md-4 space-bottom"><!-- Biblioteca -->
				<h2 class="f-bold mg-bottom-15">Biblioteca</h2>
				<p class="space-bottom f-normal">Documentación es una sección dónde podrás:</p>
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
									if( $countCat <= 4 ) :
						?>
								<div class="divider mg-bottom-15 pd-bottom-15">
									<div class="row row-xs-2">
										<div class="col-xs-6">
											<p><a href="<?php the_field('document_file'); ?>" target="_blank" class="f-blue"><?php the_title(); ?></a></p>
											<p class="f-small"><?= $category->name; ?></p>
										</div>
										<div class="col-xs-6 end-xs">
											<a href="<?php the_field('document_file'); ?>" target="_blank" class="button white">
												<i class="fas fa-download hide-md f-big"></i><span class="hide-xs show-md">Descargar</span>
											</a>
										</div>
									</div>
								</div>
			  			<?php endif; $countCat++; endwhile; ?>
			  		<?php endif; ?>
			  		<?php wp_reset_query(); ?>


			 	<?php endforeach; ?>

			 	<div class="end-xs">
			 		<a href="<?= home_url( 'biblioteca' ); ?>" class="f-link">Ir a Biblioteca</a>
			 	</div>
			</div><!-- /Biblioteca -->

		</div>
	</div>
</section>


<!--====  Participación  ====-->

<section class="home-events section">
	<div class="container">
		<div class="row row-xs-1 row-md-2">
			<div class="col-xs-12 col-md-5 space-bottom">
				<h2 class="divider divider--black pd-bottom-15 mg-bottom-15">Eventos</h2>

				<?php
					$args = array(
						'post_type' => 'events',
						'posts_per_page' => 2
					);
					$query = new WP_Query( $args );
				?>

				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

				<div class="row row-xs-2">
					<div class="col-xs-3 center-xs bg-gold pd-15 row middle-xs">
						<?php
							$date = get_field( 'event_date', false, false );
							$date = new DateTime($date);
						?>

						<div class="F f-white calendar-date">
							<p class="calendar-date--day"><?= $date->format('j'); ?></p>
							<p class="calendar-date--year"><?= $date->format('M · Y'); ?></p>
						</div>
					</div>

					<div class="col-xs-9">
    				<h5 class="mg-bottom-15 mg-top-15"><?php the_title(); ?></h5>
    				<p class="f-small f-black"><strong>Lugar: </strong><?php the_field( 'event_place' ); ?></p>

    				<?php if ( have_rows( 'event_repeater' ) ) : ?>
    					<ul>
    						<?php while ( have_rows( 'event_repeater' ) ) : the_row(); ?>
    							<li class="f-small f-black"><strong>Horario: </strong><?php the_sub_field( 'event_since' ); ?> a <?php the_sub_field( 'event_until' ); ?></li>
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
			<div class="col-xs-12 col-md-7 space-bottom">
				<h2 class="divider divider--black pd-bottom-15 mg-bottom-15">Participación</h2>
				<div class="row row-xs-1 row-md-2 no-gutter">
					<div class="col-xs-12 col-md-6 home_participation_col space-bottom">
						<div class="home_participation_wrap">
							<p class="f-small"><strong>Encuesta Activa</strong></p>
							<h2 class="pd-25-0"><?php the_field( 'home_survey_title' ); ?></h2>
							<p class="space-bottom"><?php the_field( 'home_survey_desc' ); ?></p>
						</div>
						<div>
							<a href="<?php the_field( 'home_survey_button_link' ); ?>" class="button button-full-xs"><?php the_field( 'home_survey_button_text' ); ?></a>
						</div>
					</div>

					<div class="col-xs-12 col-md-6 home_participation_col space-bottom">
						<div class="home_participation_wrap">
							<p class="f-small"><strong>Buzón de Sugerencias</strong></p>
							<h2 class="pd-25-0"><?php the_field( 'home_suggestion_title' ); ?></h2>
							<p class="space-bottom"><?php the_field( 'home_suggestion_desc' ); ?></p>
						</div>
						<div>
							<a href="<?php the_field( 'home_suggestion_button_link' ); ?>" class="button button-full-xs"><?php the_field( 'home_suggestion_button_text' ); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>