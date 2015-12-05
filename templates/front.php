<?php
/*
Template Name: Front
*/
get_header(); ?>

<header id="front-hero" role="banner">
	<div class="marketing">
		<div class="tagline">
			<h1><a href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			<h4 class="subheader"><?php bloginfo( 'description' ); ?></h4>
			<a role="button" class="download large button show-for-medium-up" href="https://github.com/TianFroehlich/cfcdesignsystem">Download CFCDesignsystem</a>
		</div>

		<div id="watch" class="small-12 columns">
			<section id="stargazers">
				<a href="https://github.com/TianFroehlich/cfcdesignsystem">1.5k stargazers</a>
			</section>
			<section id="twitter">
				<a href="https://twitter.com/TianFroehlich">@TianFroehlich</a>
			</section>
		</div>


		<div class="fpmock">
			<img data-interchange="[<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/fpmock.png, (default)]" alt="CFCDesignsystem - the ultimate WordPress starter theme">
		</div>
	</div>

</header>

	<div class="row">
		<?php get_template_part( 'parts/check-if-sidebar-exist' ); ?>
		<?php do_action( 'cfcdesignsystem_before_content' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<header>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>
				<?php do_action( 'cfcdesignsystem_page_before_entry_content' ); ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				<footer>
					<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'cfcdesignsystem' ), 'after' => '</p></nav>' ) ); ?>
					<p><?php the_tags(); ?></p>
				</footer>
				<?php do_action( 'cfcdesignsystem_page_before_comments' ); ?>
				<?php comments_template(); ?>
				<?php do_action( 'cfcdesignsystem_page_after_comments' ); ?>
			</article>
		<?php endwhile;?>

		<?php do_action( 'cfcdesignsystem_after_content' ); ?>

		</div>

	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
