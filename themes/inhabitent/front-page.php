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
					<img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg"/>
				</section>

				<!--Product Terms -->
				<section class="product-info-container">
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
											<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
												</div><!-- .entry-meta -->	

						<h3><a class="journal-title" href="<?php echo get_post_permalink() ?>"><?php the_title(); ?></a></h3>												
								<div class="entry-readmore link-button">
									<a href="<?php echo get_post_permalink()?>">Read Entry</a>
									</div><!-- .entry-wrapper -->
										</div><!-- .entry-readmore -->
        							</div><!-- .journal-recent-block-item -->

			<?php endforeach; wp_reset_postdata(); ?>

<!-- START OF LATEST ADVENTURES POSTS -->
      <div class="latest-adventures-container">
          <h2>Latest Adventures</h2>
          <div class="latest-adventures">
              <?php /* Start the Loop */ ?>
                  <?php
                      $args = array( 'post_type' => 'latest_adventures', 'order' => 'DESC', 'posts_per_page' => 4, 'orderby' => 'date' );
                      $adventure_posts = get_posts( $args ); // returns an array of posts
                  ?>
                  <?php foreach ( $adventure_posts as $post ) : setup_postdata( $post ); ?>
                      <div class="latest-adventures-block-item">
                          <div class="latest-adventures-wrapper">
														<?php if ( has_post_thumbnail() ) : ?>
														<?php the_post_thumbnail( 'large' ); ?></a>
														<?php endif; ?>  
                              <img src="<?php echo CFS()->get( 'adventure_header' ); ?>"/>
                              <div class="info-container">
                                  <h3><a class="latest-adventures-title" href="<?php echo get_post_permalink() ?>"><?php the_title(); ?></a></h3>
                                  <div class="entry-readmore link-button">
                                      <a href="<?php echo get_post_permalink()?>">Read More</a>
                                  </div><!-- .entry-readmore -->
                              </div>
                          </div><!-- .latest-adventures-wrapper -->
                      </div><!-- .latest-adventures-block-item -->
                  <?php endforeach; wp_reset_postdata(); ?>
          </div><!-- .most-recent-journals -->
          <div class="latest-adventures-readmore link-button">
              <a href="<?php echo get_post_type_archive_link( 'adventure' )?>">More Adventures</a>
          </div><!-- .entry-readmore -->
      </div><!-- .container -->

<?php get_footer(); ?>