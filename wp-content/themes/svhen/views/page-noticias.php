
<?php
    /**
    * Template Name: Noticias
    */
  get_header();
?>

	<?php echo do_shortcode( '[ajax_load_more container_type="div" post_type="post"]' ); ?>

<?php get_footer(); ?>