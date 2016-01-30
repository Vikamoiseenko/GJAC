<?php if ( is_active_sidebar( 'secondary' ) ) : ?> <!--START SIDEBAR SECONDARY-->  


		<div id="secondary" class="sidebar">

		<?php dynamic_sidebar( 'secondary' ); ?>

	</div>

	<?php else : ?>
 <?php /*?> 
DEFAULT CODE: 
<?php */?>
        <!-- Categories -->
		<ul>
        <h3>Events Calendar</h3>      
        <?php get_links_list(); ?>
		</ul>
    	<!-- End Calendar -->

        <!-- Twitter Feed -->
        <ul>
            <h3>Twitter</h3>
			<?php wp_list_categories('title_li='); ?>
		</ul>
        <!-- END Twitter -->

        <!-- DONATE BUTTON -->
        <ul>
            <h3>DONATE</h3>
		</ul>
        <!-- END DONATE -->

        <!-- Newsletter BUTTON -->
        <ul>
            <h3>NEWSLETTER</h3>
		</ul>
        <!-- END DONATE -->



	<?php endif; ?>

<!--END SIDEBAR SECONDARY-->