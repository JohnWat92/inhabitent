<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="home-hero">
				<img src="<?php echo get_template_directory_uri() ?>/images/logos/inhabitent-logo-full.svg" alt="Inhabitent Logo">
			</div>
	<div class = "shop-container">
		<?php
			$terms = get_terms( array(
    			'taxonomy' => 'product_type',
   				 'orderby' => 'name',) );
			foreach ($terms as $term):
			$url = get_term_link ($term->slug, 'product_type');
		?>
		
		<div class = "shop-stuff-icons">
			<div class = "product-icon-image">
				<img src="<?php echo get_template_directory_uri();?>/images/product-type-icons/<?php echo $term->slug; ?>.svg" alt="">
			</div>
			<p><?php echo $term->description;?></p>
			<a href='<?php echo $url?>' class='button-link'><?php echo $term->name; ?></a>
		</div>
	<?php endforeach; ?>
	</div>


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
    </div>
<?php
endforeach; 
wp_reset_postdata();
?>
                 
   </div>  
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
