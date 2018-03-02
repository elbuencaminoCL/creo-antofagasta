<section class="section">
	<div class="container">
		<h3>Noticias</h3>
		<div class="row row-xs-1 row-md-2">
			<div class="col-xs-12 col-md-6">

				<?php $args = array(
					'numberposts' => 2,
					'post_type' => 'post',
					'meta_query' => array(
						array(
							'key' => 'news_great',
							'value' => 'selected',
							'compare' => 'NOT LIKE'
						)
					)
				);

				// get results
				$firstQuery = new WP_Query( $args );

				$countFirst = 1;

				// The Loop
				?>
				<?php if( $firstQuery->have_posts() ): ?>
					<div class="row row-xs-1 row-md-2 card--news--home_normal">

						<?php while ( $firstQuery->have_posts() ) : $firstQuery->the_post(); ?>

							<?php if( $countFirst <= 2 ) : ?>
								<div class="col-xs-12 col-md-6">
					        <div class="card card--news card--news--home" style="border-left: 6px solid <?= get_field('color_picker'); ?>;">
					        	<div class="card--news--home_container">
											<?php if ( get_the_post_thumbnail() ) : ?>
												<figure class="card--news--home_figure hide-xs show-md">
													<?php the_post_thumbnail(); ?>
												</figure>
											<?php endif; ?>
												<?php
										      $hex = get_field('color_picker');
										      list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
										    ?>

												<div class="card--news--home_content" style="background-color: rgba( <?= "$r, $g, $b"; ?>, .8 );">
													<p class="entry-meta f-small hide-md"><?php the_time("j"); ?> de <?php the_time("F Y"); ?></p>
													<div class="hide-xs show-md">
														<div class="card--news--home_category f-small">
															<?= the_category( ' - ' ); ?>
														</div>
													</div>
													<h4 class="card--news--home_title">
														<a href="<?php the_permalink(); ?>"><?= wp_html_excerpt( get_the_title(), 100, '...' ); ?></a>
													</h4>
													<div class="card--news--home_caption hide-xs show-md"><?= wp_html_excerpt( get_the_content(), 115, '...' ); ?></div>
													<p class="f-small"><a href="<?php the_permalink(); ?>">Leer más ></a></p>
												</div>
											</div>
									</div>
								</div>
							<?php endif; ?>

						<?php $countFirst++; endwhile; ?>

					</div>
				<?php endif; ?>

				<?php wp_reset_query(); ?>

				<!-- NOTICIA DESTACADA COLUMNA IZQUIERDA -->

				<?php $args = array(
					'numberposts' => 1,
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
					<div class="row row-xs-1 card--news--home_normal card--news--home_great">

						<?php while ( $firstGreatQuery->have_posts() ) : $firstGreatQuery->the_post(); ?>

							<?php if( $counterFirstGreat == 1 ) : ?>
								<div class="col-xs-12">
					        <div class="card card--news card--news--home" style="border-left: 6px solid <?= get_field('color_picker'); ?>;">
					        	<div class="card--news--home_container">
											<?php if ( get_the_post_thumbnail() ) : ?>
												<figure class="card--news--home_figure hide-xs show-md">
													<?php the_post_thumbnail(); ?>
												</figure>
											<?php endif; ?>
											<?php
									      $hex = get_field('color_picker');
									      list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
									    ?>

											<div class="card--news--home_content row middle-xs" style="background-color: rgba( <?= "$r, $g, $b"; ?>, .8 );">
												<article>
													<p class="entry-meta f-small hide-md"><?php the_time("j"); ?> de <?php the_time("F Y"); ?></p>
													<div class="hide-xs show-md">
														<div class="card--news--home_category f-small">
															<?= the_category( ' - ' ); ?>
														</div>
													</div>
													<h4 class="card--news--home_title center-md">
														<a href="<?php the_permalink(); ?>"><?= wp_html_excerpt( get_the_title(), 100, '...' ); ?></a>
													</h4>
													<div class="card--news--home_caption hide-xs show-md space-bottom"><?= wp_html_excerpt( get_the_content(), 115, '...' ); ?></div>
													<p class="f-small"><a href="<?php the_permalink(); ?>">Leer más ></a></p>
												</article>
											</div>
										</div>
									</div>
								</div>
							<?php endif; ?>

						<?php $counterFirstGreat++; endwhile; ?>

					</div>
				<?php endif; ?>

				<?php wp_reset_query(); ?>

			</div>


			<div class="col-xs-12 col-md-6 hide-xs show-md">

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
					<div class="row row-xs-1 card--news--home_normal card--news--home_great">

						<?php while ( $SecondGreatQuery->have_posts() ) : $SecondGreatQuery->the_post(); ?>

							<?php if( $counterSecondGreat == 2 ) : ?>
								<div class="col-xs-12">
					        <div class="card card--news card--news--home" style="border-left: 6px solid <?= get_field('color_picker'); ?>;">
					        	<div class="card--news--home_container">
											<?php if ( get_the_post_thumbnail() ) : ?>
												<figure class="card--news--home_figure hide-xs show-md">
													<?php the_post_thumbnail(); ?>
												</figure>
											<?php endif; ?>
											<?php
									      $hex = get_field('color_picker');
									      list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
									    ?>

											<div class="card--news--home_content row middle-xs" style="background-color: rgba( <?= "$r, $g, $b"; ?>, .8 );">
												<article>
													<p class="entry-meta f-small hide-md"><?php the_time("j"); ?> de <?php the_time("F Y"); ?></p>
													<div class="hide-xs show-md">
														<div class="card--news--home_category f-small">
															<?= the_category( ' - ' ); ?>
														</div>
													</div>
													<h4 class="card--news--home_title center-md">
														<a href="<?php the_permalink(); ?>"><?= wp_html_excerpt( get_the_title(), 100, '...' ); ?></a>
													</h4>
													<div class="card--news--home_caption hide-xs show-md space-bottom"><?= wp_html_excerpt( get_the_content(), 115, '...' ); ?></div>
													<p class="f-small"><a href="<?php the_permalink(); ?>">Leer más ></a></p>
												</article>
											</div>
										</div>
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
							'compare' => 'NOT LIKE'
						)
					)
				);

				// get results
				$secondQuery = new WP_Query( $args );

				$countSecond = 1;

				// The Loop
				?>
				<?php if( $secondQuery->have_posts() ): ?>
					<div class="row row-xs-1 row-md-2 card--news--home_normal">

						<?php while ( $secondQuery->have_posts() ) : $secondQuery->the_post(); ?>

							<?php if( $countSecond > 2 && $countSecond <= 4 ) : ?>
								<div class="col-xs-12 col-md-6">
					        <div class="card card--news card--news--home" style="border-left: 6px solid <?= get_field('color_picker'); ?>;">
					        	<div class="card--news--home_container">
											<?php if ( get_the_post_thumbnail() ) : ?>
												<figure class="card--news--home_figure hide-xs show-md">
													<?php the_post_thumbnail(); ?>
												</figure>
											<?php endif; ?>
												<?php
										      $hex = get_field('color_picker');
										      list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
										    ?>

												<div class="card--news--home_content" style="background-color: rgba( <?= "$r, $g, $b"; ?>, .8 );">
													<p class="entry-meta f-small hide-md"><?php the_time("j"); ?> de <?php the_time("F Y"); ?></p>
													<div class="hide-xs show-md">
														<div class="card--news--home_category f-small">
															<?= the_category( ' - ' ); ?>
														</div>
													</div>
													<h4 class="card--news--home_title">
														<a href="<?php the_permalink(); ?>"><?= wp_html_excerpt( get_the_title(), 100, '...' ); ?></a>
													</h4>
													<div class="card--news--home_caption hide-xs show-md"><?= wp_html_excerpt( get_the_content(), 115, '...' ); ?></div>
													<p class="f-small"><a href="<?php the_permalink(); ?>">Leer más ></a></p>
												</div>
											</div>
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