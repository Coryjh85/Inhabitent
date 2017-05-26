<?php
/**
 *Template Name: About page
 *
 * @package inhabitent_theme
 */
get_header(); ?>
<section class="about_hero">
				</section>
	<div id="primary" class="content-area">
		
		<main id="about-main" class="about-main" role="about-main">
      
		<?php if ( have_posts() ) : ?>

			<?php if ( is_page()) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
<h2> Our Story </h2>

			<?php echo CFS()->get( 'our_story' );?>
			<h2> Our Team </h2>
      <?php echo CFS()->get( 'our_team' );?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
