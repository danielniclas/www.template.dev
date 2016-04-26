<?php 

/*
	Template Name: Full Width
*/

?>

<?php get_header(); ?>

    <div class="container" role="main">

	    <div class="row">

	    	<div class="col-md-12">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
				    <div class="page-header">	
				    	<h1><?php the_title(); ?></h1>
				    	<p class='red'> PHP CUSTOM TEMPLATE File:  page-full-width.php </p>
				    	<p> Template Name: Full Width </p>
				    	<p> Custom Template (Drop Down Menu) > page-$slug.php </p>
				    </div>


					<?php the_content(); ?>

				<?php endwhile; endif; ?>

	    	</div>
	    	

	    </div>

    </div>

<?php get_footer(); ?>