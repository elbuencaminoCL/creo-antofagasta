
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
				<h1 class="f-white space-bottom"><?php the_field( 'library_banner_title' ); ?></h1>
				<p class="f-big f-white"><?php the_field( 'library_banner_subtitle' ); ?>
			</div>
		</figure>
	</div>
</section>
<!--====  End of Banner  ====-->

<section class="section">
	<div class="container">
		<ul class="hide-xs show-md row-i between-xs space-bottom">
			<?php $args = array(
				'post_type' => 'documents',
				'posts_per_page' => -1,
				'taxonomy' => 'cat_doc'
			);

				$categories = get_categories( $args );

			?>

			<li class="document-all documentItem document-item-is-active" data-document-select="document-all">
				<h3 class="F f-blue f-all cursor ">Todos</h3>
			</li>

			<?php
				foreach($categories as $category) :

	        $term = get_term_by( 'id', $category->term_id, 'category_projects' );
			?>

				<li class="f-blue F document-<?= $category->term_id; ?> documentItem" data-document-id="<?= $category->term_id; ?>"  data-document-load="false" data-document-select="document-<?= $category->term_id; ?>">
					<h3 class="F f-blue cursor"><?= $category->name; ?></h3>
				</li>

			<?php endforeach; ?>
		</ul>



		<ul class="hide-md row-md between-xs space-bottom">
			<?php $args = array(
				'post_type' => 'documents',
				'posts_per_page' => -1,
				'taxonomy' => 'cat_doc'
			);

				$categories = get_categories( $args );

			?>

			<div class="selectbox">
			  <h3 class="selectbox__selected f-pink-dark F" data-value="value 0">Todos</h3>
				<div class="selectbox__values">

					<li class="hide-xs show-md document-all documentItem document-item-is-active" data-document-select="document-all">
						<h3 class="F f-blue f-all cursor">Todos</h3>
					</li>

					<?php
						foreach($categories as $category) :

			        $term = get_term_by( 'id', $category->term_id, 'category_projects' );
					?>

						<li class="selectbox__item f-blue F document-<?= $category->term_id; ?> documentItem" data-document-id="<?= $category->term_id; ?>"  data-document-load="false" data-document-select="document-<?= $category->term_id; ?>">
							<h3 class="F f-blue"><?= $category->name; ?></h3>
						</li>

					<?php endforeach; ?>

					<li class="selectbox__item document-all documentItem document-item" data-document-select="document-all">
						<h3 class="F f-blue">Todos</h3>
					</li>
				</div>
			</div>
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
								<div class="row row-xs-2 row-sm-3 row-md-3 middle-xs doc-row">
									<div class="col-xs-5 col-sm-4 col-md-3">
										<figure class="doc-figure">
											<img src="<?= get_the_post_thumbnail_url(); ?>">
										</figure>
									</div>

									<div class="col-xs-7 col-sm-5 col-md-6">
										<h3><?php the_title(); ?></h3>
										<p class="f-small"><?= get_the_date(); ?></p>
										<em><?= $category->name; ?></em>
									</div>

									<div class="col-xs-12 col-sm-3 col-md-3 end-md">
										<a href="<?php the_field('document_file'); ?>" target="_blank" class="button button-full-xs white">Descargar</a>
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