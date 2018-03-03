<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package svhen
 */

get_header(); ?>

	<section class="section">
		<div class="container">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'content', get_post_type() );


			endwhile; // End of the loop.
			?>

		</div>
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
