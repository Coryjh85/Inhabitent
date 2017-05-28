<?php
/**
 * The template for displaying archive pages.
 *
 * @package inhabitent_theme
 */

 get_header();?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

	<header class="shop-header">
			<h2 class="page-title">Shop Stuff</h2>
			<!--<?php the_title( '<h1 class="page-title">', '</h1>' ); ?> -->
			<nav class="product-type">
				<ul class="product-type-nav">
					<?php $categories = array(
						'taxonomy' => 'product-type', 
						'hide_empty' => true,
						);
					$terms = get_terms( $categories );
					?>
					
					<?php foreach ( $terms as $term ) :  ?>
						<li class="indvid-product-type"> 
							<a href="<?php echo get_term_link( $term ); ?>"> 
								<?php echo $term->name ?>
							</a>
						</li>

					<?php endforeach; ?>
				</ul>
			</nav>

		</header><!-- .shop-header -->

		<?php /* Start the Loop */ ?>
			<div class="shop-main-container">



		<?php  while ( have_posts($products) ) : the_post(); ?>
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

 <?php get_footer();?>