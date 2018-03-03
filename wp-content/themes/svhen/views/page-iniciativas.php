
<?php
    /**
    * Template Name: Iniciativas
    */
  get_header();
?>


<!--============================
=            Banner            =
=============================-->
<section>
	<figure class="banner-figure row middle-xs center-xs">
		<img src="<?php the_field( 'initial_banner_image' ); ?>">
		<div class="banner-content container">
			<h2><?php the_field( 'initial_banner_title' ); ?></h2>
			<p class="f-white"><?php the_field( 'initial_banner_subtitle' ); ?>
		</div>
	</figure>
</section>
<!--====  End of Banner  ====-->

<div class="bg-gray-light-2 pd-bottom-60">
	<section class="section container">
		<div class="center-xs">
			<h1><?php the_field( 'initial_title' ); ?></h1>
			<?php the_field( 'initial_desc' ); ?>
		</div>
	</section>

	<div class="container initial-head z-depth-1">
		<ul class="row">
			<li class="">
				<p class="mg-bottom-0"><strong>Ordenar por:</strong></p>
			</li>

			<li class="initial-cat-radio projectCity project-item project-item-is-active" data-project-select="projectCity">
				<p class="mg-bottom-0">Ciudades</p>
			</li>

			<li class="initial-cat-radio projectAxis project-item" data-project-select="projectAxis">
				<p class="mg-bottom-0">Ejes</p>
			</li>

			<li class="initial-cat-radio projectRandom project-item" data-project-select="projectRandom">
				<p class="mg-bottom-0">Aleatorio</p>
			</li>
		</ul>
	</div>

	<div class="container initial-body bg-gray-light">
		<ul id="projectWrap">
			<li class="project-content project-content-is-active pd-top-60" data-project-content="projectCity">
				<?php $args = array(
					'post_type' => 'project',
					'posts_per_page' => -1,
					'parent' => 417,
					'taxonomy' => 'category_projects'
				);

					$categories = get_categories( $args );

					foreach($categories as $category) :

		        $term = get_term_by( 'id', $category->term_id, 'category_projects' );
		        $image = get_field('category_projects_image', $term);
		        $color = get_field('category_projects_color', $term);
				?>

					<div class="row row-xs-1 row-md-2 mg-bottom-90">
						<div class="col-xs-12 col-md-3 city-cat space-bottom center-xs" style="background-color: <?= $color; ?>">
							<figure class="city-ball-image center-xs">
								<img src="<?= $image; ?>" alt="Image Category"/>
							</figure>
							<h3 class="f-white mg-bottom-15"><?= $category->name; ?></h3>
							<p class="f-white"><?= $category->description; ?></p>
						</div>

						<div class="col-xs-12 col-md-9 row row-xs-1 row-md-3">
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

									<div class="card-project col-xs-12 col-md-4 space-bottom row">
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

				  			<?php endwhile; ?>
				  		<?php endif; ?>
						</div>
					</div>

				 <?php endforeach; ?>
			</li>
		</ul>
	</div>
</div>

<?php get_footer(); ?>


