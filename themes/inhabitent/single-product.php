<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

		<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="product-container">
		<div class="product-picture">
			<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
			<?php endif; ?>
		</div> <!-- product-picture -->

		<div class="product-content-wrapper">

		<div class="entry-content entry-content__p-product">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<p class="product-price"><?php echo CFS()->get( 'price' ); ?></p>
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
					'after'  => '</div>',
				) );
			?>

		<div class="social-buttons">
      <button type="social-btn"><i class="fab fa-facebook" aria-hidden="true"></i>Like</button>
      <button type="social-btn"><i class="fab fa-twitter" aria-hidden="true"></i>Twitter</button>
      <button type="social-btn"><i class="fab fa-pinterest" aria-hidden="true"></i>Pin</button>
    </div>
		</div><!-- entry content -->
		</div><!-- product-content-wrapper -->
		</div>
		<?php endwhile; // End of the loop. ?>


		<footer class="entry-footer">
			<?php red_starter_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php get_footer(); ?>
