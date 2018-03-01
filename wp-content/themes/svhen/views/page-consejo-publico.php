<?php
    /**
    * Template Name: Consejo Público
    */
  get_header();


?>

<section class="container">
	<figure class="row middle-xs center-xs">
		<img src="<?php the_field( 'committe_banner_image' ); ?>" class="believe-banner-image">
		<div class="banner-content container">
			<h2><?php the_field( 'committe_banner_title' ); ?></h2>
		</div>
	</figure>

	<div class="row-xs-1 row-sm-1 row-md-1 bg-color-mintcream pd-30">
		<div class="col-xs-10 col-sm-8 col-md-6 mg-0-auto-i">
			<p><?php the_field( 'committe_banner_desc' ); ?></p>
		</div>
	</div>
</section>


<section class="container bg-color-azure pd-30">
	<div class="center-xs space-bottom">
		<h3><?php the_field( 'committe_title' ); ?></h3>
		<p><?php the_field( 'committe_desc' ); ?></p>
	</div>

	<div class="bg-color-mintcream pd-30">
		<div class="row row-xs-1 row-md-2">
			<?php if ( have_rows( 'committe_main_repeater' ) ) : ?>
				<?php while ( have_rows( 'committe_main_repeater' ) ) : the_row(); ?>

					<?php $hex = get_sub_field('integrant_main_color');
  				list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x"); ?>

					<div class="col-xs-12  col-md-6 space-bottom">
						<div class="row row-xs-2 no-gutter">
							<div class="col-xs-4">
								<figure class="row middle-xs member-figure">
									<img src="<?php the_sub_field( 'integrant_main_image' ); ?>" />
								</figure>
							</div>

							<div class="col-xs-8 f-white pd-15" style="background-color: rgba( <?= "$r, $g, $b"; ?>, .8 );">
								<p><?php the_sub_field( 'integrant_main_desc' ); ?></p>
								<p class="f-bigger"><?php the_sub_field( 'integrant_main_title' ); ?></p>
								<p><?php the_sub_field( 'integrant_main_subtitle' ); ?></p>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>

		<div class="row row-xs-2 row-md-4">
			<?php if ( have_rows( 'committe_repeater' ) ) : ?>
				<?php while ( have_rows( 'committe_repeater' ) ) : the_row(); ?>

					<?php $hex = get_sub_field('integrant_color');
  				list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x"); ?>

					<div class="col-xs-6 col-md-3 space-bottom">
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
