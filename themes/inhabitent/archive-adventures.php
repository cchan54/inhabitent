<?php
/**
 * This template is for the static adventures section of the front page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
			</header><!-- .page-header -->
            
            <div class="adventure-archive-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="archive-grid-item">
                        <?php get_template_part( 'template-parts/adventure', 'archive' ); ?>
                    </div>

                <?php endwhile; ?>
            </div>
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>