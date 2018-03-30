<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package svhen
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post();?>

		<section>
			<figure class="banner-figure row middle-xs center-xs">
				<img src="<?php the_field( 'news_banner_image', 'options' ); ?>">
				<div class="news-banner" style="background-color: <?php the_field( 'news_banner_color', 'options' ); ?>">
					<div class="container">
						<div class="news-banner-title">
							<h1 class="f-white">Noticias</h1>
						</div>
					</div>
				</div>
			</figure>
		</section>

		<section class="section">
			<div class="container news-container">
				<?php get_template_part( 'content', get_post_type() ); ?>
			</div>
		</section><!-- #primary -->

	<?php endwhile; // End of the loop.?>


<?php
get_sidebar();
get_footer();
