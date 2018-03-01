
<?php
    /**
    * Template Name: Biblioteca
    */
  get_header();
?>


<!--============================
=            Banner            =
=============================-->
<section>
	<div>
		<figure class="banner-figure row middle-xs center-xs">
			<img src="<?php the_field( 'library_banner_image' ); ?>">
			<div class="banner-content container">
				<h2><?php the_field( 'library_banner_title' ); ?></h2>
				<p><?php the_field( 'library_banner_subtitle' ); ?>
			</div>
		</figure>
	</div>
</section>
<!--====  End of Banner  ====-->

<section class="section">
	<div class="container">
		<ul class="row between-xs">
			<?php $args = array(
				'post_type' => 'documents',
				'posts_per_page' => -1,
				'taxonomy' => 'cat_doc'
			);

				$categories = get_categories( $args );

			?>

			<li class="document-all documentItem document-item-is-active" data-document-select="document-all">
				<p>Todos</p>
			</li>

			<?php
				foreach($categories as $category) :

	        $term = get_term_by( 'id', $category->term_id, 'category_projects' );
			?>

				<li class="document-<?= $category->term_id; ?> documentItem" data-document-id="<?= $category->term_id; ?>" data-document-load="false" data-document-select="document-<?= $category->term_id; ?>">
					<p><?= $category->name; ?></p>
				</li>

			<?php endforeach; ?>
		</ul>

		<ul id="documentWrap">
			<li class="documentContent document-content-is-active" data-document-content="document-all">

				<?php $args = array(
					'post_type' => 'documents',
					'posts_per_page' => -1,
					'taxonomy' => 'cat_doc'
				);

					$categories = get_categories( $args );

					foreach($categories as $category) :

		        $term = get_term_by( 'id', $category->term_id, 'category_projects' );
				?>

						<?php
							$args = array(
							'post_type' => 'documents',
							'posts_per_page' => -1,
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
						?>
								<div class="space-bottom row row-xs-2 row-md-3">
									<div class="col-xs-4 col-md-3">
										<figure>
											<img src="<?= get_the_post_thumbnail_url(); ?>">
										</figure>
									</div>
									<div class="col-xs-8 col-md-6">
										<h3><?php the_title(); ?></h3>
										<p><?= get_the_date(); ?></p>
										<em><?= $category->name; ?></em>
									</div>
									<div class="col-xs-12 col-md-3 end-md">
										<a href="<?php the_field('document_file'); ?>" target="_blank" class="button white">Descargar</a>
									</div>
								</div>
			  			<?php endwhile; ?>
			  		<?php endif; ?>


			 	<?php endforeach; ?>
		 	</li>
		</ul>
	</div>
</section>



<?php get_footer(); ?>