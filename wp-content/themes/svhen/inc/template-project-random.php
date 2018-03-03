
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

      $hex = get_field('clone_image_color');
      list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");

      $hexAlpha = "$r, $g, $b, .8"

	?>

			<li class="project-content" data-project-content="projectRandom">
				<div class="row row-xs-1 row-sm-2 row-md-4">
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>

						<div class="card-project col-xs-12 col-md-3 space-bottom row">
							<a href="<?php the_permalink(); ?>" class="card-project-link">
								<figure class="card-project-figure">
									<?php if( get_field( 'clone_banner_image' ) ) : ?>
										<img src="<?php the_field( 'clone_banner_image' ); ?>">
									<?php endif; ?>

									<div class="card-project-title" style="background-color: rgba( <?= ( $hex ) ? $hexAlpha : '237, 94, 92, .8'; ?> );">
										<h5 class="f-white"><strong><?php the_title(); ?></strong></h5>
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