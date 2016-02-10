<?php if ( is_active_sidebar( 'blog' ) ) : ?>  

		<div id="blog" class="col-lg-3 col-md-4 col-xs-12">

		<?php dynamic_sidebar( 'blog' ); ?>

	</div>

	<?php else : ?>
 <?php /*?> 
DEFAULT CODE: 
<?php */?>

      <h3>Categories</h3>      
        <?php wp_list_categories('title_li='); ?>

      <h3>Archives</h3>      
        <?php wp_get_archives() ?>

	<?php endif; ?>