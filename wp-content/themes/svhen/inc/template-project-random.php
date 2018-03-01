
	<?php

		add_action( 'wp_ajax_nopriv_post_project_random', 'post_project_random' );
		add_action( 'wp_ajax_post_project_random', 'post_project_random' );

		function post_project_random() {
			$args = array(
				'post_type' => 'project',
				'posts_per_page' => -1,
				'orderby' => 'rand'
			);

			$query = new WP_Query( $args );
			if ( $query->have_posts() ) :

	?>

			<li class="project-content" data-project-content="projectRandom">
				<div class="row row-xs-1 row-sm-2 row-md-4">
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<?php $color = get_field('clone_image_color'); ?>


						<div class="col-xs-12 col-sm-6 col-md-3 space-bottom">
							<a href="<?php the_permalink() ?>">
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

					<?php endwhile; ?>
				</div>
			</li>

	<?php
				endif;
			die();
		}

	?>