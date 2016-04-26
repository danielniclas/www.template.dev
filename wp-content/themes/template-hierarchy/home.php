<?php get_header(); ?>

    <div class="container" role="main">

	    <div class="row">

	    	<div class="col-md-8">

			    <div class="page-header">	
			    	<h1><?php wp_title( '' ); ?></h1>
			    	<p class='red'> PHP Template File:  home.php </p>
			    	<p> Blog Posts Index Page > home.php > index.php </p>
			    	<p> Appearance -> Customize -> Static Front Page -> home.php (Posts Page) -> 'Blog' (Menu Item) </p>
			    	<p> home.php template controls what the BLOG LISTING page looks like </p>


			    </div>

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article class="post">
				    
			    	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

			    	<?php if( has_post_format( 'image' )): ?>

			    		<?php the_post_thumbnail('medium'); ?>

			    	<?php elseif ( has_post_format( 'quote' )): ?>

			    		<blockquote>
							<?php the_excerpt(); ?>
			    		</blockquote>

			    	<?php else: ?>

						<?php the_excerpt(); ?>

					<?php endif; ?>


			    	<p class="meta">
			    		By <?php the_author_posts_link(); ?> 
			    		on <?php echo the_time('l, F jS, Y'); ?> 
			    		<a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
					</p>

				</article>
				<?php endwhile; endif; ?>


	    	</div>

	    	<?php get_sidebar( 'blog' ); ?>
	    	<p> Insert sidebar:  "get_sidebar( 'blog' )" -> sidebar-blog.php </p>

	    </div>

    </div>

<?php get_footer(); ?>