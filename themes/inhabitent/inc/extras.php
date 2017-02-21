<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-text-dark.svg);
	    background-size: cover !important;
     margin-right: 50px !important; 
    width: 340px !important;
    height: 60px !important;
			/*echo get_template_directory_uri() ?>/images/logos/inhabitent-logo-text.svg" alt="Inhabitent Logo">*/
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
