
<?php
    /**
    * Template Name: Noticias
    */
  get_header();
?>

<section>
	<div class="container">
		<h1>Noticias</h1>
		<?= do_shortcode( '[ajax_load_more container_type="div" post_type="post" posts_per_page="4" scroll_distance="100"  transition_container_classes="row row-xs-1 row-sm-2 row-md-4" transition="slide" transition_speed="300"]' ); ?>
	</div>
</section>

<?php get_footer(); ?>

