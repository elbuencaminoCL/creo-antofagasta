
	<?php

		add_action( 'wp_ajax_nopriv_post_project_axis', 'post_project_axis' );
		add_action( 'wp_ajax_post_project_axis', 'post_project_axis' );

		function post_project_axis() {
			$args = array(
				'post_type' => 'project',
				'posts_per_page' => -1,
				'parent' => 418,
				'taxonomy' => 'category_projects'
			);

			$categories = get_categories( $args );

	?>

		<li class="project-content" data-project-content="projectAxis">

			<?php foreach($categories as $category) : ?>

			<h3 class="mg-bottom-15"><?= $category->name; ?></h3>
			<div class="row row-xs-1 row-sm-2 row-md-4">

			<?php
				$args = array(
					'post_type' => 'project',
					'posts_per_page' => -1,
					'tax_query' => array(
						array(
							'taxonomy' => 'category_projects',
							'field' => 'term_id',
							'terms' => $category->term_id
						)
					)
				);

				$query = new WP_Query( $args );
				if ( $query->have_posts() ) :
					while ( $query->have_posts() ) : $query->the_post();

		      $hex = get_field('clone_image_color');
		      list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");

			?>

					<div class="card-project col-xs-12 col-md-3 space-bottom row">
						<a href="<?php the_permalink(); ?>" class="card-project-link">
							<figure class="card-project-figure">
								<?php if( get_field( 'clone_banner_image' ) ) : ?>
									<img src="<?php the_field( 'clone_banner_image' ); ?>">
								<?php endif; ?>

								<div class="card-project-title" style="background-color: rgba( <?= "$r, $g, $b"; ?>, .8 );">
									<h5 class="f-white"><strong><?php the_title(); ?></strong></h5>
								</div>
							</figure>
						</a>
					</div>

				<?php
					endwhile;
				endif;
				?>
			</div>
			<?php
				endforeach;
			?>
		</li>
	<?php
			die();
		}
	?>