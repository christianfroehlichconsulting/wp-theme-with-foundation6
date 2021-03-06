<?php
/**
 * The sidebar containing the main widget area
 *
 * @package CFCDesignsystem
 * @since CFCDesignsystem 1.0.0
 */

?>
<aside class="sidebar">
	<?php do_action( 'cfcdesignsystem_before_sidebar' ); ?>
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
	<?php do_action( 'cfcdesignsystem_after_sidebar' ); ?>
</aside>
