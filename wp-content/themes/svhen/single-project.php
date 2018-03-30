
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
			<h1 class="f-white"><?php the_field( 'clone_banner_title' ); ?></h1>
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
			<p class="space-top f-small">
				<a href="<?= home_url(); ?>" class="f-link no-border"><strong>Inicio</strong></a> /
				<a href="<?= home_url( 'iniciativas' ); ?>" class="f-link no-border"><strong>Iniciativas</strong></a> / <?php the_title(); ?>
			</p>
		</section>
		<!--====  End of Breadcrumb  ====-->

		<!--=======================================================
		=            Contenido de la columna izquierda            =
		========================================================-->
	  <div class="row row-xs-1 row-md-2">
			<div class="col-xs-12 col-md-8 project-col-left space-bottom">
				<section class="space-bottom">
					<h2 class="space-bottom"><?php the_field( 'clone_project_article_title' ); ?></h2>
					<?php the_field( 'clone_project_article_desc' ); ?>
				</section>

				<?php if( get_field( 'select_template' ) == 'projectSimple' ) : ?>
					<section class="space-bottom">
						<figure>
							<img src="<?php the_field( 'project_bus_image' ); ?>" class="project-bus-image">
						</figure>
					</section>
				<?php else :
	        endif;
	      ?>

				<!-- Card proyecto en cifras ( Una Columna ) -->
				<?php if( get_field( 'project_cypher_title' ) && get_field( 'project_cypher_desc' ) ) : ?>
		      <section class="space-bottom z-depth-1">
						<h3 class="project-data_title f-white" style="background-color: <?= $hex; ?>"><?php the_field( 'project_cypher_title' ); ?></h3>
						<div class="project-data_content"><?php the_field( 'project_cypher_desc' ); ?></div>
					</section>
				<?php endif; ?>

				<!-- Carrusel -->
				<?php if( get_field( 'select_template' ) == 'project' || get_field( 'select_template' ) == 'multiProject' ) : ?>
					<section class="project-carousel space-bottom hide-xs show-md">

						<?php if ( have_rows( 'project_carousel_repeater' ) ) : ?>
						  <?php while ( have_rows( 'project_carousel_repeater' ) ) : the_row(); ?>
						  	<figure class="project-carousel-figure">
							    <img class="mg-bottom-15" src="<?php the_sub_field( 'carousel_image' ); ?>"/>
							    <p><?php the_sub_field( 'carousel_desc' ); ?></p>
							  </figure>
						  <?php endwhile; ?>
						<?php endif; ?>

					</section>
				<?php else : endif; ?>

				<!-- Articulo -->
				<?php if( get_field( 'select_template' ) == 'multiProject' ) : ?>
					<section class="space-bottom">
						<h2 class="space-bottom"><?php the_field( 'clone_project_article_2_title' ); ?></h2>
						<?php the_field( 'clone_project_article_2_desc' ); ?>
					</section>
				<?php else : endif; ?>

				<section class="hide-xs show-md">
					<?php if ( have_rows( 'iframe_repeater' ) ) : ?>
						<?php while ( have_rows( 'iframe_repeater' ) ) : the_row(); ?>
							<div class="space-bottom">
								<iframe src="<?php the_sub_field( 'iframe_link' ); ?>" height="<?php the_sub_field( 'iframe_height' ); ?>" width="100%" frameborder="0"></iframe>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</section>

				<!-- Acordeón Sectores a Intervenir -->
				<?php if( get_field( 'select_template' ) == 'project' ) : ?>

					<section class="space-bottom">
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
														</div>

												  	<div class="col-xs-12 col-sm-6">
															<figure>
																<img src="<?php the_sub_field( 'accordion_image' ); ?>">
															</figure>
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
					</section>

				<?php else : endif; ?>


				<section><!-- Logotipo patrocinadores -->
					<div class="row row-xs-3 row-md-4 bottom-xs">
						<?php if ( have_rows( 'clone_sponsor' ) ) : ?>
							<?php while ( have_rows( 'clone_sponsor' ) ) : the_row(); ?>

								<?php if ( have_rows( 'gallery_repeater' ) ) : ?>
									<?php while ( have_rows( 'gallery_repeater' ) ) : the_row(); ?>
										<div class="col-xs-4 col-md-3">
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
				<!--  Noticias Relacionadas  -->
				<?php $posts_news = get_field('news_relation');
				if( $posts_news ): ?>
				<h2 class="mg-bottom-15">Noticias Relacionadas</h2>
					<?php foreach( $posts_news as $p ): ?>
						<div class="mg-bottom-15 card card--news card-border" style="border-left: 6px solid <?= get_field('clone_image_color'); ?>;">
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

				<?php
					if( get_field( 'poll_form' ) ) :
					if( get_field( 'select_template' ) == 'project' || get_field( 'select_template' ) == 'multiProject' ) : ?>
					<section><!-- Formulario Participa -->
						<div class="container pd-0">
							<div class="row row-xs-1 space-bottom">
								<h2 class="mg-bottom-15">Participa</h2>
								<div class="col-xs-12 bg-white pd-15 card-border form-contact-join">
									<?= do_shortcode( get_field( 'poll_form' ) ); ?>
								</div>
							</div>
						</div>
					</section><!-- /Formulario Participa -->
				<?php
					else :// no rows found
	        endif;
	        endif;
	      ?>

				<!--  Eventos Relacionados  -->
				<?php $posts_events = get_field('events_relation');
				if( $posts_events ): ?>
					<?php foreach( $posts_events as $p ): ?>
						<h2 class="mg-bottom-15">Calendario</h2>
						<div class="row row-xs-2 no-gutter space-bottom">
							<div class="col-xs-3 center-xs calendar-date pd-15">
								<?php
									$date = get_field( 'event_date', false, false, $p->ID );
									$date = new DateTime($date);
								?>

								<div class="F f-white">
									<p class="f-big"><strong><?= $date->format('j'); ?></strong></p>
									<p><?= $date->format('M'); ?></p>
								</div>
							</div>

							<div class="col-xs-9 calendar-event pd-15">
		    				<h5><?= get_the_title( $p ); ?></h5>
		    			</div>
		    		</div>
					<?php endforeach; ?>
				<?php endif; ?>
				<!--  Eventos Relacionados  -->

				<!--  Videos Relacionados  -->
				<?php $posts_videos = get_field('videos_relation');
				if( $posts_videos ): ?>
					<?php foreach( $posts_videos as $p ): ?>
						<h2 class="mg-bottom-15">Videos Relacionados</h2>
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
					<h2 class="mg-bottom-15">Documentos</h2>
					<?php foreach( $posts_documents as $p ): ?>
						<div class="bg-white pd-15 card-border mg-bottom-15">
							<div><a href="<?= get_permalink( $p ); ?>" class="f-news-link"><?= get_the_title( $p ); ?></a></div>
		    		</div>
					<?php endforeach; ?>
					<div class="end-xs space-bottom">
						<a href="#" class="f-news-link"><strong>Ver todos los documentos</strong></a>
					</div>
				<?php endif; ?>
				<!--  Documentos Relacionados  -->

				<!--  Redes Sociales  -->
				<div class="col-xs-12 ">
					<h2 class="mg-bottom-15">Compartir</h2>
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
		<?php
			if( get_field('project_relation') ) :
		?>
		<section class="pd-30-0" style="background-color: <?= $hex; ?>">
			<div class="container">
				<h2 class="f-white space-bottom">Otros Proyectos Relacionados</h2>
				<?php $posts = get_field('project_relation');
				if( $posts ): ?>
					<div class="row row-xs-1 row-sm-2 row-md-4">
						<?php foreach( $posts as $p ): ?>
					    <div class="col-xs-12 col-sm-6 col-md-3 space-bottom">
					    	<figure class="project-relation-figure">
						    	<a href="<?php echo get_permalink( $p ); ?>" class="project-relation-link">
						    		<h3 class="f-white"><?php echo get_the_title( $p ); ?></h3>
						    	</a>

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

		<?php endif; ?>
		<!--====  End of Proyectos Relacionados  ====-->

<?php get_footer(); ?>