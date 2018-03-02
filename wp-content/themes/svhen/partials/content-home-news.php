<section class="section">
	<div class="container">
		<h3>Noticias</h3>
		<div class="row row-xs-1 row-md-2">
			<div class="col-xs-12 col-md-6">

				<?php $args = array(
					'numberposts' => 4,
					'post_type' => 'post',
					'meta_query' => array(
						array(
							'key' => 'news_great',
							'value' => 'selected',
							'compare' => 'NOT EXISTS'
						)
				)
				);

				// get results
				$firstQuery = new WP_Query( $args );

				$countFirst = 1;

				// The Loop
				?>
				<?php if( $firstQuery->have_posts() ): ?>
					<div class="row row-xs-1 row-md-2">

						<?php while ( $firstQuery->have_posts() ) : $firstQuery->the_post(); ?>

							<?php if( $countFirst <= 2 ) : ?>
								<div class="col-xs-12 col-md-6">
					        <div style="background-color: <?= get_field( 'color_picker' ); ?>;">
										<?php
											if ( has_post_thumbnail() ) :
												the_post_thumbnail();
											endif;
										?>
										<?= the_category( ' - ' ); ?>
											<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
											<p class="entry-meta"><?php the_time("F d, Y"); ?></p>

										<?= wp_html_excerpt( get_the_content(), 115, '...' ); ?>
										<p><a href="<?php the_permalink(); ?>">Leer más ></a></p>
									</div>
								</div>
							<?php endif; ?>

						<?php $countFirst++; endwhile; ?>

					</div>
				<?php endif; ?>

				<?php wp_reset_query(); ?>

				<!-- NOTICIA DESTACADA COLUMNA IZQUIERDA -->

				<?php $args = array(
					'numberposts' => 2,
					'post_type' => 'post',
					'meta_query' => array(
						array(
							'key' => 'news_great',
							'value' => 'selected',
							'compare' => 'LIKE'
						)
				)
				);

				// get results
				$firstGreatQuery = new WP_Query( $args );

				$counterFirstGreat = 1;

				// The Loop
				?>
				<?php if( $firstGreatQuery->have_posts() ): ?>
					<div class="row row-xs-1">

						<?php while ( $firstGreatQuery->have_posts() ) : $firstGreatQuery->the_post(); ?>

							<?php if( $counterFirstGreat == 1 ) : ?>
								<div class="col-xs-12">
					        <div style="background-color: <?= get_field( 'color_picker' ); ?>;">
										<?php
											if ( has_post_thumbnail() ) :
												the_post_thumbnail();
											endif;
										?>
										<?= the_category( ' - ' ); ?>
											<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
											<p class="entry-meta"><?php the_time("F d, Y"); ?></p>

										<?= wp_html_excerpt( get_the_content(), 115, '...' ); ?>
										<p><a href="<?php the_permalink(); ?>">Leer más ></a></p>
									</div>
								</div>
							<?php endif; ?>

						<?php $counterFirstGreat++; endwhile; ?>

					</div>
				<?php endif; ?>

				<?php wp_reset_query(); ?>

			</div>


			<div class="col-xs-12 col-md-6">

				<!-- NOTICIA DESTACADA COLUMNA DERECHA -->

				<?php $args = array(
					'numberposts' => 2,
					'post_type' => 'post',
					'meta_query' => array(
						array(
							'key' => 'news_great',
							'value' => 'selected',
							'compare' => 'LIKE'
						)
				)
				);

				// get results
				$SecondGreatQuery = new WP_Query( $args );

				$counterSecondGreat = 1;

				// The Loop
				?>
				<?php if( $SecondGreatQuery->have_posts() ): ?>
					<div class="row row-xs-1">

						<?php while ( $SecondGreatQuery->have_posts() ) : $SecondGreatQuery->the_post(); ?>

							<?php if( $counterSecondGreat == 2 ) : ?>
								<div class="col-xs-12">
					        <div style="background-color: <?= get_field( 'color_picker' ); ?>;">
										<?php
											if ( has_post_thumbnail() ) :
												the_post_thumbnail();
											endif;
										?>
										<?= the_category( ' - ' ); ?>
											<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
											<p class="entry-meta"><?php the_time("F d, Y"); ?></p>

										<?= wp_html_excerpt( get_the_content(), 115, '...' ); ?>
										<p><a href="<?php the_permalink(); ?>">Leer más ></a></p>
									</div>
								</div>
							<?php endif; ?>

						<?php $counterSecondGreat++; endwhile; ?>

					</div>
				<?php endif; ?>

				<?php wp_reset_query(); ?>


				<?php $args = array(
					'numberposts' => 4,
					'post_type' => 'post',
					'meta_query' => array(
						array(
							'key' => 'news_great',
							'value' => 'selected',
							'compare' => 'NOT EXISTS'
						)
				)
				);

				// get results
				$secondQuery = new WP_Query( $args );

				$countSecond = 1;

				// The Loop
				?>
				<?php if( $secondQuery->have_posts() ): ?>
					<div class="row row-xs-1 row-md-2">

						<?php while ( $secondQuery->have_posts() ) : $secondQuery->the_post(); ?>

							<?php if( $countSecond > 2 && $countSecond <= 4 ) : ?>
								<div class="col-xs-12 col-md-6">
					        <div style="background-color: <?= get_field( 'color_picker' ); ?>;">
										<?php
											if ( has_post_thumbnail() ) :
												the_post_thumbnail();
											endif;
										?>
										<?= the_category( ' - ' ); ?>
											<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
											<p class="entry-meta"><?php the_time("F d, Y"); ?></p>

										<?= wp_html_excerpt( get_the_content(), 115, '...' ); ?>
										<p><a href="<?php the_permalink(); ?>">Leer más ></a></p>
									</div>
								</div>
							<?php endif; ?>

						<?php $countSecond++; endwhile; ?>

					</div>
				<?php endif; ?>

				<?php wp_reset_query(); ?>

			</div>

		</div>
		<div class="center-xs">
			<a href="<?php the_field( 'home_news_button_link' ); ?>" class="button"><?php the_field( 'home_news_button_text' ); ?></a>
		</div>
	</div>
</section>