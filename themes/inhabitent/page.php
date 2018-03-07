<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Starter_Theme
 */

get_header(); ?>
			<h2 class="title-text">Find Us</h2>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div>
			</div>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
			<?php get_sidebar(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
