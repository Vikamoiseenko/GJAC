<?php get_header(); ?>
      <div id="main">
<!-- START CONTENT -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="content" class="single">
    <strong class="breadcrumb"><?php if (function_exists('bcn_display')) { bcn_display(); } ?></strong>
        <h2 class="single"><?php the_title(); ?></h2>     
<article class="single" id="single-item">
<div class="info">
<div class="dates">
<div class="month"><?php the_time('M') ?></div>
<div class="data"><?php the_time('j') ?></div>
</div><!-- end date div -->
<div class="headline">
<div class="heads-title"><?php the_title(); ?></div>
<div class="author">Authored by <?php the_author(); //get author name ?> with <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>| <?php the_category(', ') ?></div>
</div><!-- end headline div -->
</div><!-- end info div -->
</article>
<div class="wrap">
    <?php the_content('More &raquo;'); ?>
    <p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?>
    </p>
    </div>
		<nav class="post-nav">            
			<div class="alignleft"><?php previous_post_link('&laquo; %link', '%title', true) ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;', '%title', true) ?></div>
    </nav>
    
    <?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
	<?php comments_template(); ?>
    <?php endwhile; else: ?>
    <p>Sorry, we can't help you find your posts</p>
    <?php endif; ?>
</div>
<!-- END CONTENT -->


<!-- SECONDARY SIDEBAR -->
<?php get_sidebar('secondary'); ?>
          </div> <!-- END DIV MAIN -->


<!-- START BLOG SIDEBAR -->
<?php get_sidebar('blog'); ?>

<!-- FOOTER -->
<?php get_footer(); ?>