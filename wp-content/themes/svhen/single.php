<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package svhen
 */

get_header(); ?>

	<div id="primary" class="content-area OOOOOOAAAAAAAAOOOOOO">
		<main id="main" class="site-main">

		<?php while ( have_posts() ) : the_post(); ?>

			<div class="container">
				<div class="row row-xs-1 row-md-2">
					<div class="col-xs-12 col-md-8">
						<?php the_content(); ?>
					</div>

					<div class="col-xs-12 col-md-4">
						<p><?php the_field( 'news_desc', 'option' ); ?></p>
						<a href="<?php the_field( 'news_button_link', 'option' ); ?>" class="button"><?php the_field( 'news_button', 'option' ); ?></a>
					</div>
				</div>
			</div>

		<?php endwhile; // End of the loop.?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
