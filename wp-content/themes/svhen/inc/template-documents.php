
	<?php

		add_action( 'wp_ajax_nopriv_post_document', 'post_document' );
		add_action( 'wp_ajax_post_document', 'post_document' );

		function post_document() {
			$documentID = $_POST['documentID'];

			$args = array(
			'post_type' => 'documents',
			'posts_per_page' => -1,
			'tax_query' => array(
					array(
						'taxonomy' => 'cat_doc',
						'field' => 'term_id',
						'terms' => $documentID
					)
				)
			);
			$query = new WP_Query( $args );
			if ( $query->have_posts() ) :

	?>

			<li class="documentContent" data-document-content="document-<?= $documentID; ?>">
				<?php
						while ( $query->have_posts() ) : $query->the_post();
				?>
					<div class="row row-xs-2 row-md-3 middle-xs doc-row">
						<div class="col-xs-4 col-md-3">
							<figure class="doc-figure">
								<img src="<?= get_the_post_thumbnail_url(); ?>">
							</figure>
						</div>
						<div class="col-xs-8 col-md-6">
							<h5><?php the_title(); ?></h5>
							<p class="f-small"><?= get_the_date(); ?></p>
							<em><?= $category->name; ?></em>
						</div>
						<div class="col-xs-12 col-md-3 end-md">
							<a href="<?php the_field('document_file'); ?>" target="_blank" class="button button-full-xs white">Descargar</a>
						</div>
					</div>
  			<?php endwhile; ?>
		 	</li>

	<?php
				endif;
			die();
		}

	?>