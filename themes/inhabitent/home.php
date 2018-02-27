<?php
/**
 * The template for blog post index page and fall back for site front page.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>
    <div id="primary" class="content-area">
			<div class="entry-content">
        <main id="main" class="site-main" role="main">
				<?php if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h2 class="page-title screen-reader-text"><?php single_post_title(); ?></h2>
					</header>
				<?php endif; ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content' ); ?>

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>
				</main><!-- #main -->
			</div> <!--entry-content-->
			<?php get_sidebar(); ?>

	</div><!-- #primary -->
<?php get_footer(); ?>
