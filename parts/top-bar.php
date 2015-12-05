<?php
/**
 * Template part for top bar menu
 *
 * @package WordPress
 * @subpackage CFCDesignsystem
 * @since CFCDesignsystem 1.0.0
 */

?>
<div class="top-bar-container contain-to-grid">
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area top-bar-<?php echo apply_filters( 'filter_mobile_nav_position', 'mobile_nav_position' ); ?>">
            <li class="name">
                <div><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></div>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
        </ul>
        <section class="top-bar-section">
            <?php cfcdesignsystem_top_bar_l(); ?>
            <?php cfcdesignsystem_top_bar_r(); ?>
        </section>
    </nav>
</div>