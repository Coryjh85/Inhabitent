<?php
/**
 * The main template file.
 *
 * @package inhabitent_theme_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		  
		<main id="main" class="site-main" role="main">
      <section class="front-hero">
				</section>
		<?php if ( have_posts() ) : ?>

			<?php if (is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php
$args = array(
	'numberposts' => 10,
);
$front_page_blog_posts = get_posts($args);?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>