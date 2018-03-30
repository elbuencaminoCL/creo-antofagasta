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
			<h1 class="f-white"><?php the_field( 'committe_banner_title' ); ?></h1>
		</div>
	</figure>

	<section class="bg-mintcream section">
		<div class="container">
			<div class="row-xs-1 row-sm-1">
				<div class="col-xs-12 col-sm-8 center-xs mg-0-auto-i">
					<p class="no-space"><?php the_field( 'committe_banner_desc' ); ?></p>
				</div>
			</div>
		</div>
	</section>
</section>


<section class="bg-azure pd-30">
	<div class="container">
		<div class="center-xs space-bottom">
			<h2 class="space-bottom"><?php the_field( 'committe_title' ); ?></h2>
			<p><?php the_field( 'committe_desc' ); ?></p>
		</div>

		<div class="bg-mintcream commite-main-row">
			<div class="row row-xs-1 row-md-2">
				<?php if ( have_rows( 'committe_main_repeater' ) ) : ?>
					<?php while ( have_rows( 'committe_main_repeater' ) ) : the_row(); ?>
						<?php $hex = get_sub_field('integrant_main_color');
	  				list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x"); ?>
						<div class="col-xs-12 col-md-6 space-bottom">
							<div class="row row-xs-1 row-sm-2 no-gutter member-main-row">
								<div class="col-xs-12 col-sm-4">
									<figure class="row middle-xs member-figure">
										<img src="<?php the_sub_field( 'integrant_main_image' ); ?>" />
									</figure>
								</div>

								<div class="col-xs-12 col-sm-8 f-white committe-col member-main member-main-col" style="background-color: rgba( <?= "$r, $g, $b"; ?>, .8 );">
									<p class="f-small mg-bottom-15"><?php the_sub_field( 'integrant_main_desc' ); ?></p>
									<div class="mg-top-60">
										<div class="name-down">
											<h3><?php the_sub_field( 'integrant_main_title' ); ?></h3>
											<p class="f-small"><?php the_sub_field( 'integrant_main_subtitle' ); ?></p>
										</div>
									</div>
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

						<div class="col-xs-6 col-md-3 space-bottom committe-col">
							<figure class="row middle-xs expert-figure">
								<img src="<?php the_sub_field( 'integrant_image' ); ?>" />
								<div class="expert-info" style="background-color: rgba( <?= "$r, $g, $b"; ?>, .8 );">
									<p class="f-small"><?php the_sub_field( 'integrant_desc' ); ?></p>
									<div class="name-down">
										<h3><?php the_sub_field( 'integrant_title' ); ?></h3>
										<p class="f-small"><?php the_sub_field( 'integrant_subtitle' ); ?></p>
									</div>
								</div>
							</figure>
						</div>

					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>
