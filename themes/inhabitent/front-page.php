<?php
/**
 * The main template file.
 *
 * @package inhabitent_theme
 */
get_header(); ?>
<section class="main-hero">
				</section>
	<div id="primary" class="content-area">
		  
		<main id="main" class="site-main" role="main">
      
<div class="front-main-container">
	
			<h2>Shop Stuff</h2>
  	<div class="front-products">
			<ul class="shop-card-list">
				<?php 
					$categories = array(
						'taxonomy' 		=> 'product-type', 
						'hide_empty' 	=> true,
						);
					$terms = get_terms( $categories );
				?>
				
				<?php foreach ( $terms as $term ) :  ?>
					<li class="shop-card"> 
						
						<img class="front-shop-icon" src="<?php echo get_template_directory_uri(). "/assets/images/product-type-icons/" .$term->slug. ".svg" ?> ">
						<p class="front-shop-excerpt"><?php echo $term->description?></p>

						<a href="<?php echo get_term_link( $term ); ?>"> 
						
							<button class="front-shop-button">
								<?php echo $term->name . ' Stuff'?>
							</button>
						</a>

					</li>

				<?php endforeach; ?>
			</ul>
		</div>
	<!-- shop cards -->
<h2>Inhabitent Journal</h2>
		<?php if ( have_posts() ) : ?>
			<?php if (is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

		
		<div class="front-posts">	
			<?php 
            $the_query = new WP_Query( 'posts_per_page=3&order=ASC' );
            while ($the_query -> have_posts()) : $the_query -> the_post();
          ?>
            <div class = "post"> <?php the_post_thumbnail('medium') ?> <div class="front-post-date"><?php the_time('F jS, Y'); ?> / <?php comments_popup_link('0 comments ', '1 comment', '% comments'); ?></div>
						<h1 class="post-title-front"> <a href="<?php the_permalink() ?>"><?php the_title() ?></a> </h1><div class="front-blog-url"><a href="<?php the_permalink() ?>">Read Entry</a></div></div>
         
				  <?php
            endwhile;
            wp_reset_postdata();
          ?>


					<?php /* Start the Loop */ ?>
			
			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		</div>
      </div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
