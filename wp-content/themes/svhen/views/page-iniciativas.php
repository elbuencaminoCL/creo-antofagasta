
<?php
    /**
    * Template Name: Iniciativas
    */
  get_header();
?>


<!--============================
=            Banner            =
=============================-->
<section>
	<div>
		<figure class="banner-figure row middle-xs center-xs">
			<img src="<?php the_field( 'initial_banner_image' ); ?>">
			<div class="banner-content container">
				<h2><?php the_field( 'initial_banner_title' ); ?></h2>
				<p><?php the_field( 'initial_banner_subtitle' ); ?>
			</div>
		</figure>
	</div>
</section>
<!--====  End of Banner  ====-->


<section>
	<div class="center-xs">
		<h3><?php the_field( 'initial_title' ); ?></h3>
		<?php the_field( 'initial_desc' ); ?>
	</div>
</section>

<section>
	<!--==============================
	=            Ciudades            =
	===============================-->
	<div class="bg-purple">

	<?php $args = array(
		'post_type' => 'project',
		'posts_per_page' => -1,
		    'taxonomy' => 'category_projects',
		    'parent' => 417
	);
	$categories = get_categories( $args );
	foreach($categories as $category) :
    echo '<p>Category: <a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </p> ';
    echo '<p> Description:'. $category->description . '</p>';
    echo '<p> Post Count: '. $category->count . '</p>';

    	$args = array(
    	'post_type' => 'project',
    	'posts_per_page' => -1,
    	'tax_query' => array(
    	    array(
    	    'taxonomy' => 'category_projects',
    	    'field' => 'term_id',
    	    'terms' => $category->term_id
    	    )
    	  )
    	);

    	$query = new WP_Query( $args );

    	if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
    	<h5><?php the_title(); ?></h5>

    	<?php endwhile; ?>
    	<!-- post navigation -->
    	<?php else: ?>
    	<!-- no posts found -->
    	<?php endif; ?>

	 <?php endforeach; ?>


</div>
	<!--====  End of Ciudades  ====-->


	<!--==============================
	=            Ejes                =
	===============================-->
	<div class=""><?php $args = array(
		'post_type' => 'project',
		'posts_per_page' => -1,
		    'taxonomy' => 'category_projects',
		    'parent' => 418
	);
	$categories = get_categories( $args );
	foreach($categories as $category) :
    echo '<p>Category: <a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </p> ';
    echo '<p> Description:'. $category->description . '</p>';
    echo '<p> Post Count: '. $category->count . '</p>';

    	$args = array(
    	'post_type' => 'project',
    	'posts_per_page' => -1,
    	'tax_query' => array(
    	    array(
    	    'taxonomy' => 'category_projects',
    	    'field' => 'term_id',
    	    'terms' => $category->term_id
    	    )
    	  )
    	);

    	$query = new WP_Query( $args );

    	if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
    	<h5><?php the_title(); ?></h5>

    	<?php endwhile; ?>
    	<!-- post navigation -->
    	<?php else: ?>
    	<!-- no posts found -->
    	<?php endif; ?>

	 <?php endforeach; ?>
</div>
	<!--====  End of Ejes      ====-->


	<!--==============================
	=            Aleatorio           =
	===============================-->
	<div class="bg-purple"><?php
	$args = array(
	'post_type' => 'project',
	'posts_per_page' => -1,
	'orderby' => 'rand'
	);

	$query = new WP_Query( $args );

	if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
	<h5><?php the_title(); ?></h5>
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?>
</div>
	<!--====  End of Aleatorio  ====-->
</section>

<?php get_footer(); ?>


