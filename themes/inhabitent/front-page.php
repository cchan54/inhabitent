<?php
/**
 * The template for displaying the front pages.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="front-page-hero">
				<img src"<?php echo get_site_url(); ?>/images/logos/inhabitent-logo-full.svg/">
			</section>
			<div class="product-shop container">
				<h2>Shop Stuff</h2>
  		</div>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
