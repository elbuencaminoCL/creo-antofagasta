
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
	<div>
		<figure class="banner-figure row middle-xs center-xs">
			<img src="<?php the_field( 'initial_banner_image' ); ?>">
			<div class="banner-content container">
				<h2><?php the_field( 'initial_banner_title' ); ?></h2>
				<p><?php the_field( 'initial_banner_subtitle' ); ?>
			</div>
		</figure>
	</div>
</section>
<!--====  End of Banner  ====-->


<section>
	<div class="center-xs">
		<h3><?php the_field( 'initial_title' ); ?></h3>
		<?php the_field( 'initial_desc' ); ?>
	</div>
</section>


<ul class="row">
	<li class="projectCity project-item project-item-is-active" data-project-select="projectCity">
		<p>Ciudades</p>
	</li>
	<li class="projectAxis project-item" data-project-select="projectAxis">
		<p>Ejes</p>
	</li>
	<li class="projectRandom project-item" data-project-select="projectRandom">
		<p>Aleatorio</p>
	</li>
</ul>

<ul id="projectWrap">
	<li class="project-content project-content-is-active" data-project-content="projectCity">
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

			<div class="row row-xs-1 row-md-2 space-bottom">
				<div class="col-xs-12 col-md-4" style="background-color: <?= $color; ?>">
					<figure>
						<img src="<?= $image; ?>" alt="Image Category" />
					</figure>
					<h3><?= $category->name; ?></h3>
					<p><?= $category->description; ?></p>
				</div>

				<div class="col-xs-12 col-md-8 row row-xs-1 row-md-3">
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

							<div class="col-xs-12 col-md-4 space-bottom">
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
		  		<?php endif; ?>
				</div>
			</div>

		 <?php endforeach; ?>
	</li>
</ul>

<?php get_footer(); ?>

