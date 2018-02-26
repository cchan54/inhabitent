<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
                <h1 class="product-tax-title"><?php single_term_title(); ?></h1>
                <div class="product-tax-description"><?php echo term_description(); ?></div>
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
