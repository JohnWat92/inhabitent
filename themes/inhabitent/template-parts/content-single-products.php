<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class = "singleContentWrapper">
		<header class="entry-header">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'large' ); ?>
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

			<span class = priceTag> <?php echo CFS()->get('price');?> </span>	
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
					'after'  => '</div>',
				) );
			?>
			<div class = "socialMediaButtons">
				<p><a href=""><i class = "fa fa-facebook"></i> like </a>
				<p><a href=""><i class = "fa fa-twitter"></i> tweet </a>
				<p><a href=""><i class = "fa fa-pinterest"></i> pin </a>
			</div>
		</div><!-- .entry-content -->
	</div>

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer> <!-- .entry-footer -->
</article><!-- #post-## -->
