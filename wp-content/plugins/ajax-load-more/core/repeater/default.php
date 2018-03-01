
<div class="col-xs-12 col-sm-6 col-md-3 pd-10" style="background-color: <?php the_field( 'color_picker' ); ?>;">
<?php if (! has_post_thumbnail() ); ?>
<?php
if ( has_post_thumbnail() ) {
the_post_thumbnail('alm-thumbnail');
}
?>
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<p class="entry-meta">
<?php the_time("F d, Y"); ?>
</p>
<?php
echo wp_html_excerpt( get_the_content(), 115, '...' );
?>
<?= the_category( ' - ' ); ?>


</div>
