<?php
/**
 * The template for displaying the front pages.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

	<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<?php the_archive_title('<h1 class="page-title">', '</h1>')//the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
			<?php 
				$args = array( 'post_type' => 'product-type' );
				$terms = get_terms( $args );
			?>

			<div class="product-stuff-links">
				<?php foreach ($terms as $term): ; ?>
				<a href="<?php echo get_site_url(); ?>/<?php echo $term->taxonomy; ?>/<?php echo $term->slug; ?>"><?php echo $term->name; ?></a>
				<?php endforeach; ?>
			</div>
		</header><!-- .page-header -->

					<?php /* Start the Loop */ ?>
					
					<div class="product-archive-grid">
							<?php while ( have_posts() ) : the_post(); ?>
									<div class="product-grid-item">
											<?php
													get_template_part( 'template-parts/product', 'archive' );
											?>
									</div>

							<?php endwhile; ?>
					</div>
	<?php else : ?>

		<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>