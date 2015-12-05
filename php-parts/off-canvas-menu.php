<?php
/**
 * Template part for off canvas menu
 *
 * @package WordPress
 * @subpackage CFCDesignsystem
 * @since CFCDesignsystem 1.0.0
 */

?>

<nav class="tab-bar">
  <section class="<?php echo apply_filters( 'filter_mobile_nav_position', 'mobile_nav_position' ); ?>-small">
    <a class="<?php echo apply_filters( 'filter_mobile_nav_position', 'mobile_nav_position' ); ?>-off-canvas-toggle menu-icon" href="#"><span></span></a>
  </section>
  <section class="middle tab-bar-section">

    <div class="title">
      <?php bloginfo( 'name' ); ?>
    </div>

  </section>
</nav>

<aside class="<?php echo apply_filters( 'filter_mobile_nav_position', 'mobile_nav_position' ); ?>-off-canvas-menu" aria-hidden="true">
    <?php cfcdesignsystem_mobile_off_canvas( apply_filters('filter_mobile_nav_position', 'mobile_nav_position') ); ?>
</aside>
