<?php
/**
 * Author: Christian Fröhlich
 * URL: http://christian.froehlich.consulting
 *
 * CFCDesignsystem functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package WordPress
 * @subpackage CFCDesignsystem
 * @since CFCDesignsystem 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add desktop menu walker */
require_once( 'library/menu-walker.php' );

/** Add off-canvas menu walker */
require_once( 'library/offcanvas-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Email Absender einstellen: */
add_filter( 'wp_mail_from_name', 'custom_wp_mail_from_name' );
function custom_wp_mail_from_name( $original_email_from ) {
	return 'Christian.Froehlich.Consulting Support';
}

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

//add hatom data
function add_mod_hatom_data($content) {
	$t = get_the_modified_time('F jS, Y');
	$author = get_the_author();
	$title = get_the_title();
	if ( is_single() || is_page()) {
		$content .= '<div class="hatom-extra show-for-sr"><span class="entry-title">'.$title.'</span> was last modified: <span class="updated"> '.$t.'</span> by <span class="author vcard"><span class="fn">'.$author.'</span></span></div>';
	}
	return $content;
}
add_filter('the_content', 'add_mod_hatom_data');

function add_google_fonts() {
	wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Megrim');
	wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Roboto+Slab');
	wp_enqueue_style( 'googleFonts');
}
add_action('wp_print_styles', 'add_google_fonts');
/** Add protocol relative theme assets */
require_once( 'library/protocol-relative-theme-assets.php' );

?>
