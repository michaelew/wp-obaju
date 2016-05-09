<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        Obaju : e-commerce template
    </title>

    <meta name="keywords" content="">	
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">    
	
    <!-- styles -->
    <?php wp_head();?>   

    <!-- theme stylesheet -->    

    <!-- your stylesheet with modifications -->    
    

    <link rel="shortcut icon" href="favicon.png">



</head>

<body>

    <!-- *** TOPBAR ***
 _________________________________________________________ -->
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
                <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake">Offer of the day</a>  <a href="#">Get flat 35% off on orders over $50!</a>
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                    </li>
                    <li><a href="register.html">Register</a>
                    </li>
                    <li><a href="contact.html">Contact</a>
                    </li>
                    <li><a href="#">Recently viewed</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="customer-orders.html" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email-modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password-modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="<?php echo esc_url( home_url( '/' ) ); ?>" data-animate-hover="bounce">
                    <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="Obaju logo" class="hidden-xs">
                    <img src="<?php echo get_template_directory_uri();?>/img/logo-small.png" alt="Obaju logo" class="visible-xs"><span class="sr-only">Obaju - go to homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <a class="btn btn-default navbar-toggle" href="basket.html">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">3 items in cart</span>
                    </a>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Men <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Clothing</h5>
                                            <ul>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">T-shirts</a>
                                                </li>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Shirts</a>
                                                </li>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Pants</a>
                                                </li>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Accessories</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Shoes</h5>
                                            <ul>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Trainers</a>
                                                </li>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Sandals</a>
                                                </li>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Hiking shoes</a>
                                                </li>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Casual</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Accessories</h5>
                                            <ul>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Trainers</a>
                                                </li>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Sandals</a>
                                                </li>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Hiking shoes</a>
                                                </li>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Casual</a>
                                                </li>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Hiking shoes</a>
                                                </li>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Casual</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Featured</h5>
                                            <ul>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Trainers</a>
                                                </li>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Sandals</a>
                                                </li>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Hiking shoes</a>
                                                </li>
                                            </ul>
                                            <h5>Looks and trends</h5>
                                            <ul>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Trainers</a>
                                                </li>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Sandals</a>
                                                </li>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Hiking shoes</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Ladies <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Clothing</h5>
                                            <ul>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">T-shirts</a>
                                                </li>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Shirts</a>
                                                </li>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Pants</a>
                                                </li>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Accessories</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Shoes</h5>
                                            <ul>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Trainers</a>
                                                </li>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Sandals</a>
                                                </li>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Hiking shoes</a>
                                                </li>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Casual</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Accessories</h5>
                                            <ul>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Trainers</a>
                                                </li>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Sandals</a>
                                                </li>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Hiking shoes</a>
                                                </li>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Casual</a>
                                                </li>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Hiking shoes</a>
                                                </li>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Casual</a>
                                                </li>
                                            </ul>
                                            <h5>Looks and trends</h5>
                                            <ul>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Trainers</a>
                                                </li>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Sandals</a>
                                                </li>
                                                <li><a href="<?php echo esc_url( get_permalink(43) ); ?> ">Hiking shoes</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="banner">
                                                <a href="#">
                                                    <img src="<?php echo get_template_directory_uri();?>/img/banner.jpg" class="img img-responsive" alt="">
                                                </a>
                                            </div>
                                            <div class="banner">
                                                <a href="#">
                                                    <img src="<?php echo get_template_directory_uri();?>/img/banner2.jpg" class="img img-responsive" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Template <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Shop</h5>
                                            <ul>
                                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Homepage</a></li>
												<?php 
													$pages = get_pages(array(
														'child_of' => 112            
													));                                                  
													foreach ( $pages as $page ) {
															echo '<li><a href="'.get_page_link( $page->ID ).'">'.$page->post_title.'</a></li>';                                                    
													}
												?>    
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>User</h5>
                                            <ul>
                                                <?php 
													$pages = get_pages(array(
														'child_of' => 172            
													));                                                  
													foreach ( $pages as $page ) {
															echo '<li><a href="'.get_page_link( $page->ID ).'">'.$page->post_title.'</a></li>';                                                    
													}
												?>  
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Order process</h5>
                                            <ul>
                                                <?php 
													$pages = get_pages(array(
														'child_of' => 232            
													));                                                  
													foreach ( $pages as $page ) {
															echo '<li><a href="'.get_page_link( $page->ID ).'">'.$page->post_title.'</a></li>';                                                    
													}
												?>  
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Pages and blog</h5>
                                            <ul>											
                                                <?php 
													$pages = get_pages(array(
														'child_of' => 302            
													));                                                  
													foreach ( $pages as $page ) {
															echo '<li><a href="'.get_page_link( $page->ID ).'">'.$page->post_title.'</a></li>';                                                    
													}
												?>  
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">

                <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="basket.html" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">3 items in cart</span></a>
                </div>
                <!--/.nav-collapse -->

                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div>

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

			<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

		    </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
	<div id="all">