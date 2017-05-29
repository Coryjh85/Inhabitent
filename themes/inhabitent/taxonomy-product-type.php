<?php
/**
 * The template for displaying archive pages.
 *
 * @package inhabitent_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="shop-header">
				
			

			

			<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?></header><!-- .page-header -->


				<?php /* Start the Loop */ ?>
	<div class="shop-main-container">


	<?php while ( have_posts() ) : the_post(); ?>
        <section class = "product"> <a class=".product-picture" href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium');?></a>
				<div class="product-text">
				<span class="product-title"><?php the_title();?> </span>
				<span class="dots"></span>
				<span class="product-price"><?php echo CFS()->get( 'price' );?></span></div>  </section>
			<?php endwhile; ?>
			


			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
      </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
