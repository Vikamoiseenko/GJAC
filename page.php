<?php get_header(); ?>
<!-- START CONTENT -->
<div id="content" class="col-lg-9 col-md-8 col-xs-12">
    
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

	
<!--	<h2><?//php the_title(); ?></h2> -->
		<?php if ( has_post_thumbnail() ) {// check if the post has a Post Thumbnail assigned to it.
            the_post_thumbnail();
        } ?>
		<?php the_content(); ?>
 
	<?php endwhile; ?>
	<?php endif; ?>
    <?php //get_child_pages(); ?>
    
</div><!-- END CONTENT -->

<!-- START SIDEBAR -->

<?php get_sidebar( 'primary' ); ?>
</div>
</div>
<!-- END SIDEBAR -->
<small>page.php</small>
<?php get_footer(); ?>