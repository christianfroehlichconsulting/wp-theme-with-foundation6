<?php
/**
 * Change the class for sticky posts to .wp-sticky to avoid conflicts with Foundation's Sticky plugin
 *
 * @package CFCDesignsystem
 * @since CFCDesignsystem 2.2.0
 */

if ( ! function_exists( 'cfcdesignsystem_sticky_posts' ) ) :
function cfcdesignsystem_sticky_posts( $classes ) {
	if ( in_array( 'sticky', $classes, true ) ) {
	    $classes = array_diff($classes, array('sticky'));
	    $classes[] = 'wp-sticky';
	}
	return $classes;
}
add_filter('post_class','cfcdesignsystem_sticky_posts');

endif;
