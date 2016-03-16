<?php get_header(); ?>

<!-- Begin Content -->
<div id="content" class="col-lg-9 col-md-9 col-xs-12">
    
    <article id="page-content-<?php the_ID(); ?>" class="page-content">    
    <h2>Search Results:</h2>
    <?php if (have_posts()) : ?>
    <p>Here's what we found for you...</p>
    <?php while (have_posts()) : the_post(); ?>
    <div class="page-excerpt" id="page-excerpt-<?php the_ID(); ?>">
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?>&nbsp;&raquo;</a></h3>
    <?php the_excerpt(); // page excerpts ?>
    <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">View &raquo;</a></p>
    </div>
    <?php endwhile; ?>
<nav class="post-nav">
            <p class="alignleft"><?php next_posts_link('&laquo; Older Posts') ?></p>
            <p class="alignright"><?php previous_posts_link('Newer Posts &raquo;') ?></p>
		</nav>
   	<section class="search-again">
    <p>Still not satisfied... Try another search?</p>
    <?php get_search_form(); ?>
    </section>
    <?php else : ?>
    <p>No posts found. Try a different search?</p>
    <?php get_search_form(); ?>
    <?php endif; ?> 
    </article>
    
</div>
<!-- End Content -->
<?php get_sidebar( 'primary' ); ?>
</div>
<?php get_footer(); ?>