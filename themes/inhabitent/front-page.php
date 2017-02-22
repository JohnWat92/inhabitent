<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
			<?php endwhile; // End of the loop. ?>

			<div class="journal-3">
       			<?php
					global $post;
					$args = array( 'posts_per_page' => 3, 'order'=> 'DSC', 'orderby' => 'post_date' );
					$postslist = get_posts( $args );
					foreach ( $postslist as $post ) :
  						setup_postdata( $post ); ?> 
    					<div class="a-post">
        					<?php if ( has_post_thumbnail() ) : ?>
           						<p href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
       							<?php the_post_thumbnail('medium'); ?>
           						</p>
							<?php endif; ?>
       					<?php the_date(); ?>
        				<br />
        				<?php the_title(); ?>   
						</div>
        <!--<?php the_attachment_link( $post->ID, false ); ?>-->
    <!--</div>-->
<?php
endforeach; 
wp_reset_postdata();
?>
                 
   </div>  
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
