<?php
    /**
    * Template Name: Master
    */
  get_header();
?>


<section>
	<?php if ( have_rows( 'banner_master_clone' ) ) : ?>
		<?php while ( have_rows( 'banner_master_clone' ) ) : the_row(); ?>

			<figure class="banner-figure row middle-xs center-xs">
				<img src="<?php the_sub_field( 'believe_banner_image' ); ?>">
				<div class="banner-content container">
					<h1 class="f-white space-bottom"><?php the_sub_field( 'believe_banner_title' ); ?></h1>
					<p class="f-white"><?php the_sub_field( 'believe_banner_desc' ); ?>
				</div>
			</figure>

		<?php endwhile; ?>
	<?php endif; ?>

	<section class="section">
		<div class="container">
			<div class="row row-xs-1 row-md-1">
				<div class="col-xs-12 col-md-12 center-xs">
					<h1 class="space-bottom"><?php the_field( 'content_master_title' ); ?></h1>
					<div class="space-bottom"><?php the_field( 'content_master_desc' ); ?></div>
					<div>
						<a href="<?php the_field( 'content_master_button_link' ); ?>" class="button"><?php the_field( 'content_master_button_text' ); ?></a>
					</div>
				</div>
			</div>
		</div>
	</section>



</section>


<?php get_footer(); ?>