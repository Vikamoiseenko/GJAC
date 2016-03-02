<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></title>
<!-- begin meta -->
<meta name="viewport" content="user-scalablo=no, initial-scale=1.0, maximum-scale=1.0" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- end meta -->

<!--Favicon -->


<!--Favicon -->

<!-- begin style -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href="<?php bloginfo('template_directory'); ?>/flexslider.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/css/bootstrap-social.css" rel="stylesheet">

<!-- end style -->

<!-- Start WP head -->
<?php wp_head(); ?>
<!-- End wp head -->
</head>
<body <?php body_class(); ?>>

<!-- Begin HEADER -->
<div id="header-container">
<div id="container" class="container">
<div class="row">
<div id="logo" class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
<div id="left" class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
<a href="<?php echo get_settings('home'); ?>" title="Link to Washinghton Junior Golf Association">
<img id="mainLogo" class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/logo0228.gif" />
</a>
</div> <!-- end .left -->
<!--</div> --
<div id="header-text" class="col-lg-5 col-md-6 col-xs-12"> -->
<div id="right" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
<h2 class="header-text"><a id="blah" class="navbar-brand-desktop" href="<?php echo esc_url( home_url() ); ?>">Girls Junior Americas Cup</a></h2>
</div><!-- end .left -->
</div><!-- end logo -->	
<div id="name" class="col-lg-4 col-md-4 col-sm-5 col-xs-12">	
	<div class="row">
<div id="utilities-header" class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<!-- Begin Social  Icon-->
<div id="social-header" >
<a href="#" target="_blank"><i class="fa fa-envelope-o fa-2x"></i></a>
<a href="#" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
<a href="#" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
<a href="#" target="_blank"><i class="fa fa-flickr fa-2x"></i></a>
</div> <!-- end social icon -->
<!--<div id="link2">
<ul>
<li><a href="#">Contact</a></li>
</ul>
</div>-->
</div> <!-- end utiliti menu -->
<!-- begin search form -->
<div id="search" class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
<form method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>/">
<input type="text" value="<?php echo get_search_query(); ?>" placeholder="Search" name="s" id="s" />
	<button type="submit" class="add-on"><i class="fa fa-search"></i></button>
<!-- <input type="submit" id="searchsubmit" value="" /> -->
</form> <!-- end search form -->
</div>	
</div>
	</div>
</div>	<!-- closed div .row -->
</div>	<!-- closed div .container -->
<!-- Begin new Navigation -->	
<!-- <div id="navigation">	-->
<div class="navbar navbar-default navbar-static-top" role="navigation">
                       
                    <div class="container">

                        <div class="navbar-header">
                            <a data-toggle="collapse" href=".main-menu-select" aria-expanded="true" aria-controls="collapseOne">
                                <button type="button" class="navbar-toggle collapsed">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </a>
                        </div><!--/navbar-header-->
	
<div class="main-menu-select navbar-collapse collapse" id="main-menu-select">
                            <ul class="nav navbar-nav">
                                 <?php
                                    wp_nav_menu( array(
                                        'menu'              => 'Main',                
                                        'depth'             => 2,
                                        'container'         => 'div',
                                        'container_class'   => 'collapse navbar-collapse main-menu-select',
                                        'menu_class'        => 'nav navbar-nav',
                                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                        'walker'            => new wp_bootstrap_navwalker())
                                    );
                                ?>
                            </ul>
                        </div><!--/.nav-collapse -->	
	</div>
	</div>
	</div>
<!-- </div> --end header -->
<div id="wrapper">	
<div id="breadcr" class="container">
<?php if(function_exists('breadcrumbs')) breadcrumbs(); ?>
</div>
</div>	
<!-- END MAIN NAVIGATION -->
<div id="main">			
<div class="container">