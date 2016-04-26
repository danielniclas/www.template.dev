<?php get_header(); ?>

    <div class="container" role="main">

	    <div class="row">

	    	<div class="col-md-8">

			    <div class="page-header">	
			    	<h1><?php wp_title( '' ); ?></h1>
			    	<p class='red'> PHP Template File:  archive-portfolio-cpt.php </p>
			    	<p> To add 'portfoli-cpt' to menu had to use MENU > CUSTOM LINKS </p>
			    	<p> These are CPT UI (Custom Post Type UI) Postings - Not Part of the BLOG </p>
			    	<p> Archive Page > Custom Post Type > archive-$posttype.php > archive.php > index.php </p>



			    </div>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article class="post">
				    
			    	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

			    	<?php the_content(); ?>

				</article>
				<?php endwhile; endif; ?>


	    	</div>

	    	<?php get_sidebar( 'blog' ); ?>

	    </div>

    </div>

<?php get_footer(); ?>