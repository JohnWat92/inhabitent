<?php
/*
 * Template Name: About Page
 *@package Inhabitent Theme
 * Description: Page template without sidebar
 */

get_header('home'); ?>

	<div id="primary" class="site-content">
		<main id="main" class="site-main" role="main">
                  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	                  <header class="entry-header">
		                  <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	                  </header><!-- .entry-header -->
      <div class= "belowHero">
            <div class = "container">
                  <h2>Our Story</h2>
                  <?php echo CFS()->get('about_our_story');?>
                  <h2>Our Team</h2>
                  <?php echo CFS()->get('about_our_team');?>
            </div>
      </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
