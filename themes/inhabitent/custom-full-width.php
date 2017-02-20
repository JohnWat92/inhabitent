<?php
/*
 * Template Name: Custom Full Width
 * Description: Page template without sidebar
 */

get_header(); ?>

	<div id="primary" class="site-content-fullwidth">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'custom' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
