<?php
/**
 * The main template file.
 *
 * @package inhabitent_theme
 */
 get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
 <div class="container"> 
	    <div class="single-product-picture"> <?php the_post_thumbnail('large');?></div>
			
			<div class="single-product-content">
			<h1><?php the_title();?></h1>
         <h2 class="single-product-price"><?php echo CFS()->get( 'price' ); ?></h2>
			<?php get_template_part( 'template-parts/content', 'single' ); ?>
       <span class="social-media-buttons">
	 <button><i class="fa fa-facebook"></i> Like</button>
	 <button><i class="fa fa-twitter"></i> Tweet</button>
	 <button><i class="fa fa-pinterest"></i> Pin</button>
  </span>

</container>
			

		<?php endwhile; // End of the loop. ?>
      </div>


<?php get_footer(); ?>
