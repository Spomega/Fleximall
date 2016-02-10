<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>FlexiMall</title>
        <!-- Stylesheet -->
        {!! HTML::style('css/bootstrap.min.css')  !!}
        {!! HTML::style('css/bootstrap-responsive.min.css')  !!}
        {!! HTML::style('css/font-awesome.min.css')  !!}
        {!! HTML::style('css/style.css')  !!}
        {!! HTML::style('css/flexslider.css')!!}
        {!! HTML::style('css/fancybox.css')  !!}
        {!! HTML::style('css/masonry.css')  !!}
<!--        {!! HTML::style('css/color/multicolor.css')  !!}-->
<!--<link href="css/color/multicolor.css" rel="stylesheet" type="text/css" id="changeColor" />-->
<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="img/favicon.ico" />
<!-- Scripts -->
<!--<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>-->
<!--<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>-->
 {!! HTML::script('js/jquery-1.11.1.min.js') !!}
 {!! HTML::script('js/bootstrap.min.js') !!}
 {!! HTML::script('js/jquery.nicescroll.min.js') !!}
 {!! HTML::script('js/jquery.nicescroll.min.js') !!}
 {!! HTML::script('js/jquery.flexslider.min.js') !!}
 {!! HTML::script('js/jquery.fancybox.min.js') !!}
 {!! HTML::script('js/jquery.masonry.min.js') !!}
 {!! HTML::script('js/functions.js') !!}



 @yield('head')
    </head>
    <body>
        <!-- Header -->
        <div class="header">
            <div class="container">
                <div class="row"> 

                    <!-- Secondary Menu -->
                    <ul class="nav nav-pills span6">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Wish List</a></li>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Shopping Cart</a></li>
                        <li><a href="#">Checkout</a></li>
                    </ul>

                    <!-- Header Cart -->
                    <div class="cart"><i class="icon-shopping-cart"></i>
                        <p>GHC 0.00 <span>( 0 )</span></p>

                        <!-- Header Cart Content -->
                        <div class="cart-content">
                            <div class="mini-cart-info">
                                <h3>Shopping Cart</h3>
                                <p class="empty">Empty cart</p>
                            </div>
                        </div>
                    </div>

                    <!-- Currency -->
<!--                    <ul class="nav nav-pills currency">
                        <li class="active"><a href="#">&euro;</a></li>
                        <li><a href="#">$</a></li>
                        <li><a href="#">&pound;</a></li>
                    </ul>-->

                    <!-- Header Login -->
                    <p class="log-reg"><a href="#">Sign In</a> <a href="#">Register</a></p>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        @if(Session::has('message'))
<!--                    <div class="alert alert-success alert-dismissible">
                        {{Session::get('message')}}
                    </div>-->
         <!-- Alert -->
      <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Message: </strong> {{Session::get('message')}}</div>
        @endif
        <!-- Logo --> 
<!--        <a href="#" id="logo"><img src="images/Flexied.png" alt="logo" /></a> -->
         <a href="#" id="logo"> {!! HTML::image('images/Flexied.png',"logo") !!}</a>
        <!-- Main Navbar -->
<hr class="bordered" />
<!--<div class="navbar-cont">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container"><a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse"><i class="icon-align-justify"></i></a>
              <div class="nav-collapse collapse navbar-responsive-collapse">
                <ul class="nav">
                  <li class="active"><a href="index.html">Home</a></li>
                  <li class="dropdown"><a href="about.html" class="dropdown-toggle" data-toggle="dropdown">Pages<i class="icon-angle-down"></i></a> 
                    
                     Dropdown Navbar 
                    <ul class="dropdown-menu">
                      <li><a href="about.html">About</a></li>
                      <li><a href="services.html">Services</a></li>
                      <li><a href="full-width.html">Full Width</a></li>
                      <li><a href="left-sidebar.html">Left Sidebar</a></li>
                      <li><a href="right-sidebar.html">Right Sidebar</a></li>
                      <li><a href="page-404.html">Page 404</a></li>
                      <li><a href="contact.html">Contact</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="portfolio-columns.html" class="dropdown-toggle" data-toggle="dropdown">Portfolio<i class="icon-angle-down"></i></a> 
                    
                     Dropdown Navbar 
                    <ul class="dropdown-menu">
                      <li><a href="portfolio-columns.html">Portfolio Columns</a></li>
                      <li><a href="portfolio-masonry.html">Portfolio Masonry</a></li>
                      <li><a href="portfolio-detail.html">Portfolio Single</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="blog-home.html" class="dropdown-toggle" data-toggle="dropdown">Blog<i class="icon-angle-down"></i></a> 
                    
                     Dropdown Navbar 
                    <ul class="dropdown-menu">
                      <li><a href="blog-home.html">Blog Home</a></li>
                      <li><a href="blog-post.html">Blog Post</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="shop-home.html" class="dropdown-toggle" data-toggle="dropdown">Shop<i class="icon-angle-down"></i></a> 
                    
                     Dropdown Navbar 
                    <ul class="dropdown-menu">
                      <li><a href="shop-home.html">Shop Home</a></li>
                      <li><a href="category.html">Shop Category List</a></li>
                      <li><a href="product.html">Shop Product Detail</a></li>
                      <li><a href="cart.html">Shop Cart</a></li>
                    </ul>
                  </li>
                  <li><a href="contact.html">Contact</a></li>
                </ul>
                
                 Navbar Search 
                <form action="header-search" class="header-search">
                  <fieldset>
                    <input type="text" placeholder="Search" />
                    <button><i class="icon-search"></i></button>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>-->
<hr class="bordered" />

      <div class="container main-container">
            @yield('main')
        </div>  
    </body>
</html>
