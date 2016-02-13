<?php if ( is_active_sidebar( 'captains' ) ) : ?> <!--START SIDEBAR captains-->  


		<div id="captains" class="col-lg-4 col-md-4 col-xs-12">

		<?php dynamic_sidebar( 'captains' ); ?>

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