<?php get_header(); ?>

<!-- START CONTENT -->
<div id="content" class="col-lg-9 col-md-9 col-xs-12">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
	<article class="post-box" id="post-box-<?php the_ID(); ?>">
    <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?>&nbsp;&raquo;</a></h2>
    <p class="postdata">Posted on <?php the_time('M j, Y') ?> in <?php the_category(', ') ?></p>
   
    <p class="read-more"><?php echo substr(get_the_excerpt(), 0,250); ?>...<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Read more &raquo;</a></p>
    </article>
<?php endwhile; ?>
<?php endif; ?>
	<nav class="post-navigation">
    <span class="post-navigation-previous"><?php previous_posts_link('&laquo; Newer Postings'); ?></span>
    <span class="post-navigation-next"><?php next_posts_link('Older Postings &raquo;'); ?></span>
	</nav>
</div><!-- END CONTENT -->
<!-- START SECONDARY SIDEBAR -->

<?php get_sidebar( 'secondary' ); ?>
</div><!--END DIV MAIN-->
    <!-- End Dynamic Sidebar -->
<!-- <small>index.php</small> -->

<?php get_footer(); ?>