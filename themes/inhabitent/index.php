<?php
/**
 * The main template file.
 *
 * @package inhabitent_theme_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_front_page() && ! is_home() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
		  
			<?php $the_query = new WP_Query( 'posts_per_page=16' );
			    while ( have_posts() ) : the_post(); ?>
        <section class = "blog-post"> <a class="blog-pic" href="<?php the_permalink() ?>"><?php the_post_thumbnail('large');?></a>
				<h1 class="blog-post-title"> <?php the_title();?></h1>
			<div class="author-date-comments"><?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?></div>
			</section>
				<h2 class="blog-post-excerpt"><?php the_excerpt();?> </h2>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

	

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
