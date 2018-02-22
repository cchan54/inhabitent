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

				<!--Product Terms -->
				<section class="product-info container">
						<h2>Shop Stuff</h2>	
					<?php
				$terms = get_terms( array(
						'taxonomy'   => 'product_type',
						'hide_empty' => 0,
				) );

				if ( ! empty( $terms ) ) :
						?>
						<div class="product-type-blocks">
								<?php foreach ( $terms as $term ) :?>
										<div class="product-type-block-wrapper">
												<img src="<?php echo get_template_directory_uri() . '/images/' . $term->slug; ?>.svg"
														 alt="<?php echo $term->name; ?>"/>
												<p><?php echo $term->description; ?></p>
												<p>
														<a href="<?php echo get_term_link( $term ); ?>"
															class="btn"><?php echo $term->name; ?> Stuff</a>
												</p>
										</div>
								<?php endforeach; ?>
						</div>
				<?php endif; ?>
		</section>

			<section class="latest-entries">
					<div class="container">
						
						</div><!-- .entry-meta -->
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php endwhile; // End of the loop. ?>

			</main><!-- #main -->

		</div><!-- #primary -->
		<section class="latest-entries">
			<h2>Inhabitent Journal</h2>
			<div class="most-recent-journals">
				<?php
					$args = array( 'post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => 3, 'orderby' => 'date' );
						$journal_posts = get_posts( $args ); // returns an array of posts
				?>
			<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
			<div class="journal-recent-block-item">
					<div class="journal-thumbnail-wrapper">
							<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'large' ); ?></a>
										<?php endif; ?>     
											</div>
										<div class="entry-wrapper">
									<div class="entry-meta">
								<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_on(); ?>
							</div><!-- .entry-meta -->	
																				
						<h3><a class="journal-title" href="<?php echo get_post_permalink() ?>"><?php the_title(); ?></a></h3>
																				
							</div><!-- .entry-wrapper -->
								<div class="entry-readmore link-button">
									<a href="<?php echo get_post_permalink()?>">Read Entry</a>
						</div><!-- .entry-readmore -->
        </div><!-- .journal-recent-block-item -->

		<?php endforeach; wp_reset_postdata(); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
