<?php get_header(); ?>

    <div class="container" role="main">

	    <div class="row">

	    	<div class="col-md-8">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
				    <div class="page-header">	
				    	<h1><?php the_title(); ?></h1>
				    	<p class='red'> PHP Template File:  front-page.php </p>
				    	<p> Appearance -> Customize -> Static Front Page -> front-page.php -> 'Home' (Menu Item) </p>
				    </div>

					<?php the_content(); ?>

				<?php endwhile; endif; ?>

	    	</div>

	    	<?php get_sidebar(); ?>

	    </div>

    </div>

<?php get_footer(); ?>