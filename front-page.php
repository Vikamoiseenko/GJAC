<?php get_header(); ?>
<!-- Begin flexslider -->
<?php add_flexslider(); ?>
<div class="row row-content">
<div class="col-lg-3 col-md-6 col-xs-6">
<section class="widgets-item">
<h2><a href="<?php echo get_permalink($post->post_parent); ?>">Captains</a></h2>
<?php
$page_id = 41;
$page_data = get_page ( $page_id );
$page_link = get_permalink ($page_id);
$content = $page_data->post_excerpt;
$title = $page_data->post_title;
?>
<p class="widgets-text">
<?php echo wp_trim_words($content, 35); ?>
</p>
<?php echo '<a href="'.$page_link.'" class="button">See more&nbsp;&raquo;</a>'
?>
</section>	
</div>	
<div class="col-lg-3 col-md-6 col-xs-6">
<section class="widgets-item">
	<h2><a href="<?php echo get_permalink($post->post_parent); ?>">Coaches</a></h2>
<?php
$page_id = 43;
$page_data = get_page ( $page_id );
$page_link = get_permalink ($page_id);
$content = $page_data->post_excerpt;
$title = $page_data->post_title;
?>
<p class="widgets-text">
<?php echo wp_trim_words($content, 35); ?>
</p>
<?php echo '<a href="'.$page_link.'" class="button">See more&nbsp;&raquo;</a>'
?>	
</section>	
</div>	
<div class="col-lg-3 col-md-6 col-xs-6">
<section class="widgets-item">
	<h2><a href="<?php echo get_permalink($post->post_parent); ?>">GTAC 2016</a></h2>
<?php
$page_id = 49;
$page_data = get_page ( $page_id );
$page_link = get_permalink ($page_id);
$content = $page_data->post_excerpt;
$title = $page_data->post_title;
?>
<p class="widgets-text">
<?php echo wp_trim_words($content, 35); ?>
</p>
<?php echo '<a href="'.$page_link.'" class="button">See more&nbsp;&raquo;</a>'
?>
</section>	
</div>	
<div class="col-lg-3 col-md-6 col-xs-6">
<section class="widgets-item">
	<h2><a href="<?php echo get_permalink($post->post_parent); ?>">PRESS</a></h2>
<?php
$page_id = 45;
$page_data = get_page ( $page_id );
$page_link = get_permalink ($page_id);
$content = $page_data->post_excerpt;
$title = $page_data->post_title;
?>
<p class="widgets-text">
<?php echo wp_trim_words($content, 35); ?>
</p>
<?php echo '<a href="'.$page_link.'" class="button">See more&nbsp;&raquo;</a>'
?>
</section>	
</div>	
</div><!-- end div.row -->
</div> <!-- end container -->
<?php get_footer(); ?>