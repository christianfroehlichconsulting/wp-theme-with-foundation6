<?php
/*
Template Name: Full Width
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div id="page-full-width" role="main">

<?php do_action( 'cfcdesignsystem_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
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

<?php get_footer();
