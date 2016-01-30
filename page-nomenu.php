<?php
/*
Template Name: No Menu
*/
?>

<?php get_header(); ?>

<!-- START CONTENT -->
<div id="page-content" class="page">
    
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

		<h2><?php the_title(); ?></h2>
        
		<?php if ( has_post_thumbnail() ) {// check if the post has a Post Thumbnail assigned to it.
            the_post_thumbnail();
        } ?>
		<?php the_content(); ?>
 
	<?php endwhile; ?>
	<?php endif; ?>
    
    
</div><!-- END CONTENT -->

<!-- START SIDEBAR -->

<?//php get_sidebar( 'secondary' ); ?>
</div><!-- END MAIN -->
<?//php get_sidebar( 'primary' ); ?>

<!-- END SIDEBAR -->

<?php get_footer(); ?>