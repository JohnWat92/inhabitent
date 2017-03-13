<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */
get_header('home'); ?>

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
						 
			<!--<?php

       $arg = array(
       'post_type' => 'adventures',
			 'order' => 'ASC',
       'taxonomy' => 'adventure_type');
       $adventures = get_posts( $arg ); // returns an array of posts

       ?>
			 <div class = "adventure-list">
       <?php foreach ( $adventures as $adventure ) : setup_postdata( $adventure ); ?>
			 <div class = "adventure-list-item">
				<?php echo get_the_post_thumbnail($adventure) ?>
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<a class="read-more" href="<?php echo get_permalink($adventure); ?>"> Read Entry </a>
			</div>
<?php endforeach; wp_reset_postdata(); ?>
		</div>-->

			<?php
					$loop = new WP_Query( array(
					'post_type' => 'adventures',
					'order' =>'ASC',
					'posts_per_page' => 4 ) );
			?>
			<section class = "adventureSection">
				<h2> Latest Adventures </h2>
				<ul class = "adventurePicture">
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<li>
				<div class="adventure-wrapper">
					<?php the_post_thumbnail();?>
					<div class="adventure-info">
						<!--<p><?php the_title(); ?></p>-->
						 <p class = "adventure-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<?php the_title(); ?></a></p>
						<a class ="adventure-read-more" href="<?php the_permalink(); ?>" type="button" class="black-button">Read More</a>
						<!--<a class="read-more" href="<?php echo get_permalink($adventure); ?>"> Read Entry </a>-->
					</div>
				</div>
			</li>
			<?php endwhile; ?>
			</ul>
			<a class="moreAdventures" href='<?php echo get_post_type_archive_link('adventures');?>'>More Adventures</a>
		</section>

   <!--</div>  
   </div>-->
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
