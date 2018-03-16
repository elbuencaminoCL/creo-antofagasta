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
			<h1 class="f-white"><?php the_field( 'believe_banner_title' ); ?></h1>
		</div>
	</figure>

	<section class="bg-mintcream pd-30">
		<div class="container">
			<div class="row-xs-1 row-sm-1">
				<div class="col-xs-10 col-sm-8 mg-0-auto-i center-xs">
					<p><?php the_field( 'believe_banner_desc' ); ?></p>
				</div>
			</div>
		</div>
	</section>
</section>


<section class="bg-azure pd-30">
	<div class="container ">
		<div class="center-xs bg-azure pd-30">
			<h2 class="space-bottom"><?php the_field( 'believe_about-us_title' ); ?></h2>
			<p><?php the_field( 'believe_about-us_desc' ); ?></p>
		</div>

		<?php
			$customer_reviews = get_field('about-us_repeater');
			shuffle($customer_reviews); // magic happens here :)
		?>

		<div class="row row-xs-2 row-md-6 bg-mintcream about-us-member-row">
			<?php if( have_rows('about-us_repeater') ):

				foreach( $customer_reviews as $customer_review ):
					$review_title = $customer_review['about-us_member_title'];
					$review_description = $customer_review['about-us_member_subtitle'];
					$review_img = $customer_review['about-us_member_image'];
					$hex = $customer_review['about-us_member_color'];
					list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
			?>

			<div class="col-xs-6 col-md-2 space-bottom">
				<figure class="row middle-xs member-figure">
					<img src="<?php echo $review_img; ?>"/>
					<div class="member-info" style="background-color: rgba( <?= "$r, $g, $b"; ?>, .8 );">
						<div class="name-down">
							<h3><?php echo $review_title; ?></h3>
							<p class="f-small"><?php echo $review_description; ?></p>
						</div>
					</div>
				</figure>
			</div>

			<?php
				endforeach;
				endif;
			?>
		</div>





		<div class="center-xs pd-30">
			<h2 class="space-bottom"><?php the_field( 'believe_experts_title' ); ?></h2>
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
								<p class="f-small"><?php the_sub_field( 'experts_member_desc' ); ?></p>
								<div class="name-down">
									<h3><?php the_sub_field( 'experts_member_title' ); ?></h3>
									<p class="f-small"><?php the_sub_field( 'experts_member_subtitle' ); ?></p>
								</div>
							</div>
						</figure>
					</div>

				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>




<?php get_footer(); ?>
