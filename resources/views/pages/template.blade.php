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
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="#">{{Auth::check() ? 'Wish List' : ''}}</a></li>
                        <li><a href="#">{{Auth::check() ? 'My Account' : ''}}</a></li>
                        <li><a href="#">{{Auth::check() ? 'Shopping Cart' : ''}}</a></li>
                        <li><a href="#">{{Auth::check() ? 'Checkout' : ''}}</a></li>
                    </ul>

                    <!-- Header Cart -->
                    @if(Auth::check())
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
                    @endif
                    <!-- Currency -->
<!--                    <ul class="nav nav-pills currency">
                        <li class="active"><a href="#">&euro;</a></li>
                        <li><a href="#">$</a></li>
                        <li><a href="#">&pound;</a></li>
                    </ul>-->

                    <!-- Header Login -->
                    <p class="log-reg"><a href="{{Auth::check() ? url('users/logout') : url('users/login')}}">{{Auth::check() ? 'Logout' : 'Sign In'}}</a> 
                        <a href="{{url('users/register')}}">{{Auth::check() ? '' : 'Register'}}</a> <a href="{{url('merchant/create')}}">{{Auth::check() ? '' : 'Merchant'}}</a></p>
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
<hr class="bordered" />

      <div class="container main-container">
            @yield('main')
        </div>  
    </body>
</html>
