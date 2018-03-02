<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package svhen
 */

get_header(); ?>


	<?php
	if ( have_posts() ) : ?>

		<section class="section">
			<div class="container">

				<header class="page-header">
					<h2><?php single_term_title(); ?></h2>
					<?php
						$uri = $_SERVER['REQUEST_URI'];
						$tmp = explode('/', $uri);
						$end = end(explode('/', rtrim($uri, '/')));
					?>
				</header><!-- .page-header -->

				<article class="space-bottom">
					<?= do_shortcode( '[ajax_load_more post_type="post" posts_per_page="4" category="'. $end .'" transition_container_classes="row row-xs-1 row-sm-2 row-md-4"]' ); ?>
				</article>

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.

					<article class="col-xs-12 col-sm-6 col-md-3 space-bottom">
		        <div style="background-color: <?= get_field( 'color_picker' ); ?>;">
							<?php
								if ( has_post_thumbnail() ) :
									the_post_thumbnail();
								endif;
							?>
							<?= the_category( ' - ' ); ?>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<p class="entry-meta"><?php the_time("F d, Y"); ?></p>

							<?= wp_html_excerpt( get_the_content(), 115, '...' ); ?>
							<p><a href="<?php the_permalink(); ?>">Leer más ></a></p>
						</div>
					</article>
					 */
					?>

						<?php endwhile;?>
					<?php endif; ?>
			</div>
		</section>

<?php
get_footer();
