

<?php
/**
 * The template for displaying archive for the products post type (shop page).
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : ?>
            <header class="page-header">
                <?php
                       add_filter( 'get_the_archive_title', 'grd_custom_archive_title' );
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                        the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>
            </header>
            <div class = "container">
            <ul class="shop-flexbox">
                <section class="allproducts">
                <?php /* Start the Loop */ ?>
                
                <?php while ( have_posts() ) : the_post(); ?>
                    <li class="shop-product">
                        
                        <div class="archive-product">
                            <a href="<?php the_permalink();?>" ><?php the_post_thumbnail('large'); ?>
                            </a>
                        </div>
                                <div class="archive-info">
                            <div class = "productTitle">
                             <?php the_title(); ?>   
                            </div>
                            <div class ="dotStuff">
                                <p class = "dotBackground">.............................</p>
                            </div>
                            <div class = "priceTag">
                              <?php echo CFS()->get('price');?>
                            </div>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
            <?php the_posts_navigation(); ?>  
            <?php else : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
            <?php endif; ?>
                </section>
			</div>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>