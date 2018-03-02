<?php
    /**
    * Template Name: ¿Qué es CREO?
    */
  get_header();


?>

<section>
	<figure class="row middle-xs center-xs">
		<img src="<?php the_field( 'believe_banner_image' ); ?>" class="believe-banner-image">
		<div class="banner-content container">
			<h2><?php the_field( 'believe_banner_title' ); ?></h2>
		</div>
	</figure>

	<div class="row-xs-1 row-sm-1 row-md-1 bg-mintcream pd-30">
		<div class="col-xs-10 col-sm-8 col-md-6 mg-0-auto-i">
			<p><?php the_field( 'believe_banner_desc' ); ?></p>
		</div>
	</div>
</section>


<section class="bg-azure pd-30">
	<div class="container">
		<div class="center-xs bg-azure pd-30">
			<h3><?php the_field( 'believe_about-us_title' ); ?></h3>
			<p><?php the_field( 'believe_about-us_desc' ); ?></p>
		</div>

		<div class="row row-sm-4 row-md-6 bg-mintcream pd-30">
			<?php if ( have_rows( 'about-us_repeater' ) ) : ?>
				<?php while ( have_rows( 'about-us_repeater' ) ) : the_row(); ?>

					<?php $hex = get_sub_field('about-us_member_color');
					list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x"); ?>

					<div class="col-xs-6 col-sm-3 col-md-2">
						<figure class="row middle-xs member-figure">
							<img src="<?php the_sub_field( 'about-us_member_image' ); ?>" />
							<div class="member-info" style="background-color: rgba( <?= "$r, $g, $b"; ?>, .8 );">
								<p><?php the_sub_field( 'about-us_member_title' ); ?></p>
								<p><?php the_sub_field( 'about-us_member_subtitle' ); ?></p>
								<p><?php the_sub_field( 'about-us_member_desc' ); ?></p>
							</div>
						</figure>
					</div>

				<?php endwhile; ?>
			<?php endif; ?>
		</div>

		<div class="center-xs pd-30">
			<h3><?php the_field( 'believe_experts_title' ); ?></h3>
			<p><?php the_field( 'believe_experts_desc' ); ?></p>
		</div>

		<div class="row row-xs-2 row-md-4 bg-mintcream pd-30">
			<?php if ( have_rows( 'experts_repeater' ) ) : ?>
				<?php while ( have_rows( 'experts_repeater' ) ) : the_row(); ?>

					<?php $hex = get_sub_field('experts_member_color');
					list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x"); ?>

					<div class="col-xs-6 col-md-3">
						<figure class="row middle-xs expert-figure">
							<img src="<?php the_sub_field( 'experts_member_image' ); ?>" />
							<div class="expert-info" style="background-color: rgba( <?= "$r, $g, $b"; ?>, .8 );">
								<p><?php the_sub_field( 'experts_member_desc' ); ?></p>
								<p><?php the_sub_field( 'experts_member_title' ); ?></p>
								<p><?php the_sub_field( 'experts_member_subtitle' ); ?></p>
							</div>
						</figure>
					</div>

				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>




<?php get_footer(); ?>
