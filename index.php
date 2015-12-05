<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 */

get_header(); ?>

<div class="row">
	<?php get_template_part( 'php-parts/check-if-sidebar-exist' ); ?>

	<?php if ( have_posts() ) : ?>

		<?php do_action( 'cfcdesignsystem_before_content' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>

		<?php do_action( 'cfcdesignsystem_before_pagination' ); ?>

	<?php endif;?>



	<?php if ( function_exists( 'cfcdesignsystem_pagination' ) ) { cfcdesignsystem_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'cfcdesignsystem' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'cfcdesignsystem' ) ); ?></div>
		</nav>
	<?php } ?>

	<?php do_action( 'cfcdesignsystem_after_content' ); ?>

	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
