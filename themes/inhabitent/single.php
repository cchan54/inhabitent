<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="entry-content">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<div class="social-buttons">
      <button type="social-btn"><i class="fab fa-facebook" aria-hidden="true"></i>Like</button>
      <button type="social-btn"><i class="fab fa-twitter" aria-hidden="true"></i>Twitter</button>
      <button type="social-btn"><i class="fab fa-pinterest" aria-hidden="true"></i>Pin</button>
    	</div>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>
		</main><!-- #main -->
		<?php get_sidebar(); ?>
		</div>
	</div><!-- #primary -->
<?php get_footer(); ?>
