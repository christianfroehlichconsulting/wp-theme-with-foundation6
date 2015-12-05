<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage CFCDesignsystem
 * @since CFCDesignsystem 1.0.0
 */

?>
<aside id="sidebar" class="small-12 large-4 columns large-pull-8">
	<?php do_action( 'cfcdesignsystem_before_sidebar' ); ?>
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
	<?php do_action( 'cfcdesignsystem_after_sidebar' ); ?>
</aside>
