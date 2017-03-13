

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
                        add_filter('get_the_archive_title', 'adventure_archive_title');
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                        the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>
            </header>
            <section class = "shop-category container">
                <div class = "category container">
                   
                </div>
	        </section>
            <div class = "container">
                <section class="allAdventures">
            <ul class="adventuresList">
                
                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <li class="latestAdventures">
                        <div class="archive-adventure-wrapper">
                            <a href="<?php the_permalink();?>" ><?php the_post_thumbnail(); ?>
                            </a>
                            <div class="adventure-info">
                                <div class = "adventureTitle">
                                <p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                    <?php the_title(); ?>   </a></p>
                                </div>
                                <a href="<?php the_permalink(); ?>" type="button" class="black-button">Read More</a>
                            </div>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
            <?php the_posts_navigation(); ?>  
            <?php else : ?>
            <?php get_template_part( 'template-parts/content', 'single-adventures' ); ?>
            <?php endif; ?>
                </section>
			</div>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>