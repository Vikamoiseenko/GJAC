<?php 
/*
Template Name: Sidebar
*/
?>

<?php get_header(); ?>
<div id="primary-group" class="col-lg-9 col-md-8 col-xs-12">                
<!-- START CONTENT -->
<div id="group-content" class="col-lg-8 col-md-8 col-xs-12">
    
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php if ( has_post_thumbnail() ) {// check if the post has a Post Thumbnail assigned to it.
            the_post_thumbnail();
        } ?>
		<?php the_content(); ?>
 
	<?php endwhile; ?>
	<?php endif; ?>
    <?php get_child_pages(); ?>
    
</div><!-- END CONTENT -->

<!-- START SIDEBAR -->

<?php get_sidebar( 'captains' ); ?>
</div><!-- END MAIN -->
<!-- Begin Dynamic Sidebar -->
<?php get_sidebar( 'primary' ); ?>
    <!-- End Dynamic Sidebar -->
</div>
<!-- END SIDEBAR -->

<?php get_footer(); ?>