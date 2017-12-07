<!doctype.php>
<html <?php language_attributes(); ?>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
		    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/normalize.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/main.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/responsive.css">
       
        
        <script src="<?php echo get_template_directory_uri();?>/js/vendor/modernizr-2.8.3.min.js"></script>

        <?php wp_head(); ?>
    </head>
    <body>

        <header class="header_section navbar-fixed-top">
            <div class="container">
                <div class="row">
                        <div class="col_thr col-xs-6 col-sm-2 col-md-4">
                            <div class="logo_image">
                               <a href="<?php echo home_url(); ?>">
                                   <img src="<?php echo get_template_directory_uri();?>/images/logo.png">
                               </a>
                            </div>
                        </div>
                        <div class="bg_col col-xs-12 col-sm-10 col-md-8 pull-right">
                          <div class="top_header_content">
                            <ul class="nav navbar-nav top_header_menu">
                              <li><a href="<?php echo the_permalink('33'); ?>"><img src="<?php echo get_template_directory_uri();?>/images/en_US.png">English</a></li>
                              <li><a href="<?php echo the_permalink('147'); ?>"><img src="<?php echo get_template_directory_uri();?>/images/cn.png">Chinese</a></li>
                              <li><a href="<?php echo the_permalink('149'); ?>"><img src="<?php echo get_template_directory_uri();?>/images/jp.png">Japanese</a></li>
                            </ul>
                          </div>
                            <nav class="navbar navbar-default">
                              <div class="container_ful">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                  <button type="button" class="navbar-toggle collapsed faul" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="menu_container" id="">
                                  <?php 
                                  
                                  wp_nav_menu( array(
                                        'menu'              => 'main_manu',
                                        'theme_location'    => 'main_manu',
                                        'depth'             => 3,
                                        'container'         => 'div',
                                        'container_class'   => 'collapse navbar-collapse',
                                        'container_id'      => 'bs-example-navbar-collapse-1',
                                        'menu_class'        => 'nav navbar-nav',
                                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                        'walker'            => new WP_Bootstrap_Navwalker())
                                    );
                                  ?>
                                                                   
                                </div><!-- /.navbar-collapse -->
                              </div><!-- /.container-fluid -->
                            </nav>
                        </div>
                    </div>
            </div>
        </header>