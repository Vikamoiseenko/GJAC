<?php get_header(); ?>

<!-- START CONTENT -->
<div id="content" class="col-lg-12 col-md-12 col-xs-12">
<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>
<!--<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2> -->
<article class="blogs" id="blogs-item">
<div class="info">
<div class="dates">
<div class="month"><?php the_time('M') ?></div>
<div class="data"><?php the_time('j') ?></div>
</div><!-- end date div -->
<div class="headline">
<div class="head-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></div>
<div class="author">Authored by <?php the_author(); //get author name ?>| <?php the_category(', ') ?></div>
</div><!-- end headline div -->
</div><!-- end info div -->
</article>
<div class="wrap">
<p class="post-excerpt"><?php echo substr(get_the_excerpt(), 0,150); // get page or posting written excerpt with a character count ?>... <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Read More</a></p><?php edit_post_link('Edit this entry.', '<p><small>', '</small></p>'); ?>
</div>
    <?php endwhile; ?>
<nav class="post-nav">
            <p class="alignleft"><?php next_posts_link('&laquo; Older Posts') ?></p>
            <p class="alignright"><?php previous_posts_link('Newer Posts &raquo;') ?></p>
		</nav>
<?php endif; ?>
</div><!-- END CONTENT -->
</div>
<small>index.php</small>

<?php get_footer(); ?>