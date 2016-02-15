<div id="primary" class="col-lg-3 col-md-4 col-xs-12"><!--START SIDEBAR PRIMARY-->
 <!-- Begin Sub-Navigation -->
	<?php if (is_page()) : // if we are in "pages"... ?>
    <div class="row">
	<h2 class="primary" ><a class="sidebar" href="<?php echo get_permalink($post->post_parent); ?>">
        <?php echo get_the_title($post->post_parent); // ...get the gateway page title ?></a></h2>
	</div>	
    <ul class="sub-navigation-items"><?php 
    
    if ($post->post_parent) { // if the page has a parent...
        
        wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __(''))); // ...list the sub-pages with no title
        
    } else { // if the page does not have a parent...
    
        wp_list_pages(array('child_of' => $post->ID, 'title_li' => __(''))); // ...list the sub-pages with no title
     
    }
    
    ?></ul>
    <?php endif; // end if we are in "pages" ?>
    
    