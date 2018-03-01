<?php
    /**
    * Template Name: Consejo Público
    */
  get_header();


?>

<section>
	<figure class="row middle-xs center-xs">
		<img src="<?php the_field( 'committe_banner_image' ); ?>" class="believe-banner-image">
		<div class="banner-content container">
			<h2><?php the_field( 'committe_banner_title' ); ?></h2>
		</div>
	</figure>

	<div class="container">
		<p><?php the_field( 'committe_banner_desc' ); ?></p>
	</div>
</section>


<section>
	<div class="container">
		<div class="center-xs">
			<h3><?php the_field( 'committe_title' ); ?></h3>
			<p><?php the_field( 'committe_desc' ); ?></p>
		</div>
	</div>

	<div class="container">
		<div class="row row-xs-1 row-md-2">

			<?php if ( have_rows( 'committe_main_repeater' ) ) : ?>
				<?php while ( have_rows( 'committe_main_repeater' ) ) : the_row(); ?>

					<?php $hex = get_sub_field('integrant_main_color');
  				list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x"); ?>

					<div class="col-xs-12  col-md-6">
						<div class="row row-xs-2 no-gutter">
							<div class="col-xs-4">
								<figure class="row middle-xs member-figure">
									<img src="<?php the_sub_field( 'integrant_main_image' ); ?>" />
								</figure>
							</div>

							<div class="col-xs-8" style="background-color: rgba( <?= "$r, $g, $b"; ?>, .8 );">
								<p><?php the_sub_field( 'integrant_main_desc' ); ?></p>
								<p><?php the_sub_field( 'integrant_main_title' ); ?></p>
								<p><?php the_sub_field( 'integrant_main_subtitle' ); ?></p>
							</div>
						</div>
					</div>

				<?php endwhile; ?>
			<?php endif; ?>

		</div>
	</div>

	<div class="container">
		<div class="row row-xs-2 row-md-4">

			<?php if ( have_rows( 'committe_repeater' ) ) : ?>
				<?php while ( have_rows( 'committe_repeater' ) ) : the_row(); ?>

					<?php $hex = get_sub_field('integrant_color');
  				list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x"); ?>

					<div class="col-xs-6 col-md-3">
						<figure class="row middle-xs expert-figure">
							<img src="<?php the_sub_field( 'integrant_image' ); ?>" />
							<div class="expert-info" style="background-color: rgba( <?= "$r, $g, $b"; ?>, .8 );">
								<p><?php the_sub_field( 'integrant_desc' ); ?></p>
								<p><?php the_sub_field( 'integrant_title' ); ?></p>
								<p><?php the_sub_field( 'integrant_subtitle' ); ?></p>
							</div>
						</figure>
					</div>

				<?php endwhile; ?>
			<?php endif; ?>

		</div>
	</div>

</section>



<?php get_footer(); ?>
