<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <title>Fleximall Merchant</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet">

        <!-- ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet">

        <!-- Morris -->
        <link href="css/morris.css" rel="stylesheet">	

        <!-- Datepicker -->
        <link href="css/datepicker.css" rel="stylesheet">	

        <!-- Animate -->
        <link href="css/animate.min.css" rel="stylesheet">

        <!-- Owl Carousel -->
        <link href="css/owl.carousel.min.css" rel="stylesheet">
        <link href="css/owl.theme.default.min.css" rel="stylesheet">

        <!-- Simplify -->
        <link href="css/simplify.min.css" rel="stylesheet">

        <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>
    </head>
    <body class="">
        <div id="deleteWidgetConfirm_background" class="popup_background" style="opacity: 0; visibility: hidden; position: fixed; top: 0px; right: 0px; bottom: 0px; left: 0px; z-index: 2000; transition: all 0.3s; background-color: black;"></div><div id="deleteWidgetConfirm_wrapper" class="popup_wrapper" style="opacity: 0; visibility: hidden; position: fixed; overflow: auto; z-index: 2001; transition: all 0.3s; top: 0px; right: 0px; left: 0px; bottom: 0px; text-align: center; display: none;"><div class="custom-popup delete-widget-popup delete-confirmation-popup popup_content" id="deleteWidgetConfirm" data-popup-initialized="true" aria-hidden="true" role="dialog" style="opacity: 0; visibility: hidden; display: inline-block; outline: none; transition: all 0.3s; text-align: left; position: relative; vertical-align: middle;">
                <div class="popup-header text-center">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="popup-body text-center">
                    <h5>Are you sure to delete this widget?</h5>
                    <strong class="block m-top-xs"><i class="fa fa-exclamation-circle m-right-xs text-danger"></i>This action cannot be undone</strong>

                    <div class="text-center m-top-lg">
                        <a class="btn btn-success m-right-sm remove-widget-btn">Delete</a>
                        <a class="btn btn-default deleteWidgetConfirm_close">Cancel</a>
                    </div>
                </div>
            </div><div class="popup_align" style="display: inline-block; vertical-align: middle; height: 100%;"></div></div>
        <div class="wrapper">
            <div class="sidebar-right">
                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="sidebar-inner scrollable-sidebar" style="overflow: hidden; width: auto; height: 100%;">
                        <div class="sidebar-header clearfix">
                            <input class="form-control dark-input" placeholder="Search" type="text">
                            <div class="btn-group pull-right">
                                <a href="#" class="sidebar-setting" data-toggle="dropdown"><i class="fa fa-cog fa-lg"></i></a>
                                <ul class="dropdown-menu pull-right flipInV">
                                    <li><a href="#"><i class="fa fa-circle text-danger"></i><span class="m-left-xs">Busy</span></a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i><span class="m-left-xs">Turn Off Chat</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="title-block">
                            Group Chat
                        </div>
                        <div class="content-block">
                            <ul class="sidebar-list">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-circle-o text-success"></i><span class="m-left-xs">Close Friends</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-circle-o text-success"></i><span class="m-left-xs">Business</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="title-block">
                            Favorites
                        </div>
                        <div class="content-block">
                            <ul class="sidebar-list">
                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="images/profile/profile2.jpg" class="img-circle" alt="user avatar">
                                        <div class="chat-detail m-left-sm">
                                            <div class="chat-name">
                                                John Doe
                                            </div>
                                            <div class="chat-message">
                                                Where are you?
                                            </div>
                                        </div>
                                        <div class="chat-status">
                                            <i class="fa fa-circle-o text-success"></i>
                                        </div>
                                        <div class="chat-alert">
                                            <span class="badge badge-purple bounceIn animation-delay2">2</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="images/profile/profile3.jpg" class="img-circle" alt="user avatar">
                                        <div class="chat-detail m-left-sm">
                                            <div class="chat-name">
                                                Jane Doe
                                            </div>
                                            <div class="chat-message">
                                                Hello
                                            </div>
                                        </div>
                                        <div class="chat-status">
                                            <i class="fa fa-circle-o text-success"></i>
                                        </div>
                                        <div class="chat-alert">
                                            <span class="badge badge-info bounceIn animation-delay2">1</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="images/profile/profile4.jpg" class="img-circle" alt="user avatar">
                                        <div class="chat-detail m-left-sm">
                                            <div class="chat-name">
                                                John Doe
                                            </div>
                                            <div class="chat-message">
                                                See you again next week.
                                            </div>
                                        </div>
                                        <div class="chat-status">
                                            <i class="fa fa-circle-o text-danger"></i>
                                        </div>
                                        <div class="chat-alert">
                                            <i class="fa fa-check text-success"></i>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="images/profile/profile5.jpg" class="img-circle" alt="user avatar">
                                        <div class="chat-detail m-left-sm">
                                            <div class="chat-name">
                                                John Doe
                                            </div>
                                            <div class="chat-message">
                                                Hello, Are you there?
                                            </div>
                                        </div>
                                        <div class="chat-status">
                                            <i class="fa fa-circle-o text-danger"></i>
                                        </div>
                                        <div class="chat-alert">
                                            <i class="fa fa-reply"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="title-block">
                            More friends
                        </div>
                        <div class="content-block">
                            <ul class="sidebar-list">
                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="images/profile/profile6.jpg" class="img-circle" alt="user avatar">
                                        <div class="chat-detail m-left-sm">
                                            <div class="chat-name">
                                                John Doe
                                            </div>
                                            <div class="chat-message">
                                                Where are you?
                                            </div>
                                        </div>
                                        <div class="chat-status">
                                            <i class="fa fa-circle-o text-success"></i>
                                        </div>
                                        <div class="chat-alert">
                                            <span class="badge badge-success bounceIn animation-delay2">2</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="images/profile/profile7.jpg" class="img-circle" alt="user avatar">
                                        <div class="chat-detail m-left-sm">
                                            <div class="chat-name">
                                                Jane Doe
                                            </div>
                                            <div class="chat-message">
                                                Hello
                                            </div>
                                        </div>
                                        <div class="chat-status">
                                            <i class="fa fa-circle-o text-success"></i>
                                        </div>
                                        <div class="chat-alert">
                                            <span class="badge badge-danger bounceIn animation-delay2">1</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="images/profile/profile8.jpg" class="img-circle" alt="user avatar">
                                        <div class="chat-detail m-left-sm">
                                            <div class="chat-name">
                                                John Doe
                                            </div>
                                            <div class="chat-message">
                                                See you again next week.
                                            </div>
                                        </div>
                                        <div class="chat-status">
                                            <i class="fa fa-circle-o text-danger"></i>
                                        </div>
                                        <div class="chat-alert">
                                            <i class="fa fa-check text-success"></i>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="clearfix">
                                        <img src="images/profile/profile9.jpg" class="img-circle" alt="user avatar">
                                        <div class="chat-detail m-left-sm">
                                            <div class="chat-name">
                                                John Doe
                                            </div>
                                            <div class="chat-message">
                                                Hello, Are you there?
                                            </div>
                                        </div>
                                        <div class="chat-status">
                                            <i class="fa fa-circle-o text-danger"></i>
                                        </div>
                                        <div class="chat-alert">
                                            <i class="fa fa-reply"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><div class="slimScrollBar" style="width: 0px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 501.694px; background: rgb(0, 0, 0);"></div><div class="slimScrollRail" style="width: 0px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div></div><!-- sidebar-inner -->
            </div><!-- sidebar-right -->
            <header class="top-nav">
                <div class="top-nav-inner">
                    <div class="nav-header">
                        <button type="button" class="navbar-toggle pull-left sidebar-toggle" id="sidebarToggleSM">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <ul class="nav-notification pull-right">
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog fa-lg"></i></a>
                                <span class="badge badge-danger bounceIn">1</span>
                                <ul class="dropdown-menu dropdown-sm pull-right user-dropdown">
                                    <li class="user-avatar">
                                        <img src="images/profile/profile1.jpg" alt="" class="img-circle">
                                        <div class="user-content">
                                            <h5 class="no-m-bottom">Jane Doe</h5>
                                            <div class="m-top-xs">
                                                <a href="profile.html" class="m-right-sm">Profile</a>
                                                <a href="signin.html">Log out</a>
                                            </div>
                                        </div>
                                    </li>	  
                                    <li>
                                        <a href="inbox.html">
                                            Inbox
                                            <span class="badge badge-danger bounceIn animation-delay2 pull-right">1</span>
                                        </a>
                                    </li>			  
                                    <li>
                                        <a href="#">
                                            Notification
                                            <span class="badge badge-purple bounceIn animation-delay3 pull-right">2</span>
                                        </a>
                                    </li>			  
                                    <li>
                                        <a href="#" class="sidebarRight-toggle">
                                            Message
                                            <span class="badge badge-success bounceIn animation-delay4 pull-right">7</span>
                                        </a>
                                    </li>			  	  
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">Setting</a>
                                    </li>			  	  
                                </ul>
                            </li>
                        </ul>

                        <a href="index.html" class="brand">
                            <i class="fa fa-database"></i><span class="brand-name">SIMPLIFY ADMIN</span>
                        </a>
                    </div>
                    <div class="nav-container">
                        <button type="button" class="navbar-toggle pull-left sidebar-toggle" id="sidebarToggleLG">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <ul class="nav-notification">	
                            <li class="search-list">
                                <div class="search-input-wrapper">
                                    <div class="search-input">
                                        <input type="text" class="form-control input-sm inline-block">
                                        <a href="#" class="input-icon text-normal"><i class="ion-ios7-search-strong"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="pull-right m-right-sm">
                            <div class="user-block hidden-xs">
                                <a href="#" id="userToggle" data-toggle="dropdown">
                                    <img src="images/profile/profile1.jpg" alt="" class="img-circle inline-block user-profile-pic">
                                    <div class="user-detail inline-block">
                                        Jane Doe
                                        <i class="fa fa-angle-down"></i>
                                    </div>
                                </a>
                                <div class="panel border dropdown-menu user-panel">
                                    <div class="panel-body paddingTB-sm">
                                        <ul>
                                            <li>
                                                <a href="profile.html">
                                                    <i class="fa fa-edit fa-lg"></i><span class="m-left-xs">My Profile</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="inbox.html">
                                                    <i class="fa fa-inbox fa-lg"></i><span class="m-left-xs">Inboxes</span>
                                                    <span class="badge badge-danger bounceIn animation-delay3">2</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="signin.html">
                                                    <i class="fa fa-power-off fa-lg"></i><span class="m-left-xs">Sign out</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav-notification">
                                <li>
                                    <a href="#" data-toggle="dropdown"><i class="fa fa-envelope fa-lg"></i></a>
                                    <span class="badge badge-purple bounceIn animation-delay5 active">2</span>
                                    <ul class="dropdown-menu message pull-right">
                                        <li><a>You have 4 new unread messages</a></li>					  
                                        <li>
                                            <a class="clearfix" href="#">
                                                <img src="images/profile/profile2.jpg" alt="User Avatar">
                                                <div class="detail">
                                                    <strong>John Doe</strong>
                                                    <p class="no-margin">
                                                        Lorem ipsum dolor sit amet...
                                                    </p>
                                                    <small class="text-muted"><i class="fa fa-check text-success"></i> 27m ago</small>
                                                </div>
                                            </a>	
                                        </li>
                                        <li>
                                            <a class="clearfix" href="#">
                                                <img src="images/profile/profile3.jpg" alt="User Avatar">
                                                <div class="detail">
                                                    <strong>Jane Doe</strong>
                                                    <p class="no-margin">
                                                        Lorem ipsum dolor sit amet...
                                                    </p>
                                                    <small class="text-muted"><i class="fa fa-check text-success"></i> 5hr ago</small>
                                                </div>
                                            </a>	
                                        </li>
                                        <li>
                                            <a class="clearfix" href="#">
                                                <img src="images/profile/profile4.jpg" alt="User Avatar">
                                                <div class="detail m-left-sm">
                                                    <strong>Bill Doe</strong>
                                                    <p class="no-margin">
                                                        Lorem ipsum dolor sit amet...
                                                    </p>
                                                    <small class="text-muted"><i class="fa fa-reply"></i> Yesterday</small>
                                                </div>
                                            </a>	
                                        </li>
                                        <li>
                                            <a class="clearfix" href="#">
                                                <img src="images/profile/profile5.jpg" alt="User Avatar">
                                                <div class="detail">
                                                    <strong>Baby Doe</strong>
                                                    <p class="no-margin">
                                                        Lorem ipsum dolor sit amet...
                                                    </p>
                                                    <small class="text-muted"><i class="fa fa-reply"></i> 9 Feb 2013</small>
                                                </div>
                                            </a>	
                                        </li>
                                        <li><a href="#">View all messages</a></li>					  
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" data-toggle="dropdown"><i class="fa fa-bell fa-lg"></i></a>
                                    <span class="badge badge-info bounceIn animation-delay6 active">4</span>
                                    <ul class="dropdown-menu notification dropdown-3 pull-right">
                                        <li><a href="#">You have 5 new notifications</a></li>					  
                                        <li>
                                            <a href="#">
                                                <span class="notification-icon bg-warning">
                                                    <i class="fa fa-warning"></i>
                                                </span>
                                                <span class="m-left-xs">Server #2 not responding.</span>
                                                <span class="time text-muted">Just now</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="notification-icon bg-success">
                                                    <i class="fa fa-plus"></i>
                                                </span>
                                                <span class="m-left-xs">New user registration.</span>
                                                <span class="time text-muted">2m ago</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="notification-icon bg-danger">
                                                    <i class="fa fa-bolt"></i>
                                                </span>
                                                <span class="m-left-xs">Application error.</span>
                                                <span class="time text-muted">5m ago</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="notification-icon bg-success">
                                                    <i class="fa fa-usd"></i>
                                                </span>
                                                <span class="m-left-xs">2 items sold.</span>
                                                <span class="time text-muted">1hr ago</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="notification-icon bg-success">
                                                    <i class="fa fa-plus"></i>
                                                </span>
                                                <span class="m-left-xs">New user registration.</span>
                                                <span class="time text-muted">1hr ago</span>
                                            </a>
                                        </li>
                                        <li><a href="#">View all notifications</a></li>					  
                                    </ul>
                                </li>
                                <li class="chat-notification">
                                    <a href="#" class="sidebarRight-toggle"><i class="fa fa-comments fa-lg"></i></a>
                                    <span class="badge badge-danger bounceIn active">1</span>

                                    <div class="chat-alert">
                                        Hello, Are you there?
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- ./top-nav-inner -->	
            </header>
            <aside class="sidebar-menu fixed">
                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="sidebar-inner scrollable-sidebar" style="overflow: hidden; width: auto; height: 100%;">
                        <div class="main-menu">
                            <ul class="accordion">
                                <li class="menu-header">
                                    Main Menu
                                </li>
                                <li class="bg-palette1 active">
                                    <a href="index.html">
                                        <span class="menu-content block">
                                            <span class="menu-icon"><i class="block fa fa-home fa-lg"></i></span>
                                            <span class="text m-left-sm">Dashboard</span>
                                        </span>
                                        <span class="menu-content-hover block">
                                            Home
                                        </span>
                                    </a>
                                </li>
                                <li class="bg-palette2">
                                    <a href="landing/landing.html">
                                        <span class="menu-content block">
                                            <span class="menu-icon"><i class="block fa fa-desktop fa-lg"></i></span>
                                            <span class="text m-left-sm">Landing</span>
                                        </span>
                                        <span class="menu-content-hover block">
                                            Landing
                                        </span>
                                    </a>
                                </li>
                                <li class="openable bg-palette3">
                                    <a href="#">
                                        <span class="menu-content block">
                                            <span class="menu-icon"><i class="block fa fa-list fa-lg"></i></span>
                                            <span class="text m-left-sm">Form Elements</span>
                                            <span class="submenu-icon"></span>
                                        </span>
                                        <span class="menu-content-hover block">
                                            Form
                                        </span>
                                    </a>
                                    <ul class="submenu bg-palette4">
                                        <li><a href="form_element.html"><span class="submenu-label">Form Element</span></a></li>
                                        <li><a href="form_validation.html"><span class="submenu-label">Form Validation</span></a></li>
                                        <li><a href="form_wizard.html"><span class="submenu-label">Form Wizard</span></a></li>
                                        <li><a href="dropzone.html"><span class="submenu-label">Dropzone</span></a></li>
                                    </ul>
                                </li>
                                <li class="openable bg-palette4">
                                    <a href="#">
                                        <span class="menu-content block">
                                            <span class="menu-icon"><i class="block fa fa-tags fa-lg"></i></span>
                                            <span class="text m-left-sm">UI Elements</span>
                                            <span class="submenu-icon"></span>
                                        </span>
                                        <span class="menu-content-hover block">
                                            UI Kits
                                        </span>
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="ui_element.html"><span class="submenu-label">Basic Elements</span></a></li>
                                        <li><a href="button.html"><span class="submenu-label">Button &amp; Icons</span></a></li>
                                        <li class="openable">
                                            <a href="#">
                                                <small class="badge badge-success badge-square bounceIn animation-delay2 m-left-xs pull-right">2</small>
                                                <span class="submenu-label">Tables</span>
                                            </a>
                                            <ul class="submenu third-level">
                                                <li><a href="static_table.html"><span class="submenu-label">Static Table</span></a></li>
                                                <li><a href="datatable.html"><span class="submenu-label">DataTables</span></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="widget.html"><span class="submenu-label">Widget</span></a></li>
                                        <li><a href="tab.html"><span class="submenu-label">Tab</span></a></li>
                                        <li><a href="calendar.html"><span class="submenu-label">Calendar</span></a></li>
                                        <li><a href="treeview.html"><span class="submenu-label">Treeview</span></a></li>
                                        <li><a href="nestable_list.html"><span class="submenu-label">Nestable Lists</span></a></li>
                                    </ul>
                                </li>
                                <li class="bg-palette1">
                                    <a href="inbox.html">
                                        <span class="menu-content block">
                                            <span class="menu-icon"><i class="block fa fa-envelope fa-lg"></i></span>
                                            <span class="text m-left-sm">Inboxs</span>
                                            <small class="badge badge-danger badge-square bounceIn animation-delay5 m-left-xs">5</small>
                                        </span>
                                        <span class="menu-content-hover block">
                                            Inboxs
                                        </span>
                                    </a>
                                </li>
                                <li class="bg-palette2">
                                    <a href="timeline.html">
                                        <span class="menu-content block">
                                            <span class="menu-icon"><i class="block fa fa-clock-o fa-lg"></i></span>
                                            <span class="text m-left-sm">Timeline</span>
                                            <small class="badge badge-warning badge-square bounceIn animation-delay6 m-left-xs pull-right">7</small>
                                        </span>
                                        <span class="menu-content-hover block">
                                            Timeline
                                        </span>
                                    </a>
                                </li>
                                <li class="menu-header">
                                    Others
                                </li>
                                <li class="openable bg-palette3">
                                    <a href="#">
                                        <span class="menu-content block">
                                            <span class="menu-icon"><i class="block fa fa-gift fa-lg"></i></span>
                                            <span class="text m-left-sm">Extra Pages</span>
                                            <span class="submenu-icon"></span>
                                        </span>
                                        <span class="menu-content-hover block">
                                            Pages
                                        </span>
                                    </a>
                                    <ul class="submenu">
                                        <li><a href="signin.html"><span class="submenu-label">Sign in</span></a></li>
                                        <li><a href="signup.html"><span class="submenu-label">Sign Up</span></a></li>
                                        <li><a href="lockscreen.html"><span class="submenu-label">Lock Screen</span></a></li>
                                        <li><a href="profile.html"><span class="submenu-label">Profile</span></a></li>
                                        <li><a href="gallery.html"><span class="submenu-label">Gallery</span></a></li>
                                        <li><a href="blog.html"><span class="submenu-label">Blog</span></a></li>
                                        <li><a href="single_post.html"><span class="submenu-label">Single Post</span></a></li>
                                        <li><a href="pricing.html"><span class="submenu-label">Pricing</span></a></li>
                                        <li><a href="invoice.html"><span class="submenu-label">Invoice</span></a></li>
                                        <li><a href="error404.html"><span class="submenu-label">Error404</span></a></li>
                                        <li><a href="blank.html"><span class="submenu-label">Blank</span></a></li>
                                    </ul>
                                </li>
                                <li class="openable bg-palette4">
                                    <a href="#">
                                        <span class="menu-content block">
                                            <span class="menu-icon"><i class="block fa fa-list fa-lg"></i></span>
                                            <span class="text m-left-sm">Menu Level</span>
                                            <span class="submenu-icon"></span>
                                        </span>
                                        <span class="menu-content-hover block">
                                            Menu
                                        </span>
                                    </a>
                                    <ul class="submenu">
                                        <li class="openable">
                                            <a href="signin.html">
                                                <span class="submenu-label">menu 2.1</span>
                                                <small class="badge badge-success badge-square bounceIn animation-delay2 m-left-xs pull-right">3</small>
                                            </a>
                                            <ul class="submenu third-level">
                                                <li><a href="#"><span class="submenu-label">menu 3.1</span></a></li>
                                                <li><a href="#"><span class="submenu-label">menu 3.2</span></a></li>
                                                <li class="openable">
                                                    <a href="#">
                                                        <span class="submenu-label">menu 3.3</span>
                                                        <small class="badge badge-danger badge-square bounceIn animation-delay2 m-left-xs pull-right">2</small>
                                                    </a>
                                                    <ul class="submenu fourth-level">
                                                        <li><a href="#"><span class="submenu-label">menu 4.1</span></a></li>
                                                        <li><a href="#"><span class="submenu-label">menu 4.2</span></a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><span class="submenu-label">menu 2.2</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>	
                        <div class="sidebar-fix-bottom clearfix">
                            <div class="user-dropdown dropup pull-left">
                                <a href="#" class="dropdwon-toggle font-18" data-toggle="dropdown"><i class="ion-person-add"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="inbox.html">
                                            Inbox
                                            <span class="badge badge-danger bounceIn animation-delay2 pull-right">1</span>
                                        </a>
                                    </li>			  
                                    <li>
                                        <a href="#">
                                            Notification
                                            <span class="badge badge-purple bounceIn animation-delay3 pull-right">2</span>
                                        </a>
                                    </li>			  
                                    <li>
                                        <a href="#" class="sidebarRight-toggle">
                                            Message
                                            <span class="badge badge-success bounceIn animation-delay4 pull-right">7</span>
                                        </a>
                                    </li>			  	  
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">Setting</a>
                                    </li>			  	  
                                </ul>
                            </div>
                            <a href="lockscreen.html" class="pull-right font-18"><i class="ion-log-out"></i></a>
                        </div>
                    </div><div class="slimScrollBar" style="width: 0px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 30px; background: rgb(0, 0, 0);"></div><div class="slimScrollRail" style="width: 0px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div></div><!-- sidebar-inner -->
            </aside>

            <div class="main-container">
                <div class="padding-md">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="page-title">
                                Dashboard
                            </div>
                            <div class="page-sub-header">
                                Welcome Back, John Doe , <i class="fa fa-map-marker text-danger"></i> London
                            </div>
                        </div>
                        <div class="col-sm-6 text-right text-left-sm p-top-sm">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    Select Project <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li><a href="#">Project1</a></li>
                                    <li><a href="#">Project2</a></li>
                                    <li><a href="#">Project3</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Setting</a></li>
                                </ul>
                            </div>

                            <a class="btn btn-default"><i class="fa fa-cog"></i></a>
                        </div>
                    </div>

                    <div class="row m-top-md">
                        <div class="col-lg-3 col-sm-6">
                            <div class="statistic-box bg-danger m-bottom-md">
                                <div class="statistic-title">
                                    Today Visitors
                                </div>

                                <div class="statistic-value">
                                    96.7k
                                </div>

                                <div class="m-top-md">11% Higher than last week</div>

                                <div class="statistic-icon-background">
                                    <i class="ion-eye"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="statistic-box bg-info m-bottom-md">
                                <div class="statistic-title">
                                    Today Sales
                                </div>

                                <div class="statistic-value">
                                    751
                                </div>

                                <div class="m-top-md">8% Higher than last week</div>

                                <div class="statistic-icon-background">
                                    <i class="ion-ios7-cart-outline"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="statistic-box bg-purple m-bottom-md">
                                <div class="statistic-title">
                                    Today Users
                                </div>

                                <div class="statistic-value">
                                    129
                                </div>

                                <div class="m-top-md">3% Higher than last week</div>

                                <div class="statistic-icon-background">
                                    <i class="ion-person-add"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="statistic-box bg-success m-bottom-md">
                                <div class="statistic-title">
                                    Today Earnings
                                </div>

                                <div class="statistic-value">
                                    $124.45k
                                </div>

                                <div class="m-top-md">7% Higher than last week</div>

                                <div class="statistic-icon-background">
                                    <i class="ion-stats-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="smart-widget widget-dark-blue">
                                <div class="smart-widget-header">
                                    TOTAL VISITS
                                    <span class="smart-widget-option">
                                        <span class="refresh-icon-animated">
                                            <i class="fa fa-circle-o-notch fa-spin"></i>
                                        </span>
                                        <a href="#" class="widget-toggle-hidden-option">
                                            <i class="fa fa-cog"></i>
                                        </a>
                                        <a href="#" class="widget-collapse-option" data-toggle="collapse">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                        <a href="#" class="widget-refresh-option">
                                            <i class="fa fa-refresh"></i>
                                        </a>
                                        <a href="#" class="widget-remove-option">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </span>
                                </div>
                                <div class="smart-widget-inner">
                                    <div class="smart-widget-hidden-section">
                                        <ul class="widget-color-list clearfix">
                                            <li style="background-color:#20232b;" data-color="widget-dark"></li>
                                            <li style="background-color:#4c5f70;" data-color="widget-dark-blue"></li>
                                            <li style="background-color:#23b7e5;" data-color="widget-blue"></li>
                                            <li style="background-color:#2baab1;" data-color="widget-green"></li>
                                            <li style="background-color:#edbc6c;" data-color="widget-yellow"></li>
                                            <li style="background-color:#fbc852;" data-color="widget-orange"></li>
                                            <li style="background-color:#e36159;" data-color="widget-red"></li>
                                            <li style="background-color:#7266ba;" data-color="widget-purple"></li>
                                            <li style="background-color:#f5f5f5;" data-color="widget-light-grey"></li>
                                            <li style="background-color:#fff;" data-color="reset"></li>
                                        </ul>
                                    </div>
                                    <div class="smart-widget-body no-padding">
                                        <div class="padding-md">
                                            <div id="totalSalesChart" class="morris-chart" style="height: 250px; position: relative;"><svg height="250" version="1.1" width="454" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="32.515625" y="211" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#777777" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><text x="32.515625" y="164.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#777777" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">25</tspan></text><text x="32.515625" y="118" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#777777" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50</tspan></text><text x="32.515625" y="71.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#777777" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">75</tspan></text><text x="32.515625" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#777777" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan></text><text x="385.78683035714283" y="223.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#777777" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2014</tspan></text><text x="280.9341517857143" y="223.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#777777" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><text x="176.08147321428572" y="223.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#777777" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan></text><text x="71.22879464285714" y="223.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#777777" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2008</tspan></text><rect x="51.568917410714285" y="25" width="18.159877232142858" height="186" r="0" rx="0" ry="0" fill="#999999" stroke="#000" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="72.72879464285714" y="43.599999999999994" width="18.159877232142858" height="167.4" r="0" rx="0" ry="0" fill="#eeeeee" stroke="#000" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="103.99525669642857" y="71.5" width="18.159877232142858" height="139.5" r="0" rx="0" ry="0" fill="#999999" stroke="#000" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="125.15513392857143" y="90.1" width="18.159877232142858" height="120.9" r="0" rx="0" ry="0" fill="#eeeeee" stroke="#000" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="156.42159598214283" y="118" width="18.159877232142858" height="93" r="0" rx="0" ry="0" fill="#999999" stroke="#000" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="177.5814732142857" y="136.6" width="18.159877232142858" height="74.4" r="0" rx="0" ry="0" fill="#eeeeee" stroke="#000" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="208.84793526785714" y="71.5" width="18.159877232142858" height="139.5" r="0" rx="0" ry="0" fill="#999999" stroke="#000" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="230.0078125" y="90.1" width="18.159877232142858" height="120.9" r="0" rx="0" ry="0" fill="#eeeeee" stroke="#000" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="261.27427455357144" y="118" width="18.159877232142858" height="93" r="0" rx="0" ry="0" fill="#999999" stroke="#000" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="282.4341517857143" y="136.6" width="18.159877232142858" height="74.4" r="0" rx="0" ry="0" fill="#eeeeee" stroke="#000" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="313.7006138392857" y="71.5" width="18.159877232142858" height="139.5" r="0" rx="0" ry="0" fill="#999999" stroke="#000" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="334.86049107142856" y="90.1" width="18.159877232142858" height="120.9" r="0" rx="0" ry="0" fill="#eeeeee" stroke="#000" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="366.126953125" y="25" width="18.159877232142858" height="186" r="0" rx="0" ry="0" fill="#999999" stroke="#000" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect><rect x="387.28683035714283" y="43.599999999999994" width="18.159877232142858" height="167.4" r="0" rx="0" ry="0" fill="#eeeeee" stroke="#000" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></rect></svg><div class="morris-hover morris-default-style" style="left: 332px; top: 87px;"><div class="morris-hover-row-label">2014</div><div class="morris-hover-point" style="color: #999">
                                                        Total Visits:
                                                        100
                                                    </div><div class="morris-hover-point" style="color: #eee">
                                                        Bounce Rate:
                                                        90
                                                    </div></div></div>
                                        </div>

                                        <div class="bg-grey">
                                            <div class="row">
                                                <div class="col-xs-4 text-center">
                                                    <h3 class="m-top-sm">999</h3>
                                                    <small class="m-bottom-sm block">Total Visits</small>
                                                </div>
                                                <div class="col-xs-4 text-center">
                                                    <h3 class="m-top-sm">102</h3>
                                                    <small class="m-bottom-sm block">New Visits</small>
                                                </div>
                                                <div class="col-xs-4 text-center">
                                                    <h3 class="m-top-sm">690</h3>
                                                    <small class="m-bottom-sm block">Bounce Rate</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- ./smart-widget-inner -->
                            </div><!-- ./smart-widget -->
                        </div><!-- ./col -->
                        <div class="col-lg-6">
                            <div class="smart-widget widget-dark-blue">
                                <div class="smart-widget-header">
                                    TOTAL SALES
                                    <span class="smart-widget-option">
                                        <span class="refresh-icon-animated">
                                            <i class="fa fa-circle-o-notch fa-spin"></i>
                                        </span>
                                        <a href="#" class="widget-toggle-hidden-option">
                                            <i class="fa fa-cog"></i>
                                        </a>
                                        <a href="#" class="widget-collapse-option" data-toggle="collapse">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                        <a href="#" class="widget-refresh-option">
                                            <i class="fa fa-refresh"></i>
                                        </a>
                                        <a href="#" class="widget-remove-option">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </span>
                                </div>
                                <div class="smart-widget-inner">
                                    <div class="smart-widget-hidden-section">
                                        <ul class="widget-color-list clearfix">
                                            <li style="background-color:#20232b;" data-color="widget-dark"></li>
                                            <li style="background-color:#4c5f70;" data-color="widget-dark-blue"></li>
                                            <li style="background-color:#23b7e5;" data-color="widget-blue"></li>
                                            <li style="background-color:#2baab1;" data-color="widget-green"></li>
                                            <li style="background-color:#edbc6c;" data-color="widget-yellow"></li>
                                            <li style="background-color:#fbc852;" data-color="widget-orange"></li>
                                            <li style="background-color:#e36159;" data-color="widget-red"></li>
                                            <li style="background-color:#7266ba;" data-color="widget-purple"></li>
                                            <li style="background-color:#f5f5f5;" data-color="widget-light-grey"></li>
                                            <li style="background-color:#fff;" data-color="reset"></li>
                                        </ul>
                                    </div>
                                    <div class="smart-widget-body no-padding">
                                        <div class="padding-md">
                                            <div id="placeholder" style="height: 250px; padding: 0px; position: relative;"><canvas class="flot-base" width="437" height="250" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 437px; height: 250px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 72px; top: 233px; left: 30px; text-align: center;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 72px; top: 233px; left: 109px; text-align: center;">2</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 72px; top: 233px; left: 188px; text-align: center;">4</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 72px; top: 233px; left: 267px; text-align: center;">6</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 72px; top: 233px; left: 347px; text-align: center;">8</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 72px; top: 233px; left: 424px; text-align: center;">10</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 221px; left: 21px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 166px; left: 9px; text-align: right;">500</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 111px; left: 3px; text-align: right;">1000</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 56px; left: 4px; text-align: right;">1500</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 1px; left: 2px; text-align: right;">2000</div></div></div><canvas class="flot-overlay" width="437" height="250" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 437px; height: 250px;"></canvas></div>
                                        </div>

                                        <div class="bg-grey">
                                            <div class="row">
                                                <div class="col-xs-4 text-center">
                                                    <h3 class="m-top-sm">3491</h3>
                                                    <small class="m-bottom-sm block">Total Sales</small>
                                                </div>
                                                <div class="col-xs-4 text-center">
                                                    <h3 class="m-top-sm">721</h3>
                                                    <small class="m-bottom-sm block">New Orders</small>
                                                </div>
                                                <div class="col-xs-4 text-center">
                                                    <h3 class="m-top-sm">$8103</h3>
                                                    <small class="m-bottom-sm block">Total Earnings</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- ./smart-widget-inner -->
                            </div><!-- ./smart-widget -->
                        </div><!-- ./col -->
                    </div>

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="smart-widget">
                                        <div class="smart-widget-header">
                                            <i class="fa fa-calendar m-right-xs"></i>Calendar
                                            <span class="smart-widget-option">
                                                <span class="refresh-icon-animated">
                                                    <i class="fa fa-circle-o-notch fa-spin"></i>
                                                </span>
                                                <a href="#" class="widget-toggle-hidden-option">
                                                    <i class="fa fa-cog"></i>
                                                </a>
                                                <a href="#" class="widget-collapse-option" data-toggle="collapse">
                                                    <i class="fa fa-chevron-up"></i>
                                                </a>
                                                <a href="#" class="widget-refresh-option">
                                                    <i class="fa fa-refresh"></i>
                                                </a>
                                                <a href="#" class="widget-remove-option">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </span>
                                        </div>
                                        <div class="smart-widget-inner">
                                            <div class="smart-widget-hidden-section">
                                                <ul class="widget-color-list clearfix">
                                                    <li style="background-color:#20232b;" data-color="widget-dark"></li>
                                                    <li style="background-color:#4c5f70;" data-color="widget-dark-blue"></li>
                                                    <li style="background-color:#23b7e5;" data-color="widget-blue"></li>
                                                    <li style="background-color:#2baab1;" data-color="widget-green"></li>
                                                    <li style="background-color:#edbc6c;" data-color="widget-yellow"></li>
                                                    <li style="background-color:#fbc852;" data-color="widget-orange"></li>
                                                    <li style="background-color:#e36159;" data-color="widget-red"></li>
                                                    <li style="background-color:#7266ba;" data-color="widget-purple"></li>
                                                    <li style="background-color:#f5f5f5;" data-color="widget-light-grey"></li>
                                                    <li style="background-color:#fff;" data-color="reset"></li>
                                                </ul>
                                            </div>
                                            <div class="smart-widget-body no-padding bg-grey">
                                                <p id="calendar" class="custom-calendar no-margin full-width"><div class="datepicker" id="datepicker_253" style="display: block; position: relative; width: 338px; height: 243px;"><div class="datepickerBorderT"></div><div class="datepickerBorderB"></div><div class="datepickerBorderL"></div><div class="datepickerBorderR"></div><div class="datepickerBorderTL"></div><div class="datepickerBorderTR"></div><div class="datepickerBorderBL"></div><div class="datepickerBorderBR"></div><div class="datepickerContainer" style="height: 223px;"><table cellspacing="0" cellpadding="0"><tbody><tr><td><table cellspacing="0" cellpadding="0" class="datepickerViewDays"><thead><tr><th class="datepickerGoPrev"><a href="#"><span>◀</span></a></th><th colspan="6" class="datepickerMonth"><a href="#"><span>June, 2014</span></a></th><th class="datepickerGoNext"><a href="#"><span>▶</span></a></th></tr><tr class="datepickerDoW"><th><span>wk</span></th><th><span>Mo</span></th><th><span>Tu</span></th><th><span>We</span></th><th><span>Th</span></th><th><span>Fr</span></th><th><span>Sa</span></th><th><span>Su</span></th></tr></thead><tbody class="datepickerMonths"><tr><td colspan="2"><a href="#"><span>Jan</span></a></td><td colspan="2"><a href="#"><span>Feb</span></a></td><td colspan="2"><a href="#"><span>Mar</span></a></td><td colspan="2"><a href="#"><span>Apr</span></a></td></tr><tr><td colspan="2"><a href="#"><span>May</span></a></td><td colspan="2"><a href="#"><span>Jun</span></a></td><td colspan="2"><a href="#"><span>Jul</span></a></td><td colspan="2"><a href="#"><span>Aug</span></a></td></tr><tr><td colspan="2"><a href="#"><span>Sep</span></a></td><td colspan="2"><a href="#"><span>Oct</span></a></td><td colspan="2"><a href="#"><span>Nov</span></a></td><td colspan="2"><a href="#"><span>Dec</span></a></td></tr></tbody><tbody class="datepickerDays"><tr><th class="datepickerWeek"><a href="#"><span>22</span></a></th><td class="datepickerNotInMonth"><a href="#"><span>26</span></a></td><td class="datepickerNotInMonth"><a href="#"><span>27</span></a></td><td class="datepickerNotInMonth"><a href="#"><span>28</span></a></td><td class="datepickerNotInMonth"><a href="#"><span>29</span></a></td><td class="datepickerNotInMonth"><a href="#"><span>30</span></a></td><td class="datepickerNotInMonth datepickerSaturday"><a href="#"><span>31</span></a></td><td class="datepickerSunday"><a href="#"><span>1</span></a></td></tr><tr><th class="datepickerWeek"><a href="#"><span>23</span></a></th><td class=""><a href="#"><span>2</span></a></td><td class=""><a href="#"><span>3</span></a></td><td class=""><a href="#"><span>4</span></a></td><td class=""><a href="#"><span>5</span></a></td><td class=""><a href="#"><span>6</span></a></td><td class="datepickerSaturday datepickerSelected"><a href="#"><span>7</span></a></td><td class="datepickerSunday"><a href="#"><span>8</span></a></td></tr><tr><th class="datepickerWeek"><a href="#"><span>24</span></a></th><td class=""><a href="#"><span>9</span></a></td><td class=""><a href="#"><span>10</span></a></td><td class=""><a href="#"><span>11</span></a></td><td class=""><a href="#"><span>12</span></a></td><td class=""><a href="#"><span>13</span></a></td><td class="datepickerSaturday"><a href="#"><span>14</span></a></td><td class="datepickerSunday"><a href="#"><span>15</span></a></td></tr><tr><th class="datepickerWeek"><a href="#"><span>25</span></a></th><td class=""><a href="#"><span>16</span></a></td><td class=""><a href="#"><span>17</span></a></td><td class=""><a href="#"><span>18</span></a></td><td class=""><a href="#"><span>19</span></a></td><td class=""><a href="#"><span>20</span></a></td><td class="datepickerSaturday"><a href="#"><span>21</span></a></td><td class="datepickerSunday"><a href="#"><span>22</span></a></td></tr><tr><th class="datepickerWeek"><a href="#"><span>26</span></a></th><td class=""><a href="#"><span>23</span></a></td><td class=""><a href="#"><span>24</span></a></td><td class=""><a href="#"><span>25</span></a></td><td class=""><a href="#"><span>26</span></a></td><td class=""><a href="#"><span>27</span></a></td><td class="datepickerSaturday"><a href="#"><span>28</span></a></td><td class="datepickerSunday"><a href="#"><span>29</span></a></td></tr><tr><th class="datepickerWeek"><a href="#"><span>27</span></a></th><td class=""><a href="#"><span>30</span></a></td><td class="datepickerNotInMonth"><a href="#"><span>1</span></a></td><td class="datepickerNotInMonth"><a href="#"><span>2</span></a></td><td class="datepickerNotInMonth"><a href="#"><span>3</span></a></td><td class="datepickerNotInMonth"><a href="#"><span>4</span></a></td><td class="datepickerNotInMonth datepickerSaturday"><a href="#"><span>5</span></a></td><td class="datepickerNotInMonth datepickerSunday"><a href="#"><span>6</span></a></td></tr></tbody><tbody class="datepickerYears"><tr><td colspan="2"><a href="#"><span>2008</span></a></td><td colspan="2"><a href="#"><span>2009</span></a></td><td colspan="2"><a href="#"><span>2010</span></a></td><td colspan="2"><a href="#"><span>2011</span></a></td></tr><tr><td colspan="2"><a href="#"><span>2012</span></a></td><td colspan="2"><a href="#"><span>2013</span></a></td><td colspan="2"><a href="#"><span>2014</span></a></td><td colspan="2"><a href="#"><span>2015</span></a></td></tr><tr><td colspan="2"><a href="#"><span>2016</span></a></td><td colspan="2"><a href="#"><span>2017</span></a></td><td colspan="2"><a href="#"><span>2018</span></a></td><td colspan="2"><a href="#"><span>2019</span></a></td></tr></tbody></table></td></tr></tbody></table></div></div></p>
                                            </div>
                                            <ul class="list-group no-border">
                                                <li class="list-group-item">
                                                    Meeting
                                                    <span class="badge badge-success">7:30</span>
                                                </li>
                                                <li class="list-group-item">
                                                    Database Migration
                                                    <span class="badge badge-danger">11:15</span>
                                                </li>
                                            </ul>
                                        </div><!-- ./smart-widget-inner -->
                                    </div><!-- ./smart-widget -->
                                </div><!-- ./col -->
                                <div class="col-lg-6">
                                    <div class="smart-widget widget-purple">
                                        <div class="smart-widget-header">
                                            <i class="fa fa-comment"></i> Chat
                                            <span class="smart-widget-option">
                                                <span class="refresh-icon-animated">
                                                    <i class="fa fa-circle-o-notch fa-spin"></i>
                                                </span>
                                                <a href="#" class="widget-toggle-hidden-option">
                                                    <i class="fa fa-cog"></i>
                                                </a>
                                                <a href="#" class="widget-collapse-option" data-toggle="collapse">
                                                    <i class="fa fa-chevron-up"></i>
                                                </a>
                                                <a href="#" class="widget-refresh-option">
                                                    <i class="fa fa-refresh"></i>
                                                </a>
                                                <a href="#" class="widget-remove-option">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </span>
                                        </div>
                                        <div class="smart-widget-inner">
                                            <div class="smart-widget-hidden-section">
                                                <ul class="widget-color-list clearfix">
                                                    <li style="background-color:#20232b;" data-color="widget-dark"></li>
                                                    <li style="background-color:#4c5f70;" data-color="widget-dark-blue"></li>
                                                    <li style="background-color:#23b7e5;" data-color="widget-blue"></li>
                                                    <li style="background-color:#2baab1;" data-color="widget-green"></li>
                                                    <li style="background-color:#edbc6c;" data-color="widget-yellow"></li>
                                                    <li style="background-color:#fbc852;" data-color="widget-orange"></li>
                                                    <li style="background-color:#e36159;" data-color="widget-red"></li>
                                                    <li style="background-color:#7266ba;" data-color="widget-purple"></li>
                                                    <li style="background-color:#f5f5f5;" data-color="widget-light-grey"></li>
                                                    <li style="background-color:#fff;" data-color="reset"></li>
                                                </ul>
                                            </div>
                                            <div class="smart-widget-body">
                                                <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 230px;"><div id="chatScroll" style="overflow: hidden; width: auto; height: 230px;">
                                                        <ul class="chat">
                                                            <li class="left clearfix">
                                                                <span class="chat-img pull-left">
                                                                    <img src="images/profile/profile2.jpg" alt="User Avatar">
                                                                </span>
                                                                <div class="chat-body clearfix">
                                                                    <div class="header">
                                                                        <strong class="primary-font">John Doe</strong>
                                                                        <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 12 mins ago</small>
                                                                    </div>
                                                                    <p>
                                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                    </p>
                                                                </div>
                                                            </li>
                                                            <li class="right clearfix">
                                                                <span class="chat-img pull-right">
                                                                    <img src="images/profile/profile3.jpg" alt="User Avatar">
                                                                </span>
                                                                <div class="chat-body clearfix">
                                                                    <div class="header">
                                                                        <strong class="primary-font">Jane Doe</strong>
                                                                        <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 13 mins ago</small>
                                                                    </div>
                                                                    <p>
                                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. 
                                                                    </p>
                                                                </div>
                                                            </li>
                                                            <li class="left clearfix">
                                                                <span class="chat-img pull-left">
                                                                    <img src="images/profile/profile2.jpg" alt="User Avatar">
                                                                </span>
                                                                <div class="chat-body clearfix">
                                                                    <div class="header">
                                                                        <strong class="primary-font">John Doe</strong>
                                                                        <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 20 mins ago</small>
                                                                    </div>
                                                                    <p>
                                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                                                    </p>
                                                                </div>
                                                            </li>
                                                            <li class="right clearfix">
                                                                <span class="chat-img pull-right">
                                                                    <img src="images/profile/profile3.jpg" alt="User Avatar">
                                                                </span>
                                                                <div class="chat-body clearfix">
                                                                    <div class="header">
                                                                        <strong class="primary-font">Jane Doe</strong>
                                                                        <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 25 mins ago</small>
                                                                    </div>
                                                                    <p>
                                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales at. 
                                                                    </p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div><div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 124.764px; background: rgb(0, 0, 0);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div></div>
                                            </div>
                                            <div class="smart-widget-footer">
                                                <div class="input-group">
                                                    <input id="btn-input" type="text" class="form-control input-sm" placeholder="type your message here...">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-success btn-sm no-shadow" id="btn-chat">Send</button>
                                                    </span>
                                                </div><!-- /input-group -->
                                            </div><!-- ./smart-widget-footer -->
                                        </div><!-- ./smart-widget-inner -->
                                    </div><!-- ./smart-widget -->
                                </div><!-- ./col -->
                            </div><!-- ./row -->

                            <div class="smart-widget">
                                <div class="smart-widget-header">
                                    Website Statistic
                                    <span class="smart-widget-option">
                                        <span class="refresh-icon-animated">
                                            <i class="fa fa-circle-o-notch fa-spin"></i>
                                        </span>
                                        <a href="#" class="widget-toggle-hidden-option">
                                            <i class="fa fa-cog"></i>
                                        </a>
                                        <a href="#" class="widget-collapse-option" data-toggle="collapse">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                        <a href="#" class="widget-refresh-option">
                                            <i class="fa fa-refresh"></i>
                                        </a>
                                        <a href="#" class="widget-remove-option">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </span>
                                </div>
                                <div class="smart-widget-inner table-responsive">
                                    <div class="smart-widget-hidden-section">
                                        <ul class="widget-color-list clearfix">
                                            <li style="background-color:#20232b;" data-color="widget-dark"></li>
                                            <li style="background-color:#4c5f70;" data-color="widget-dark-blue"></li>
                                            <li style="background-color:#23b7e5;" data-color="widget-blue"></li>
                                            <li style="background-color:#2baab1;" data-color="widget-green"></li>
                                            <li style="background-color:#edbc6c;" data-color="widget-yellow"></li>
                                            <li style="background-color:#fbc852;" data-color="widget-orange"></li>
                                            <li style="background-color:#e36159;" data-color="widget-red"></li>
                                            <li style="background-color:#7266ba;" data-color="widget-purple"></li>
                                            <li style="background-color:#f5f5f5;" data-color="widget-light-grey"></li>
                                            <li style="background-color:#fff;" data-color="reset"></li>
                                        </ul>
                                    </div>
                                    <table class="table table-striped no-margin">
                                        <thead>
                                            <tr>
                                                <th class="text-right">Date</th>
                                                <th class="text-right">Database Usage</th>
                                                <th class="text-right">CPU Usage</th>
                                                <th class="text-right">Memory Usage</th>
                                                <th class="text-right">Total Disk Usage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-right">July, 11</td>
                                                <td class="text-right">31.05%</td>
                                                <td class="text-right">65.12%</td>
                                                <td class="text-right">86.41%</td>
                                                <td class="text-right">
                                                    <div class="progress progress-sm inline-block m-bottom-none" style="width:100px; margin-top:6px">
                                                        <div class="progress-bar progress-bar-success" style="width: 54.41%;">
                                                            <span class="sr-only">54.41% Complete</span>
                                                        </div>
                                                    </div>

                                                    <span class="m-left-sm vertical-top">54.41%</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-right">July, 12</td>
                                                <td class="text-right">48.99%</td>
                                                <td class="text-right">72.31%</td>
                                                <td class="text-right">74.21%</td>
                                                <td class="text-right">
                                                    <div class="progress progress-sm inline-block m-bottom-none" style="width:100px; margin-top:6px">
                                                        <div class="progress-bar progress-bar-warning" style="width: 69.92%;">
                                                            <span class="sr-only">69.92% Complete</span>
                                                        </div>
                                                    </div>

                                                    <span class="m-left-sm vertical-top">69.92%</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-right">July, 13</td>
                                                <td class="text-right">13.68%</td>
                                                <td class="text-right">32.31%</td>
                                                <td class="text-right">50.82%</td>
                                                <td class="text-right">
                                                    <div class="progress progress-sm inline-block m-bottom-none" style="width:100px; margin-top:6px">
                                                        <div class="progress-bar progress-bar-danger" style="width: 43.17%;">
                                                            <span class="sr-only">43.17% Complete</span>
                                                        </div>
                                                    </div>

                                                    <span class="m-left-sm vertical-top">43.17%</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-right">July, 14</td>
                                                <td class="text-right">9.23%</td>
                                                <td class="text-right">11.91%</td>
                                                <td class="text-right">10.21%</td>
                                                <td class="text-right">
                                                    <div class="progress progress-sm inline-block m-bottom-none" style="width:100px; margin-top:6px">
                                                        <div class="progress-bar progress-bar-success" style="width: 12.11%;">
                                                            <span class="sr-only">12.11% Complete</span>
                                                        </div>
                                                    </div>

                                                    <span class="m-left-sm vertical-top">12.11%</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div><!-- ./smart-widget-inner -->
                            </div><!-- ./smart-widget -->
                        </div><!-- ./col -->
                        <div class="col-lg-4">
                            <div class="smart-widget">
                                <div class="smart-widget-header">
                                    <span class="badge badge-danger pull-right">10</span>
                                    To Do List
                                </div>
                                <div class="smart-widget-inner">
                                    <div class="smart-widget-body clearfix">
                                        <div class="search-input pull-left">
                                            <input type="text" class="form-control input-sm">
                                            <a href="#" class="input-icon text-normal"><i class="ion-ios7-search-strong"></i></a>
                                        </div>
                                        <a class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> Add Task</a>
                                    </div>
                                    <ul class="list-group to-do-list sortable-list no-border">
                                        <li class="list-group-item" draggable="true">
                                            <div class="custom-checkbox todo-checkbox">
                                                <input type="checkbox" value="None" id="todo-check1">
                                                <label for="todo-check1"></label>
                                            </div>
                                            SEO Optimisation
                                            <div class="remove-list">
                                                <i class="ion-close"></i>
                                            </div>
                                        </li>
                                        <li class="list-group-item" draggable="true">
                                            <div class="custom-checkbox todo-checkbox">
                                                <input type="checkbox" id="todo-check2">
                                                <label for="todo-check2"></label>
                                            </div>
                                            Unit Testing
                                            <div class="remove-list">
                                                <i class="ion-close"></i>
                                            </div>
                                        </li>
                                        <li class="list-group-item" draggable="true">
                                            <div class="custom-checkbox todo-checkbox">
                                                <input type="checkbox" id="todo-check3">
                                                <label for="todo-check3"></label>
                                            </div>
                                            Mobile Development
                                            <div class="remove-list">
                                                <i class="ion-close"></i>
                                            </div>
                                        </li>
                                        <li class="list-group-item" draggable="true">
                                            <div class="custom-checkbox todo-checkbox">
                                                <input type="checkbox" id="todo-check4">
                                                <label for="todo-check4"></label>
                                            </div>
                                            Database Migration
                                            <div class="remove-list">
                                                <i class="ion-close"></i>
                                            </div>
                                        </li>
                                        <li class="list-group-item" draggable="true">
                                            <div class="custom-checkbox todo-checkbox">
                                                <input type="checkbox" id="todo-check5">
                                                <label for="todo-check5"></label>
                                            </div>
                                            New Frontend Layout 
                                            <div class="remove-list">
                                                <i class="ion-close"></i>
                                            </div>
                                        </li>
                                        <li class="list-group-item" draggable="true">
                                            <div class="custom-checkbox todo-checkbox">
                                                <input type="checkbox" id="todo-check6">
                                                <label for="todo-check6"></label>
                                            </div>
                                            Bug Fixes 
                                            <div class="remove-list">
                                                <i class="ion-close"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div><!-- ./smart-widget-inner -->
                            </div><!-- ./smart-widget -->
                            <div class="task-widget">
                                <div class="task-widget-body clearfix">
                                    <div class="pie-chart-wrapper">
                                        <div class="chart task-pie-chart line-normal" data-percent="73">
                                            <h1 class="m-top-lg m-bottom-none">73</h1>
                                            <div>Percent</div>
                                            <canvas height="140" width="140"></canvas></div>
                                    </div>
                                    <div class="widget-detail">
                                        <small class="text-upper text-muted block font-sm">Task Completed</small>
                                        <h1 class="no-margin">4312</h1>
                                    </div>
                                </div><!-- ./task-widget-body -->
                                <div class="task-widget-statatistic">
                                    <ul class="clearfix">
                                        <li class="bg-grey border-success">
                                            <div class="text-muted text-upper font-sm">Remaining</div>
                                            2311
                                        </li>
                                        <li class="bg-grey border-danger">
                                            <div class="text-muted text-upper font-sm">In Progress</div>
                                            3212
                                        </li>
                                        <li class="bg-grey border-purple">
                                            <div class="text-muted text-upper font-sm">Budget</div>
                                            $17.1M
                                        </li>
                                    </ul><!-- ./row -->
                                </div>
                            </div><!-- ./task-widget -->
                        </div><!-- ./col -->
                    </div><!-- ./row -->

                    <div class="row">
                        <div class="col-md-3">
                            <div class="panel panel-default weather-widget">
                                <div class="panel-body bg-success text-white">
                                    <div class="h4 text-white text-center">Today Weather</div>

                                    <div class="m-top-md m-bottom-md text-center">
                                        <canvas id="skycon1" width="120" height="120"></canvas>
                                    </div>

                                    <div class="degree-text text-center">22°</div>
                                </div>
                                <div class="panel-footer bg-white text-center padding-md">
                                    <div class="h4 text-upper">New York <i class="fa fa-map-marker"></i></div>
                                    <div class="text-muted font-12 m-top-xs">Rainy Day</div>
                                </div>
                            </div><!-- ./panel -->
                        </div><!-- ./col -->
                        <div class="col-md-3">
                            <div class="panel panel-default weather-widget">
                                <div class="panel-body bg-warning text-white">
                                    <div class="h4 text-white text-center">Today Weather</div>

                                    <div class="m-top-md m-bottom-md text-center">
                                        <canvas id="skycon2" width="120" height="120"></canvas>
                                    </div>

                                    <div class="degree-text text-center">37°</div>
                                </div>
                                <div class="panel-footer bg-white text-center padding-md">
                                    <div class="h4 text-upper">London <i class="fa fa-map-marker"></i></div>
                                    <div class="text-muted font-12 m-top-xs">Cloudy Day</div>
                                </div>
                            </div><!-- ./panel -->
                        </div><!-- ./col -->
                        <div class="col-md-3">
                            <div class="panel panel-default weather-widget">
                                <div class="panel-body bg-danger text-white">
                                    <div class="h4 text-white text-center">Today Weather</div>

                                    <div class="m-top-md m-bottom-md text-center">
                                        <canvas id="skycon3" width="120" height="120"></canvas>
                                    </div>

                                    <div class="degree-text text-center">21°</div>
                                </div>
                                <div class="panel-footer bg-white text-center padding-md">
                                    <div class="h4 text-upper">Bangkok <i class="fa fa-map-marker"></i></div>
                                    <div class="text-muted font-12 m-top-xs">Wind</div>
                                </div>
                            </div><!-- ./panel -->
                        </div><!-- ./col -->
                        <div class="col-md-3">
                            <div class="panel panel-default weather-widget">
                                <div class="panel-body bg-info text-white">
                                    <div class="h4 text-white text-center">Today Weather</div>

                                    <div class="m-top-md m-bottom-md text-center">
                                        <canvas id="skycon4" width="120" height="120"></canvas>
                                    </div>

                                    <div class="degree-text text-center">14°</div>
                                </div>
                                <div class="panel-footer bg-white text-center padding-md">
                                    <div class="h4 text-upper">Tokyo <i class="fa fa-map-marker"></i></div>
                                    <div class="text-muted font-12 m-top-xs">Clear Day</div>
                                </div>
                            </div><!-- ./panel -->
                        </div><!-- ./col -->
                    </div>
                </div><!-- ./padding-md -->
            </div><!-- /main-container -->

            <footer class="footer">
                <span class="footer-brand">
                    <strong class="text-danger">Simplify</strong> Admin
                </span>
                <p class="no-margin">
                    © 2014 <strong>Simplify Admin</strong>. ALL Rights Reserved. 
                </p>	
            </footer>
        </div><!-- /wrapper -->

        <a href="#" class="scroll-to-top hidden-print"><i class="fa fa-chevron-up fa-lg"></i></a>

        <!-- Delete Widget Confirmation -->



        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

        <!-- Jquery -->
        <script src="js/jquery-1.11.1.min.js"></script>

        <!-- Bootstrap -->
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <!-- Flot -->
        <script src="js/jquery.flot.min.js"></script>

        <!-- Slimscroll -->
        <script src="js/jquery.slimscroll.min.js"></script>

        <!-- Morris -->
        <script src="js/rapheal.min.js"></script>	
        <script src="js/morris.min.js"></script>	

        <!-- Datepicker -->
        <script src="js/uncompressed/datepicker.js"></script>

        <!-- Sparkline -->
        <script src="js/sparkline.min.js"></script>

        <!-- Skycons -->
        <script src="js/uncompressed/skycons.js"></script>

        <!-- Popup Overlay -->
        <script src="js/jquery.popupoverlay.min.js"></script>

        <!-- Easy Pie Chart -->
        <script src="js/jquery.easypiechart.min.js"></script>

        <!-- Sortable -->
        <script src="js/uncompressed/jquery.sortable.js"></script>

        <!-- Owl Carousel -->
        <script src="js/owl.carousel.min.js"></script>

        <!-- Modernizr -->
        <script src="js/modernizr.min.js"></script>

        <!-- Simplify -->
        <script src="js/simplify/simplify.js"></script>
        <script src="js/simplify/simplify_dashboard.js"></script>


        <script>
            $(function () {
                $('.chart').easyPieChart({
                    easing: 'easeOutBounce',
                    size: '140',
                    lineWidth: '7',
                    barColor: '#7266ba',
                    onStep: function (from, to, percent) {
                        $(this.el).find('.percent').text(Math.round(percent));
                    }
                });

                $('.sortable-list').sortable();

                $('.todo-checkbox').click(function () {

                    var _activeCheckbox = $(this).find('input[type="checkbox"]');

                    if (_activeCheckbox.is(':checked')) {
                        $(this).parent().addClass('selected');
                    }
                    else {
                        $(this).parent().removeClass('selected');
                    }

                });

                //Delete Widget Confirmation
                $('#deleteWidgetConfirm').popup({
                    vertical: 'top',
                    pagecontainer: '.container',
                    transition: 'all 0.3s'
                });
            });

        </script>



        <div id="tooltip" style="position: absolute; display: none; border: 1px solid rgb(34, 34, 34); padding: 4px; color: rgb(255, 255, 255); border-radius: 4px; opacity: 0.9; background-color: rgb(0, 0, 0);"></div>
    </body>
</html>
