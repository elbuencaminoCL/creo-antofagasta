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
	<div class="container">
		<p><?php the_field( 'believe_banner_desc' ); ?></p>
	</div>
</section>


<div>
	<section>
		<div class="container">
			<div class="center-xs">
				<h3><?php the_field( 'believe_about-us_title' ); ?></h3>
				<p><?php the_field( 'believe_about-us_desc' ); ?></p>
			</div>

			<div class="row row-xs-2 row-sm-4 row-md-6">

				<?php if ( have_rows( 'about-us_repeater' ) ) : ?>
					<?php while ( have_rows( 'about-us_repeater' ) ) : the_row(); ?>

						<div class="col-xs-6 col-sm-3 col-md-2">
							<figure class="row middle-xs memberImage-<?= $count; ?>">
								<img src="<?php the_sub_field( 'about-us_member_image' ); ?>" />
								<div class="infoMember">
									<p><?php the_sub_field( 'about-us_member_title' ); ?></p>
									<p><?php the_sub_field( 'about-us_member_subtitle' ); ?></p>
									<p><?php the_sub_field( 'about-us_member_desc' ); ?></p>
								</div>
							</figure>
						</div>

						<?php $hex = get_sub_field('about-us_member_color');
	  				list($r1, $g1, $b1) = sscanf($hex, "#%02x%02x%02x"); ?>

					<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</div>
	</section>


	<section>
		<div class="container">
			<div class="center-xs">
				<h3><?php the_field( 'believe_experts_title' ); ?></h3>
				<p><?php the_field( 'believe_experts_desc' ); ?></p>
			</div>

			<div class="row row-xs-2 row-md-4">

				<?php if ( have_rows( 'experts_repeater' ) ) : ?>
					<?php while ( have_rows( 'experts_repeater' ) ) : the_row(); ?>

						<div class="col-xs-6 col-md-3 col-parent">
							<figure class="row middle-xs expert-figure">
								<img src="<?php the_sub_field( 'experts_member_image' ); ?>" />
								<div class="infoExpert">
									<p><?php the_sub_field( 'experts_member_title' ); ?></p>
									<p><?php the_sub_field( 'experts_member_subtitle' ); ?></p>
									<p><?php the_sub_field( 'experts_member_desc' ); ?></p>
									<p><?php $hex = the_sub_field('experts_member_color'); list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x"); ?></p>
								</div>
							</figure>
						</div>

						<?php $hex = get_sub_field('experts_member_color');
	  				list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x"); ?>

					<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</div>
	</section>
</div>


<style type="text/css">

	.infoExpert:hover {

	}

	.col-parent .infoExpert:nth-child(even) {
	  background-color: red;
	}

/* 	.col-parent .infoExpert:hover:nth-child(even) {
  background-color: rgba( <?= "$r, $g, $b"; ?>, .8 );
} */

</style>

<?php get_footer(); ?>
