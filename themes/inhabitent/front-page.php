<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class = "heroContainer">
				<section class="home-hero">
					<img src="<?php echo get_template_directory_uri() ?>/images/logos/inhabitent-logo-full.svg" alt="Inhabitent Logo">
				</section>
			</div>
			<div class = "belowHero">
			<h2> Shop Stuff</h2>
			<section class = "shop-stuff container">
				<div class = "shop-container">
					<?php
						$terms = get_terms( array(
							'taxonomy' => 'product_type',
							'orderby' => 'name',
							'hide_empty' => 'false'
							) );
						foreach ($terms as $term):
						$url = get_term_link ($term->slug , 'product_type');
						?>
							<div class = "shop-stuff-icons">
								<div class = "product-icon-image">
									<img src="<?php echo get_template_directory_uri();?>/images/product-type-icons/<?php echo $term->slug; ?>.svg" alt="">
								</div>
								<p><?php echo $term->description;?></p>
								<a href='<?php echo $url?>' class='button-link'><?php echo $term->name ; ?><?php echo ' stuff';?></a>
							</div>
						<?php endforeach; ?>
				</div>
			</section>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>
			<?php endwhile; // End of the loop. ?>
			<h2> Inhabitent Journal</h2>
			<section class = "journal-entry container">
				<div class="journal-3">
					<?php
						global $post;
						$args = array( 'posts_per_page' => 3, 'order'=> 'DSC', 'orderby' => 'post_date' );
						$postslist = get_posts( $args );
						foreach ( $postslist as $post ) :
							setup_postdata( $post );
					?> 
					<div class="a-post">
						<?php if ( has_post_thumbnail() ) : ?>
							<div class = "a-post-image"><!--<p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"></a>-->
							<?php the_post_thumbnail('medium'); ?>
							</div>
							<!--</p>-->

							<div class ="a-post-info">
								<div class="entry-meta">
									<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
								</div>
								<p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<?php the_title(); ?>   </a></p>
								<div class = "journalExcerpt">
									<a href="<?php echo get_permalink(); ?>"> Read Entry</a>
								</div>
							</div>
						<?php endif; ?>
					<!--<?php the_date(); ?>
					<br />-->
					</div>
					<?php
					endforeach; 
					// wp_reset_postdata();
					?>
             </section>    
			 <!--<section class = "adventures">
				 <h2> Latest Adventures <h2>
				 <div class = "adventureImages">
					 <div class = "leftBox">
					 	 <div class = "longImage">
							 <img src="<?php echo get_template_directory_uri() ?>/images/adventure-photos/canoe-girl.jpg" alt="canoe-girl.jpg">
						 </div>
					 </div>
					 <div class = "rightBox">
						 <div class = "wideImage">
							 <img src="<?php echo get_template_directory_uri() ?>/images/adventure-photos/beach-bonfire.jpg" alt="beach-bonfire.jpg">
						 </div>
						 <div class = "rightBoxLeftImage squareImage">
							 <img src="<?php echo get_template_directory_uri() ?>/images/adventure-photos/mountain-hikers.jpg" alt="mountain-hikers.jpg">
						 </div>
						 <div class = "rightBoxRightImage squareImage">
							 <img src="<?php echo get_template_directory_uri() ?>/images/adventure-photos/night-sky.jpg" alt="night-sky.jpg">
						 </div>

					</div>
				 </div>
			</section>-->
				 <section class = "adventures">
				 <h2> Latest Adventures </h2>
				 <div class = "adventureImages">
					 <div class = "leftBox">
					 	 <div class = "longImage">
							  <div class = "longImageContent">
						  		<p class = "longImageText"> Getting Back to Nature in a Canoe </p>
						  		<a href=""> Read More</a>
							 </div>
							 

						 </div>
					 </div>
					 <div class = "rightBox">
						 <div class = "wideImage">
						 	<div class = "wideImageContent">
								<p class = "wideImageText"> A Night with Friends at the Beach </p>
								<a href=""> Read More</a>
							</div>
						 </div>
						 <div class = "rightBoxLeftImage squareImage">
							<div class = "squareImageContent">
								<p class = "squareImageText"> Taking in the View at Big Mountain </p>
								<a href=""> Read More</a>
							</div>
						 </div>
						 <div class = "rightBoxRightImage squareImage">
							 <div class = "squareImageContent">
								<p class = "squareImageText"> Star-Gazing at the Night Sky </p>
								<a href=""> Read More</a>
							 </div>
						 </div>
					</div>
				 </div>
				 	<p class = "moreAdventures">
					<a  href=""> More Adventures</a>
				</p>
			</section>
			

   <!--</div>  
   </div>-->
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
