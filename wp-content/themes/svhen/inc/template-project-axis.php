
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

		<li class="project-content" data-project-item="projectAxis">

			<?php foreach($categories as $category) : ?>

			<h3><?= $category->name; ?></h3>

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

					$color = get_field('clone_image_color');

			?>

					<figure <?= ($color) ? 'style="background-color: ' . $color . '"' : ''; ?> class="figure-project row middle-xs center-xs">

						<?php if( get_field( 'clone_banner_image' ) ) : ?>
							<img src="<?php the_field( 'clone_banner_image' ); ?>">
						<?php endif; ?>

							<div class="<?= ( get_field( 'clone_banner_image' ) ? 'banner-content' : '' ); ?> container">
								<h2><?php the_title(); ?></h2>
							</div>

					</figure>

					<?php
						endwhile;
					endif;
				endforeach;
			?>
		</li>
	<?php
			die();
		}
	?>