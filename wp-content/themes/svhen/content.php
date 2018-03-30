<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sample
 */

?>

<div class="row row-xs-1 row-md-2 space-bottom">
	<div class="col-xs-12 col-md-9">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
				?>
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_content(); ?>
			</div><!-- .entry-content -->
		</article><!-- #post-<?php the_ID(); ?> -->
		<div class="hide-xs show-md">
			<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5"></div>
		</div>
	</div>

	<div class="col-xs-12 col-md-3">
		<div class="bg-white pd-15 card-border space-bottom">
			<h5 class="space-bottom">¿Quieres compartir tus actividades a la comunidad de Antofagasta?</h5>
			<a href="<?= home_url( 'contacto' ); ?>" class="button button-full-xs">Envíanos tu actividad</a>
		</div>
		<div class="hide-xs show-md">
			<?= do_shortcode( '[Sassy_Social_Share]' ); ?>
		</div>
	</div>
</div>