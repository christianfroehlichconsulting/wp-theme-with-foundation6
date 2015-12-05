<?php
/**
 * The template for displaying all authorpages
 */
get_header ();
?>

<div class="row template-template-author">

	<div class="small-12 columns" role="main">

    <?php do_action( 'cfcdesignsystem_before_content' ); ?>

    
    <!-- This sets the $curauth variable -->

    <?php
				$curauth = (isset ( $_GET ['author_name'] )) ? get_user_by ( 'slug', $author_name ) : get_userdata ( intval ( $author ) );
				?>

    <h1><?php echo $curauth->nickname; ?></h1>

		<h2>Beiträge von <?php echo $curauth->nickname; ?>:</h2>

		<ul>
			<!-- The Loop -->

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <li><a href="<?php the_permalink() ?>" rel="bookmark"
				title="Permanent Link: <?php the_title(); ?>">
            <?php the_title(); ?></a>,
            <?php the_time('d M Y'); ?> in <?php the_category('&');?>
        </li>

    <?php endwhile; else: ?>
        <p><?php _e('No posts by this author.'); ?></p>

    <?php endif; ?>

<!-- End Loop -->

		</ul>

	</div>
</div>
<?php get_footer(); ?>
