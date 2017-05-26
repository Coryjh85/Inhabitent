<?php
/**
 * The main template file.
 *
 * @package inhabitent_theme
 */
 get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
     
		 <div class="container"> 
		<?php while ( have_posts() ) : the_post(); ?>

	    <div class="product-picture"> <?php the_post_thumbnail('full'); ?></div>
			<?php the_title();?>
      <?php echo CFS()->get( 'price' ); ?>
		<div class="product-listing">	<?php get_template_part( 'template-parts/content', 'single' ); ?></div>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>
      </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
