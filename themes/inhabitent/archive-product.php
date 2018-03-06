<?php
get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
        <?php if ( have_posts() ) : ?>
            <header class="page-header">
            <section class="product-header-container">
                <h1>Shop Stuff</h1>
                <?php
                $terms = get_terms( array(
                    'taxonomy'   => 'product_type',
                    'hide_empty' => 0,
                ) );
                if ( ! empty( $terms ) ) :
                    ?>
                    <div class="product-tax">
                        <?php foreach ( $terms as $term ) :
                            ?>

                                    <a href="<?php echo get_term_link( $term ); ?>"
                                      class="product-type-links"><?php echo $term->name; ?></a>
                                </p>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </section>
                        
            </header><!-- .page-header -->
            <section class="product-grid">
            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>
                        <header class="entry-header">
						<div class="product-thumbnail-wrapper">
						<a href="<?php echo get_post_permalink() ?>"><?php the_post_thumbnail( 'large' ); ?></a>
						<?php if ( has_post_thumbnail() ) : ?>    
								<?php esc_url(get_permalink()) ?>
								<?php the_post_thumbnail( 'medium' ); ?>
						</div>

            <?php endif; ?>
						<div class="product-info">
            <h2 class="product-title"><?php the_title(); ?>................<span class="product-price"><?php echo CFS()->get( 'price' ); ?></span></h2>       		 </div>
    
                <?php if ( 'post' === get_post_type() ) : ?>
                    <div class="entry-meta-journal">
                        <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
                    </div><!-- .entry-meta -->
                        <?php endif; ?>
                    </header><!-- .entry-header -->
                    <div class="entry-content">
                    </div><!-- .entry-content -->
                    </article><!-- #post-## -->
            <?php endwhile; ?>
            <?php the_posts_navigation(); ?>
        <?php else : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
        <?php endif; ?>
					</section>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>
