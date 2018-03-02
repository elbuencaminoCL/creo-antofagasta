
<?php
  get_header();

  $hex = get_field('clone_image_color');
  list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
?>

<style type="text/css">

	.banner-figure:before {
		background-color: rgba( <?= "$r, $g, $b"; ?>, .8 );
	}

</style>

<!--============================
=            Banner            =
=============================-->
<section>
	<figure class="banner-figure row middle-xs center-xs">
		<img src="<?php the_field( 'clone_banner_image' ); ?>">
		<div class="banner-content container">
			<h2><?php the_field( 'clone_banner_title' ); ?></h2>
		</div>
	</figure>
</section>
<!--====  End of Banner  ====-->

<section class="bg-gray-light-2 content-conatiner">
	<div class="container">
		<!--================================
		=            Breadcrumb            =
		=================================-->
		<section class="mg-bottom-15">
			<p class="space-top f-small">Inicio / Iniciativas / Ciudad de Mar / Parque Metropolitano Borde Costero</p>
		</section>
		<!--====  End of Breadcrumb  ====-->

		<!--=======================================================
		=            Contenido de la columna izquierda            =
		========================================================-->
	  <div class="row row-xs-1 row-md-2">
			<div class="col-xs-12 col-md-8 project-col-left">
				<section class="space-bottom"><!-- ¿De qué se trata este proyecto? -->
					<h3><?php the_field( 'clone_project_article_title' ); ?></h3>
					<?php the_field( 'clone_project_article_desc' ); ?>
				</section><!-- /¿De qué se trata este proyecto? -->

				<?php if( get_field( 'select_template' ) == 'project' ) : ?>
					<section class="space-bottom z-depth-1"><!-- Card proyecto en cifras -->
						<?php if ( have_rows( 'clone_project_cypher' ) ) : ?>
							<?php while ( have_rows( 'clone_project_cypher' ) ) : the_row(); ?>
								<h4 class="project-data_title f-white" style="background-color: <?= $hex; ?>"><?php the_sub_field( 'title' ); ?></h4>

								<div class="project-data_content">
									<?php if ( have_rows( 'content_repeater' ) ) : ?>
										<?php while ( have_rows( 'content_repeater' ) ) : the_row(); ?>
											<?php the_sub_field( 'content_subtitle' ); ?>
											<p><?php the_sub_field( 'content_desc' ); ?></p>
										<?php endwhile; ?>
									<?php endif; ?>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</section><!-- /Card proyecto en cifras -->
				<?php else :
	        endif;
	      ?>

				<?php if( get_field( 'select_template' ) == 'multiProject' ) : ?>
	      <section><!-- Card proyecto en cifras -->
	      	<div><?php if ( have_rows( 'clone_project_cypher' ) ) : ?>
	      		<?php while ( have_rows( 'clone_project_cypher' ) ) : the_row(); ?>
	      			<h2><?php the_sub_field( 'title' ); ?></h2>

	      			<?php if ( have_rows( 'content_repeater' ) ) : ?>
	      				<div class="row row-xs-1 row-md-2">
	      				<?php while ( have_rows( 'content_repeater' ) ) : the_row(); ?>
	      					<div class="col-xs-12 col-md-6">
	      						<p><?php the_sub_field( 'content_subtitle' ); ?></p>
	      						<h5><?php the_sub_field( 'content_desc' ); ?></h5>
	      					</div>
	      				<?php endwhile; ?>
	      				</div>
	      			<?php endif; ?>

	      		<?php endwhile; ?>
	      	<?php endif; ?></div>
	      </section><!-- /Card proyecto en cifras -->
				<?php
					else :
	        endif;
	      ?>

				<?php if( get_field( 'select_template' ) == 'project' || get_field( 'select_template' ) == 'multiProject' ) : ?>
					<section class="space-bottom"><!-- Carrusel -->
						<?php echo do_shortcode( get_field( 'carousel_short_code' ) ); ?>
					</section><!--====  End of Carrusel  ====-->
				<?php else :
	        endif;
	      ?>

				<?php if( get_field( 'select_template' ) == 'multiProject' ) : ?>
					<section><!-- Articulo -->
						<h3><?php the_field( 'clone_project_article_2_title' ); ?></h3>
						<?php the_field( 'clone_project_article_2_desc' ); ?>
					</section><!-- Articulo -->
				<?php
					else :
	        endif;
	      ?>

				<?php if( get_field( 'select_template' ) == 'project' ) : ?>
					<section class="space-bottom"><!-- Acordeón Sectores a Intervenir -->
						<h4>Sectores a Intervenir</h4>
						<div class="accordion" data-accordion>
							<?php if ( have_rows( 'clone_accordion' ) ) : ?>
								<?php $count = 1; ?>
								<?php while ( have_rows( 'clone_accordion' ) ) : the_row(); ?>
									<?php if ( have_rows( 'accordion_repeater' ) ) : ?>
										<?php while ( have_rows( 'accordion_repeater' ) ) : the_row(); ?>

											<li class="accordion-item <?= ($count == 1) ? 'is-active' : ''; ?>" data-accordion-item>
											  <!-- Accordion tab title -->
											  <a href="#" class="accordion-title main bg-dark-cyan f-white f-big"><?php the_sub_field( 'accordion_title' ); ?></a>

											  <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
											  <div class="accordion-content main" data-tab-content>
											  	<div class="row row-xs-1 row-sm-2">
												  	<div class="col-xs-12 col-sm-6">
															<p><?php the_sub_field( 'accordion_desc' ); ?></p>
															<p><?php the_sub_field( 'accordion_desc' ); ?></p>
															<p><?php the_sub_field( 'accordion_desc' ); ?></p>
														</div>

												  	<div class="col-xs-12 col-sm-6">
															<p><?php the_sub_field( 'accordion_desc' ); ?></p>
															<p><?php the_sub_field( 'accordion_desc' ); ?></p>
															<p><?php the_sub_field( 'accordion_desc' ); ?></p>
														</div>
													</div>
											  </div>
											</li>

										<?php $count ++; ?>
										<?php endwhile; ?>
									<?php endif; ?>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</section><!-- /Acordeón Sectores a Intervenir -->
				<?php
					else :// no rows found
	        endif;
	      ?>


				<section><!-- Logotipo patrocinadores -->
					<div class="row">
						<?php if ( have_rows( 'clone_sponsor' ) ) : ?>
							<?php while ( have_rows( 'clone_sponsor' ) ) : the_row(); ?>

								<?php if ( have_rows( 'gallery_repeater' ) ) : ?>
									<?php while ( have_rows( 'gallery_repeater' ) ) : the_row(); ?>
										<div class="">
											<p><?php the_sub_field( 'gallery_title' ); ?></p>
											<img src="<?php the_sub_field( 'gallery_image' ); ?>" class="sponsor-image">
										</div>
									<?php endwhile; ?>
								<?php endif; ?>

							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</section><!-- /Logotipo patrocinadores -->


			</div>
		  	<!--====  End of Contenido de la columna izquierda  ====-->



			<!--=========================================================
			=            Contenido de la columna derecha (sidebar)      =
			==========================================================-->
			<div class="col-xs-12 col-md-4">
				<h5>Noticias Relacionadas</h5>
				<!--  Noticias Relacionadas  -->
				<?php $posts_news = get_field('news_relation');
				if( $posts_news ): ?>
					<?php foreach( $posts_news as $p ): ?>
						<div class="mg-bottom-15 card card--news card-border">
							<p class="f-tiny"><?= get_the_date( 'd F Y', $p->ID ); ?></p>
				    	<a href="<?= get_permalink( $p ); ?>" class="f-news-link">
				    		<strong><?= get_the_title( $p ); ?></strong>
				    	</a>
				    </div>
					<?php endforeach; ?>
			    <div class="end-xs space-bottom">
			    	<a href="#" class="f-news-link"><strong>Ver Todas las Noticias</strong></a>
			    </div>
				<?php endif; ?>
				<!--  /Noticias Relacionadas  -->

				<section>
					<div class="container">
						<div class="row row-xs-1 space-bottom">
							<h5>Participa</h5>
							<div class="col-xs-12 bg-white pd-15 card-border">
								<?= do_shortcode( '[contact-form-7 id="9514" title="Formulario Participa"]' ); ?>
							</div>
						</div>
					</div>
				</section>

				<!--  Eventos Relacionados  -->
				<?php $posts_events = get_field('events_relation');
				if( $posts_events ): ?>
					<?php foreach( $posts_events as $p ): ?>
						<h5>Calendario</h5>
						<div class="row row-xs-2 no-gutter space-bottom card-border">
							<div class="col-xs-2 center-xs bg-gold pd-15">
								<p class="F f-white calendar-date"><strong><?php the_field( 'event_date', $p->ID ); ?></strong></p>
							</div>

							<div class="col-xs-10 bg-white pd-15">
		    				<a href="<?= get_permalink( $p ); ?>" class="f-news-link"><?= get_the_title( $p ); ?></a>
		    			</div>
		    		</div>
					<?php endforeach; ?>
				<?php endif; ?>
				<!--  Eventos Relacionados  -->

				<!--  Videos Relacionados  -->
				<?php $posts_videos = get_field('videos_relation');
				if( $posts_videos ): ?>
					<?php foreach( $posts_videos as $p ): ?>
						<div class="row row-xs-2 space-bottom bg-white pd-15 card-border">
							<div class="col-xs-6">
								<iframe width="100%" height="150" src="https://www.youtube.com/embed/<?php the_field( 'video_id', $p ); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>

							<div class="col-xs-6">
		    				<a href="<?= get_permalink( $p ); ?>" class="f-news-link"><?= get_the_title( $p ); ?></a>
		    			</div>
		    		</div>
					<?php endforeach; ?>
				<?php endif; ?>
				<!--  Videos Relacionados  -->

				<!--  Documentos Relacionados  -->
				<?php $posts_documents = get_field('documents_relation');
				if( $posts_documents ): ?>
					<?php foreach( $posts_documents as $p ): ?>
						<h5>Documentos</h5>
						<div class="bg-white pd-15 card-border mg-bottom-15">
							<div><a href="<?= get_permalink( $p ); ?>" class="f-news-link"><?= get_the_title( $p ); ?></a></div>
		    		</div>
					<?php endforeach; ?>
					<div class="end-xs space-bottom">
						<a href="#" class="f-news-link">Ver todos los documentos</a>
					</div>
				<?php endif; ?>
				<!--  Documentos Relacionados  -->

				<!--  Redes Sociales  -->
				<div class="col-xs-12 ">
					<h5>Compartir</h5>
					<?= do_shortcode( "[Sassy_Social_Share]" ); ?>
				</div>
				<!--  Redes Sociales  -->
			</div>
			<!--====  End of Contenido de la columna derecha (sidebar)  ====-->

		</div>
	</div>
</section>

		<!--============================================
		=            Proyectos Relacionados            =
		=============================================-->
		<section class="bg-dark-cyan pd-30-0">
			<div class="container">
				<h4 class="f-white">Otros Proyectos Relacionados</h4>
				<?php $posts = get_field('project_relation');
				if( $posts ): ?>
					<div class="row row-xs-1 row-md-4">
						<?php foreach( $posts as $p ): ?>
					    <div class="col-xs-12 col-md-3">
					    	<figure class="project-relation-figure">
						    	<a href="<?php echo get_permalink( $p ); ?>" class="project-relation-link"><?php echo get_the_title( $p ); ?></a>
						    	<a href="<?php echo get_permalink( $p ); ?>">
						    		<img src="<?= get_the_post_thumbnail_url( $p ); ?>">
						    	</a>
					    	</figure>
					    </div>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			</div>
		</section>
		<!--====  End of Proyectos Relacionados  ====-->


<?php get_footer(); ?>