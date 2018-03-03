
<?php
    /**
    * Template Name: Noticias
    */
  get_header();
?>


<section class="section">
	<div class="container">
		<h1 class="space-bottom">Noticias</h1>
		<div class="card--news--home_normal">
			<?= do_shortcode( '[ajax_load_more container_type="div" post_type="post" posts_per_page="8" scroll_distance="100"  transition_container_classes="row row-xs-1 row-md-4" transition="slide" transition_speed="300"]' ); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>

