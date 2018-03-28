
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
			<h1 class="f-white space-bottom"><?php the_field( 'initial_banner_title' ); ?></h1>
			<p class="f-white"><?php the_field( 'initial_banner_subtitle' ); ?>
		</div>
	</figure>
</section>
<!--====  End of Banner  ====-->

<div class="bg-gray-light-2 pd-bottom-60">
	<section class="section container">
		<div class="center-xs">
			<h1 class="space-bottom"><?php the_field( 'initial_title' ); ?></h1>
			<?php the_field( 'initial_desc' ); ?>
		</div>
	</section>

	<section class="section">
		<div class="container z-depth-1">
			<ul class="row middle-xs initial-head">

				<h3 class="hide-md mg-bottom-15"><strong>Ordenar por:</strong></h3>

				<div class="selectbox">
				  <p class="hide-md selectbox__selected mg-bottom-0 lh">Ciudades</p>
					<div class="selectbox__values row-md middle-xs">
						<li class="selectbox__item hide-xs show-md">
							<h3 class="mg-bottom-0"><strong>Ordenar por:</strong></h3>
						</li>

						<li class="selectbox__item initial-cat-radio projectCity project-item project-item-is-active document-all documentItem document-item-is-active" data-project-select="projectCity">
							<p class="f-white-hover mg-bottom-0">Ciudades</p>
						</li>

						<li class="selectbox__item initial-cat-radio projectAxis project-item document-all documentItem document-item-is-active" data-project-select="projectAxis">
							<p class="f-white-hover mg-bottom-0">Ejes</p>
						</li>

						<li class="selectbox__item initial-cat-radio projectRandom project-item document-all documentItem document-item-is-active" data-project-select="projectRandom">
							<p class="f-white-hover mg-bottom-0">Aleatorio</p>
						</li>
					</div>
				</div>

			</ul>
		</div>

		<div class="container bg-gray-light">
			<div class="initial-body ">
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
									<h2 class="f-white mg-bottom-15"><?= $category->name; ?></h2>
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
															<h3 class="f-white"><?php the_title(); ?></h3>
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
	</section>
</div>

<?php get_footer(); ?>


