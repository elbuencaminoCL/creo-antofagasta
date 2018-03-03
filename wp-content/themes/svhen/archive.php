<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package svhen
 */

get_header(); ?>

	<section class="section">
		<div class="container">

			<header class="page-header">
				<p class="f-small no-space">Categoría</p>
				<h2 class="space-bottom"><?php single_term_title(); ?></h2>
				<?php
					$uri = $_SERVER['REQUEST_URI'];
					$tmp = explode('/', $uri);
					$end = end(explode('/', rtrim($uri, '/')));
				?>
			</header><!-- .page-header -->

			<article class="space-bottom">
				<div class="card--news--home_normal">
					<?= do_shortcode( '[ajax_load_more post_type="post" posts_per_page="8" category="'. $end .'" transition_container_classes="row row-xs-1 row-sm-2 row-md-4"]' ); ?>
				</div>
			</article>

		</div>
	</section>

<?php
get_footer();
