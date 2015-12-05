<?php
/**
 * The sidebar containing the main widget area
 */

?>
<aside id="sidebar" class="small-12 large-4 columns">
	<?php do_action( 'cfcdesignsystem_before_sidebar' ); ?>
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
	<?php do_action( 'cfcdesignsystem_after_sidebar' ); ?>
</aside>
