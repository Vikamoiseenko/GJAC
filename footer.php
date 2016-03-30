</div> <!-- end container -->
</div> <!-- end container -->
<!-- Begin site inform -->
<footer class="row-footer">
<div id="menu-footer">	
<div id="foot-logo" class="col-lg-12 col-xs-12 col-sm-12">
<div id="logo-footer" class="row">
<div class="col-lg-2 col-md-2 col-xs-2">
<a class="navbar-brand" href="<?php echo get_settings('home'); ?>" title="Link to GJAC"><img id="mainLogoFooter" class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/logo0228.gif" width="52" height="52" />
</a>
	</div>
<div class="col-lg-10 col-md-10 col-xs-10">
<a class="navbar-brand-footer" href="<?php echo esc_url( home_url() ); ?>">Girls Junior Americas Cup</a>
	</div>
</div> 
</div>			
<!-- begin footer menu -->
<div class="container">
<div class="row">
    <nav class="footer-main">
    <?php wp_nav_menu( array( 'theme_location' => 'Footer-menu' ) ); ?>
    </nav>
	</div>
	</div>
    </div> <!-- end footer menu -->
 <!-- end footer-content -->
</footer> <!-- end footer -->
<div id="info">
<div id="site-info">
    <p>&copy;<?php echo date("Y"); ?> <a href="<?php get_site_url(); ?>"><?php bloginfo('name'); ?></a>. Built for the Girls Junior Americas Cup, <a href="http://atiagina.com/" target="_blank">Anna Atiagina</a>, <a href="http://mykhabarovsk.com/" target="_blank">Victoria Moiseenko</a> <span class="login">&nbsp;&nbsp;&nbsp;<?php wp_loginout(); ?></span></p>
</div>
</div>
<!-- Start WP footer -->
<?php wp_footer(); ?>
<!-- Start WP footer -->



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
      <!-- Begin Flex Slider -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>
<!-- Begin Scripts -->
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-hover-dropdown.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-hover-dropdown.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/no-hover-mobile-dropdown.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>
<!--<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>-->
<!-- End Scripts -->

<!-- Begin Flex Slider -->
<script type="text/javascript" charset="utf-8">
  $(window).load(function() { // enable function upon window load
    $('.flexslider').flexslider({
		animation: "fade",
		slideshow: true,
		smoothHeight: true
	}); // call flexslider function
  });
</script>
<!-- End Flex Slider -->
	</body>
</html>
	