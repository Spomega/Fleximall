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
         @if(Session::has('message'))
<!--                    <div class="alert alert-success alert-dismissible">
                        {{Session::get('message')}}
                    </div>-->
         <!-- Alert -->
      <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Message: </strong> {{Session::get('message')}}</div>
        @endif
        
        
        <hr class="bordered" />
<!--<hr class="bordered" />-->

        <div class="container main-container">
            @yield('main')
        </div>  

    </body>
</html>
