<?php
/**
 * The template for displaying all single posts.
 *
 * @package inhabitent_theme_Theme
 */

get_header(); ?>

		<main id="blog-main" class="site-main" role="main">
     
		  <section class="single-blog-post">
			   <?php the_post_thumbnail('full');?>
	
     <h1 class="blog-post-title"> <?php the_title();?></h1>
		 

		<?php while ( have_posts() ) : the_post(); ?>
        
			<?php get_template_part( 'template-parts/content', 'single' ); ?>
  <div class="social-media-buttons">
	 <button><i class="fa fa-facebook"></i> Like</button>
	 <button><i class="fa fa-twitter"></i> Tweet</button>
	 <button><i class="fa fa-pinterest"></i> Pin</button>
  </div>
			<?php
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>
 </section>
	<?php get_sidebar(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>

