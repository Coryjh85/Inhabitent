<?php
/**
 * The main template file.
 *
 * @package inhabitent_theme
 */
get_header(); ?>
 <section id="main-hero">
				</section>
	
		  
		<main id="main" class="site-main" role="main">
     
<div class="front-main-container">
		
			<h1>Shop Stuff</h1>
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
<h1>Inhabitent Journal</h1>
		<?php if ( have_posts() ) : ?>
			<?php if (is_front_page() ) : ?>
			
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			
			<?php endif; ?>

		
		<div class="front-posts">	
			<?php $the_query = new WP_Query( 'posts_per_page=3&order=ASC' );
        while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
           
				  <div class = "front-post"> <?php the_post_thumbnail('large') ?> 
					  <div class="front-post-date"><?php the_time('F jS, Y'); ?> / <?php comments_popup_link('0 comments ', '1 comment', '% comments'); ?>
						</div>
						<h2 class="front-post-title"> <a href="<?php the_permalink() ?>"><?php the_title() ?></a> </h2>
						<div class="front-blog-url"><a class="read-entry" href="<?php the_permalink() ?>">Read Entry</a>
					</div>
			 </div>
         


				  <?php
            endwhile;
						  wp_reset_postdata();?>
   
         

					<?php /* Start the Loop */ ?>
			
			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		</div>

		<h1>Latest Adventures</h1>
<ul class="adventure-feed-list">
	
			 <li class="indvid-adventure-box" >
						 <span class=" adventure-image-1"></span>
            <h1>Getting Back to Nature in a Canoe</h1>
					 <button>Read More</button>
				</li>
		
			 <li class="indvid-adventure-box">
						 <span class=" adventure-image-2"></span>
            <h1>A Night with Friends at the Beach</h1>
					  <button>Read More</button>
				</li>
			 <li class="indvid-adventure-box">
				     <span class=" adventure-image-3"></span>
            <h2>Star-Gazing at the Night Sky</h2>
					  <button>Read More</button>
				</li>
			 <li class="indvid-adventure-box">
						 <span class=" adventure-image-4"></span>
            <h2>Taking in the View at Big Mountain</h2>
            <button>Read More</button>
				</li>
    </ul> 
  </div>
</main><!-- #main -->
	<!-- #primary -->


<?php get_footer(); ?>
