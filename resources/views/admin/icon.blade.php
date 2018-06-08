<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Apricot 1.3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/loader-style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link href="assets/css/icons-style.css" rel="stylesheet">


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/minus.png">
</head>

<body>
<div id="awwwards" class="right black"><a
            href="http://www.awwwards.com/best-websites/apricot-navigation-admin-dashboard-template" target="_blank">best
        websites of the world</a></div>
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- TOP NAVBAR -->
<nav role="navigation" class="navbar navbar-static-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle"
                    type="button">
                <span class="entypo-menu"></span>
            </button>
            <button class="navbar-toggle toggle-menu-mobile toggle-left" type="button">
                <span class="entypo-list-add"></span>
            </button>


            <div id="logo-mobile" class="visible-xs">
                <h1>Apricot<span>v1.3</span></h1>
            </div>

        </div>


        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">

                <li class="dropdown">

                    <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i style="font-size:20px;"
                                                                                  class="icon-conversation"></i>
                        <div class="noft-red">23</div>
                    </a>


                    <ul style="margin: 11px 0 0 9px;" role="menu" class="dropdown-menu dropdown-wrap">
                        <li>
                            <a href="#">
                                <img alt="" class="img-msg img-circle"
                                     src="http://api.randomuser.me/portraits/thumb/men/1.jpg">Jhon Doe <b>Just Now</b>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <img alt="" class="img-msg img-circle"
                                     src="http://api.randomuser.me/portraits/thumb/women/1.jpg">Jeniffer <b>3 Min
                                    Ago</b>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <img alt="" class="img-msg img-circle"
                                     src="http://api.randomuser.me/portraits/thumb/men/2.jpg">Dave <b>2 Hours Ago</b>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <img alt="" class="img-msg img-circle"
                                     src="http://api.randomuser.me/portraits/thumb/men/3.jpg"><i>Keanu</i> <b>1 Day
                                    Ago</b>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <img alt="" class="img-msg img-circle"
                                     src="http://api.randomuser.me/portraits/thumb/men/4.jpg"><i>Masashi</i> <b>2 Mounth
                                    Ago</b>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div>See All Messege</div>
                        </li>
                    </ul>
                </li>
                <li>

                    <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i style="font-size:19px;"
                                                                                  class="icon-warning tooltitle"></i>
                        <div class="noft-green">5</div>
                    </a>
                    <ul style="margin: 12px 0 0 0;" role="menu" class="dropdown-menu dropdown-wrap">
                        <li>
                            <a href="#">
                                <span style="background:#DF2135" class="noft-icon maki-bus"></span><i>From Station</i>
                                <b>01B</b>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <span style="background:#AB6DB0" class="noft-icon maki-ferry"></span><i>Departing at</i>
                                <b>9:00 AM</b>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <span style="background:#FFA200" class="noft-icon maki-aboveground-rail"></span><i>Delay
                                    for</i> <b>09 Min</b>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <span style="background:#86C440" class="noft-icon maki-airport"></span><i>Take of</i>
                                <b>08:30 AM</b>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <span style="background:#0DB8DF" class="noft-icon maki-bicycle"></span><i>Take of</i>
                                <b>08:30 AM</b>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div>See All Notification</div>
                        </li>
                    </ul>
                </li>
                <li><a href="#"><i data-toggle="tooltip" data-placement="bottom" title="Help" style="font-size:20px;"
                                   class="icon-help tooltitle"></i></a>
                </li>

            </ul>
            <div id="nt-title-container" class="navbar-left running-text visible-lg">
                <ul class="date-top">
                    <li class="entypo-calendar" style="margin-right:5px"></li>
                    <li id="Date"></li>


                </ul>

                <ul id="digital-clock" class="digital">
                    <li class="entypo-clock" style="margin-right:5px"></li>
                    <li class="hour"></li>
                    <li>:</li>
                    <li class="min"></li>
                    <li>:</li>
                    <li class="sec"></li>
                    <li class="meridiem"></li>
                </ul>
                <ul id="nt-title">
                    <li><i class="wi-day-lightning"></i>&#160;&#160;Berlin&#160;
                        <b>85</b><i class="wi-fahrenheit"></i>&#160;; 15km/h
                    </li>
                    <li><i class="wi-day-lightning"></i>&#160;&#160;Yogyakarta&#160;
                        <b>85</b><i class="wi-fahrenheit"></i>&#160;; Tonight- 72 °F (22.2 °C)
                    </li>

                    <li><i class="wi-day-lightning"></i>&#160;&#160;Sttugart&#160;
                        <b>85</b><i class="wi-fahrenheit"></i>&#160;; 15km/h
                    </li>

                    <li><i class="wi-day-lightning"></i>&#160;&#160;Muchen&#160;
                        <b>85</b><i class="wi-fahrenheit"></i>&#160;; 15km/h
                    </li>

                    <li><i class="wi-day-lightning"></i>&#160;&#160;Frankurt&#160;
                        <b>85</b><i class="wi-fahrenheit"></i>&#160;; 15km/h
                    </li>

                </ul>
            </div>

            <ul style="margin-right:0;" class="nav navbar-nav navbar-right">
                <li>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" class="admin-pic img-circle"
                             src="http://api.randomuser.me/portraits/thumb/men/10.jpg">Hi, Dave Mattew <b
                                class="caret"></b>
                    </a>
                    <ul style="margin-top:14px;" role="menu" class="dropdown-setting dropdown-menu">
                        <li>
                            <a href="#">
                                <span class="entypo-user"></span>&#160;&#160;My Profile</a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="entypo-vcard"></span>&#160;&#160;Account Setting</a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="entypo-lifebuoy"></span>&#160;&#160;Help</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="http://themeforest.net/item/apricot-navigation-admin-dashboard-template/7664475?WT.ac=category_item&WT.z_author=themesmile">
                                <span class="entypo-basket"></span>&#160;&#160; Purchase</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="icon-gear"></span>&#160;&#160;Setting</a>
                    <ul role="menu" class="dropdown-setting dropdown-menu">

                        <li class="theme-bg">
                            <div id="button-bg"></div>
                            <div id="button-bg2"></div>
                            <div id="button-bg3"></div>
                            <div id="button-bg5"></div>
                            <div id="button-bg6"></div>
                            <div id="button-bg7"></div>
                            <div id="button-bg8"></div>
                            <div id="button-bg9"></div>
                            <div id="button-bg10"></div>
                            <div id="button-bg11"></div>
                            <div id="button-bg12"></div>
                            <div id="button-bg13"></div>
                        </li>
                    </ul>
                </li>
                <li class="hidden-xs">
                    <a class="toggle-left" href="#">
                        <span style="font-size:20px;" class="entypo-list-add"></span>
                    </a>
                </li>
            </ul>

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- /END OF TOP NAVBAR -->

<!-- SIDE MENU -->
<div id="skin-select">
    <div id="logo">
        <h1>Apricot<span>v1.3</span></h1>
    </div>

    <a id="toggle">
        <span class="entypo-menu"></span>
    </a>
    <div class="dark">
        <form action="#">
                <span>
                    <input type="text" name="search" value="" class="search rounded id_search"
                           placeholder="Search Menu..." autofocus="">
                </span>
        </form>
    </div>

    <div class="search-hover">
        <form id="demo-2">
            <input type="search" placeholder="Search Menu..." class="id_search">
        </form>
    </div>

    <div class="skin-part">
        <div id="tree-wrap">
            <div class="side-bar">
                <ul class="topnav menu-left-nest">
                    <li>
                        <a href="#" style="border-left:0px solid!important;" class="title-menu-left">

                            <span class="widget-menu"></span>
                            <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>

                        </a>
                    </li>

                    <li>
                        <a class="tooltip-tip ajax-load" href="#" title="Blog App">
                            <i class="icon-document-edit"></i>
                            <span>Blog App</span>

                        </a>
                        <ul>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="blog-list.html" title="Blog List"><i
                                            class="entypo-doc-text"></i><span>Blog List</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="blog-detail.html" title="Blog Detail"><i
                                            class="entypo-newspaper"></i><span>Blog Details</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="tooltip-tip ajax-load" href="social.html" title="Social">
                            <i class="icon-feed"></i>
                            <span>Social</span>

                        </a>
                    </li>
                    <li>
                        <a class="tooltip-tip ajax-load" href="media.html" title="Media">
                            <i class="icon-camera"></i>
                            <span>Media</span>

                        </a>
                    </li>
                </ul>

                <ul class="topnav menu-left-nest">
                    <li>
                        <a href="#" style="border-left:0px solid!important;" class="title-menu-left">

                            <span class="design-kit"></span>
                            <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>

                        </a>
                    </li>

                    <li>
                        <a class="tooltip-tip ajax-load" href="index.html" title="Dashboard">
                            <i class="icon-window"></i>
                            <span>Dashboard</span>

                        </a>
                    </li>
                    <li>
                        <a class="tooltip-tip ajax-load" href="mail.html" title="Mail">
                            <i class="icon-mail"></i>
                            <span>mail</span>
                            <div class="noft-blue">289</div>
                        </a>
                    </li>

                    <li>
                        <a class="tooltip-tip ajax-load" href="icon.html" title="Icons">
                            <i class="icon-preview"></i>
                            <span>Icons</span>
                            <div class="noft-blue" style="display: inline-block; float: none;">New</div>
                        </a>
                    </li>

                    <li>
                        <a class="tooltip-tip" href="#" title="Extra Pages">
                            <i class="icon-document-new"></i>
                            <span>Extra Page</span>
                        </a>
                        <ul>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="blank_page.html" title="Blank Page"><i
                                            class="icon-media-record"></i><span>Blank Page</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="profile.html" title="Profile Page"><i
                                            class="icon-user"></i><span>Profile Page</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="invoice.html" title="Invoice"><i
                                            class="entypo-newspaper"></i><span>Invoice</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="pricing_table.html" title="Pricing Table"><i
                                            class="fontawesome-money"></i><span>Pricing Table</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="time-line.html" title="Time Line"><i
                                            class="entypo-clock"></i><span>Time Line</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2" href="404.html" title="404 Error Page"><i
                                            class="icon-thumbs-down"></i><span>404 Error Page</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2" href="500.html" title="500 Error Page"><i
                                            class="icon-thumbs-down"></i><span>500 Error Page</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2" href="lock-screen.html" title="Lock Screen"><i
                                            class="icon-lock"></i><span>Lock Screen</span></a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class="tooltip-tip " href="login.html" title="login">
                            <i class="icon-download"></i>
                            <span>Login</span>
                        </a>
                    </li>

                </ul>

                <ul id="menu-showhide" class="topnav menu-left-nest">
                    <li>
                        <a href="#" style="border-left:0px solid!important;" class="title-menu-left">

                            <span class="component"></span>
                            <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>

                        </a>
                    </li>


                    <li>
                        <a class="tooltip-tip" href="#" title="UI Element">
                            <i class="icon-monitor"></i>
                            <span>UI Element</span>
                        </a>
                        <ul>
                            <li class="active">
                                <a class="tooltip-tip2 ajax-load" href="element.html" title="Element"><i
                                            class="icon-attachment"></i><span>Element</span></a>
                            </li>
                            <li><a class="tooltip-tip2 ajax-load" href="button.html" title="Button"><i
                                            class="icon-view-list-large"></i><span>Button</span>
                                    <div class="noft-blue-number">10</div>
                                </a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="wizard.html" title="Tab & Accordion"><i
                                            class="icon-folder"></i><span>Wizard</span>
                                    <div class="noft-purple-number">3</div>
                                </a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="calendar.html" title="Calender"><i
                                            class="icon-calendar"></i><span>Calendar</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="tree.html" title="Tree View"><i
                                            class="icon-view-list"></i><span>Tree View</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="grids.html" title="Grids"><i
                                            class="icon-menu"></i><span>Grids</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="chart.html" title="Chart"><i
                                            class="icon-graph-pie"></i><span>Chart</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip ajax-load" href="typhography.html" title="Typhoghrapy">
                                    <i class="icon-information"></i>
                                    <span>Typhoghrapy</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="tooltip-tip" href="#" title="Form">
                            <i class="icon-document"></i>
                            <span>Form</span>
                        </a>
                        <ul>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="form-element.html" title="Form Elements"><i
                                            class="icon-document-edit"></i><span>Form Elements</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="andvance-form.html" title="Andvance Form"><i
                                            class="icon-map"></i><span>Andvance Form</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="text-editor.html" title="Text Editor"><i
                                            class="icon-code"></i><span>Text Editor</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="file-upload.html" title="File Upload"><i
                                            class="icon-upload"></i><span>File Upload</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="tooltip-tip" href="#" title="Tables">
                            <i class="icon-view-thumb"></i>
                            <span>Tables</span>
                        </a>
                        <ul>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="table-static.html" title="Table Static"><i
                                            class="entypo-layout"></i><span>Table Static</span></a>
                            </li>
                            <li>
                                <a class="tooltip-tip2 ajax-load" href="table-dynamic.html" title="Table Dynamic"><i
                                            class="entypo-menu"></i><span>Table Dynamic</span></a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a class="tooltip-tip ajax-load" href="map.html" title="Map">
                            <i class="icon-location"></i>
                            <span>Map</span>

                        </a>
                    </li>
                </ul>


                <div class="side-dash">
                    <h3>
                        <span>Device</span>
                    </h3>
                    <ul class="side-dashh-list">
                        <li>Avg. Traffic
                            <span>25k<i style="color:#44BBC1;" class="fa fa-arrow-circle-up"></i>
                                </span>
                        </li>
                        <li>Visitors
                            <span>80%<i style="color:#AB6DB0;" class="fa fa-arrow-circle-down"></i>
                                </span>
                        </li>
                        <li>Convertion Rate
                            <span>13m<i style="color:#19A1F9;" class="fa fa-arrow-circle-up"></i>
                                </span>
                        </li>
                    </ul>
                    <h3>
                        <span>Traffic</span>
                    </h3>
                    <ul class="side-bar-list">
                        <li>Avg. Traffic
                            <div class="linebar">5,7,8,9,3,5,3,8,5</div>
                        </li>
                        <li>Visitors
                            <div class="linebar2">9,7,8,9,5,9,6,8,7</div>
                        </li>
                        <li>Convertion Rate
                            <div class="linebar3">5,7,8,9,3,5,3,8,5</div>
                        </li>
                    </ul>
                    <h3>
                        <span>Visitors</span>
                    </h3>
                    <div id="g1" style="height:180px" class="gauge"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END OF SIDE MENU -->


<!--  PAPER WRAP -->
<div class="wrap-fluid">
    <div class="container-fluid paper-wrap bevel tlbr">


        <!-- CONTENT -->
        <!--TITLE -->
        <div class="row">
            <div id="paper-top">
                <div class="col-sm-3">
                    <h2 class="tittle-content-header">
                        <i class="icon-preview"></i>
                        <span>Icon
                            </span>
                    </h2>

                </div>

                <div class="col-sm-7">
                    <div class="devider-vertical visible-lg"></div>
                    <div class="tittle-middle-header">

                        <div class="alert">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <span class="tittle-alert entypo-info-circled"></span>
                            Welcome back,&nbsp;
                            <strong>Dave mattew!</strong>&nbsp;&nbsp;Your last sig in at Yesterday, 16:54 PM
                        </div>


                    </div>

                </div>
                <div class="col-sm-2">
                    <div class="devider-vertical visible-lg"></div>
                    <div class="btn-group btn-wigdet pull-right visible-lg">
                        <div class="btn">
                            Widget
                        </div>
                        <button data-toggle="dropdown" class="btn dropdown-toggle" type="button">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul role="menu" class="dropdown-menu">
                            <li>
                                <a href="#">
                                    <span class="entypo-plus-circled margin-iconic"></span>Add New</a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="entypo-heart margin-iconic"></span>Favorite</a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="entypo-cog margin-iconic"></span>Setting</a>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
        <!--/ TITLE -->

        <!-- BREADCRUMB -->
        <ul id="breadcrumb">
            <li>
                <span class="entypo-home"></span>
            </li>
            <li><i class="fa fa-lg fa-angle-right"></i>
            </li>
            <li><a href="#" title="Sample page 1">Home</a>
            </li>
            <li><i class="fa fa-lg fa-angle-right"></i>
            </li>
            <li><a href="#" title="Sample page 1">Icon</a>
            </li>
            <li class="pull-right">
                <div class="input-group input-widget">

                    <input style="border-radius:15px" type="text" placeholder="Search..." class="form-control">
                </div>
            </li>
        </ul>

        <!-- END OF BREADCRUMB -->


        <div class="content-wrap">
            <div class="row">
                <div class="col-sm-12">
                    <div class="nest" id="DripClose">
                        <div class="title-alt">
                            <h6>Drip Icon</h6>
                            <div class="titleClose">
                                <a class="gone" href="#DriptClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#Drip">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="Drip">
                            <p class="lead well">Vector line-icon font by <a href="http://amitjakhu.com">Amit Jakhu</a>.
                                Version 1.0
                            </p>
                            <section data-valign="center" data-cols="1" data-name="preview">
                                <div class="entypo-tooltip">
                                    <ul>
                                        <li class="icon-align-center" title="align-center"></li>

                                        <li class="icon icon-align-justify" title="align-justify">
                                        </li>
                                        <li class="icon icon-align-left" title="align-left">
                                        </li>
                                        <li class="icon icon-align-right" title="align-right">
                                        </li>
                                        <li class="icon icon-arrow-down" title="arrow-down">
                                        </li>
                                        <li class="icon icon-arrow-left" title="arrow-left">
                                        </li>
                                        <li class="icon icon-arrow-thin-down" title="arrow-thin-down">
                                        </li>
                                        <li class="icon icon-arrow-right" title="arrow-right">
                                        </li>
                                        <li class="icon icon-arrow-thin-left" title="arrow-thin-left">
                                        </li>
                                        <li class="icon icon-arrow-thin-up" title="arrow-thin-up">
                                        </li>
                                        <li class="icon icon-arrow-up" title="arrow-up">
                                        </li>
                                        <li class="icon icon-attachment" title="attachment">
                                        </li>
                                        <li class="icon icon-arrow-thin-right" title="arrow-thin-right">
                                        </li>
                                        <li class="icon icon-code" title="code">
                                        </li>
                                        <li class="icon icon-cloud" title="cloud">
                                        </li>
                                        <li class="icon icon-chevron-right" title="chevron-right">
                                        </li>
                                        <li class="icon icon-chevron-up" title="chevron-up">
                                        </li>
                                        <li class="icon icon-chevron-down" title="chevron-down">
                                        </li>
                                        <li class="icon icon-chevron-left" title="chevron-left">
                                        </li>
                                        <li class="icon icon-camera" title="camera">
                                        </li>
                                        <li class="icon icon-checkmark" title="checkmark">
                                        </li>
                                        <li class="icon icon-calendar" title="calendar">
                                        </li>
                                        <li class="icon icon-clockwise" title="clockwise">
                                        </li>
                                        <li class="icon icon-conversation" title="conversation">
                                        </li>
                                        <li class="icon icon-direction" title="direction">
                                        </li>
                                        <li class="icon icon-cross" title="cross">
                                        </li>
                                        <li class="icon icon-graph-line" title="graph-line">
                                        </li>
                                        <li class="icon icon-gear" title="gear">
                                        </li>
                                        <li class="icon icon-graph-bar" title="graph-bar">
                                        </li>
                                        <li class="icon icon-export" title="export">
                                        </li>
                                        <li class="icon icon-feed" title="feed">
                                        </li>
                                        <li class="icon icon-folder" title="folder">
                                        </li>
                                        <li class="icon icon-forward" title="forward">
                                        </li>
                                        <li class="icon icon-folder-open" title="folder-open">
                                        </li>
                                        <li class="icon icon-download" title="download">
                                        </li>
                                        <li class="icon icon-document-new" title="document-new">
                                        </li>
                                        <li class="icon icon-document-edit" title="document-edit">
                                        </li>
                                        <li class="icon icon-document" title="document">
                                        </li>
                                        <li class="icon icon-gaming" title="gaming">
                                        </li>
                                        <li class="icon icon-graph-pie" title="graph-pie">
                                        </li>
                                        <li class="icon icon-heart" title="heart">
                                        </li>
                                        <li class="icon icon-headset" title="headset">
                                        </li>
                                        <li class="icon icon-help" title="help">
                                        </li>
                                        <li class="icon icon-information" title="information">
                                        </li>
                                        <li class="icon icon-loading" title="loading">
                                        </li>
                                        <li class="icon icon-lock" title="lock">
                                        </li>
                                        <li class="icon icon-location" title="location">
                                        </li>
                                        <li class="icon icon-lock-open" title="lock-open">
                                        </li>
                                        <li class="icon icon-mail" title="mail">
                                        </li>
                                        <li class="icon icon-map" title="map">
                                        </li>
                                        <li class="icon icon-media-loop" title="media-loop">
                                        </li>
                                        <li class="icon icon-mobile-portrait" title="mobile-portrait">
                                        </li>
                                        <li class="icon icon-mobile-landscape" title="mobile-landscape">
                                        </li>
                                        <li class="icon icon-microphone" title="microphone">
                                        </li>
                                        <li class="icon icon-minus" title="minus">
                                        </li>
                                        <li class="icon icon-message" title="message">
                                        </li>
                                        <li class="icon icon-menu" title="menu">
                                        </li>
                                        <li class="icon icon-media-stop" title="media-stop">
                                        </li>
                                        <li class="icon icon-media-shuffle" title="media-shuffle">
                                        </li>
                                        <li class="icon icon-media-previous" title="media-previous">
                                        </li>
                                        <li class="icon icon-media-play" title="media-play">
                                        </li>
                                        <li class="icon icon-media-next" title="media-next">
                                        </li>
                                        <li class="icon icon-media-pause" title="media-pause">
                                        </li>
                                        <li class="icon icon-monitor" title="monitor">
                                        </li>
                                        <li class="icon icon-move" title="move">
                                        </li>
                                        <li class="icon icon-plus" title="plus">
                                        </li>
                                        <li class="icon icon-phone" title="phone">
                                        </li>
                                        <li class="icon icon-preview" title="preview">
                                        </li>
                                        <li class="icon icon-print" title="print">
                                        </li>
                                        <li class="icon icon-media-record" title="media-record">
                                        </li>
                                        <li class="icon icon-music" title="music">
                                        </li>
                                        <li class="icon icon-home" title="home">
                                        </li>
                                        <li class="icon icon-question" title="question">
                                        </li>
                                        <li class="icon icon-reply" title="reply">
                                        </li>
                                        <li class="icon icon-reply-all" title="reply-all">
                                        </li>
                                        <li class="icon icon-return" title="return">
                                        </li>
                                        <li class="icon icon-retweet" title="retweet">
                                        </li>
                                        <li class="icon icon-search" title="search">
                                        </li>
                                        <li class="icon icon-view-thumb" title="view-thumb">
                                        </li>
                                        <li class="icon icon-view-list-large" title="view-list-large">
                                        </li>
                                        <li class="icon icon-view-list" title="view-list">
                                        </li>
                                        <li class="icon icon-upload" title="upload">
                                        </li>
                                        <li class="icon icon-user-group" title="user-group">
                                        </li>
                                        <li class="icon icon-trash" title="trash">
                                        </li>
                                        <li class="icon icon-user" title="user">
                                        </li>
                                        <li class="icon icon-thumbs-up" title="thumbs-up">
                                        </li>
                                        <li class="icon icon-thumbs-down" title="thumbs-down">
                                        </li>
                                        <li class="icon icon-tablet-portrait" title="tablet-portrait">
                                        </li>
                                        <li class="icon icon-tablet-landscape" title="tablet-landscape">
                                        </li>
                                        <li class="icon icon-tag" title="tag">
                                        </li>
                                        <li class="icon icon-star" title="star">
                                        </li>
                                        <li class="icon icon-volume-full" title="volume-full">
                                        </li>
                                        <li class="icon icon-volume-off" title="volume-off">
                                        </li>
                                        <li class="icon icon-warning" title="warning">
                                        </li>
                                        <li class="icon icon-window" title="window">
                                        </li>

                                    </ul>
                                </div>
                            </section>
                            <div style="clear:both;"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="content-wrap">
            <div class="row">
                <div class="col-sm-12">
                    <div class="nest" id="WeatherClose">
                        <div class="title-alt">
                            <h6>Weather Icon</h6>
                            <div class="titleClose">
                                <a class="gone" href="#WeatherClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#Weather">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="Weather">
                            <section data-valign="center" data-cols="1" data-name="preview">
                                <p class="lead well">The Weather Icons project created and maintained by <a
                                            href="http://www.twitter.com/Erik_UX">Erik Flowers</a>. Original artwork by
                                    <a href="http://www.twitter.com/artill">Lukas Bischoff.</a>
                                </p>
                                <div class="entypo-tooltip">
                                    <ul>

                                        <li class="wi-day-cloudy-gusts" title="wi-day-cloudy-gusts"></li>
                                        <li class="wi-day-cloudy-windy" title="wi-day-cloudy-windy"></li>
                                        <li class="wi-day-cloudy" title="wi-day-cloudy"></li>
                                        <li class="wi-day-fog" title="wi-day-fog"></li>
                                        <li class="wi-day-hail" title="wi-day-hail"></li>
                                        <li class="wi-day-lightning" title="wi-day-lightning"></li>
                                        <li class="wi-day-rain-mix" title="wi-day-rain-mix"></li>
                                        <li class="wi-day-rain-wind" title="wi-day-rain-wind"></li>

                                        <li class="wi-day-rain" title="wi-day-rain"></li>

                                        <li class="wi-day-showers" title="wi-day-showers"></li>

                                        <li class="wi-day-snow" title="wi-day-snow"></li>

                                        <li class="wi-day-sprinkle" title="wi-day-sprinkle"></li>


                                        <li class="wi-day-sunny-overcast" title="wi-day-sunny-overcast"></li>

                                        <li class="wi-day-sunny" title="wi-day-sunny"></li>

                                        <li class="wi-day-storm-showers" title="wi-day-storm-showers"></li>

                                        <li class="wi-day-thunderstorm" title="wi-day-thunderstorm"></li>
                                        <li class="wi-cloudy-gusts" title="wi-cloudy-gusts"></li>

                                        <li class="wi-cloudy-windy" title="wi-cloudy-windy"></li>

                                        <li class="wi-cloudy" title="wi-cloudy"></li>

                                        <li class="wi-fog" title="wi-fog"></li>

                                        <li class="wi-hail" title="wi-hail"></li>


                                        <li class="wi-lightning" title="wi-lightning"></li>

                                        <li class="wi-rain-mix" title="wi-rain-mix"></li>

                                        <li class="wi-rain-wind" title="wi-rain-wind"></li>

                                        <li class="wi-rain" title="wi-rain"></li>

                                        <li class="wi-showers" title="wi-showers"></li>


                                        <li class="wi-snow" title="wi-snow"></li>

                                        <li class="wi-sprinkle" title="wi-sprinkle"></li>

                                        <li class="wi-storm-showers" title="wi-storm-showers"></li>

                                        <li class="wi-thunderstorm" title="wi-thunderstorm"></li>


                                        <li class="wi-night-alt-cloudy-gusts" title="wi-night-alt-cloudy-gusts"></li>

                                        <li class="wi-night-alt-cloudy-windy" title="wi-night-alt-cloudy-windy"></li>

                                        <li class="wi-night-alt-hail" title="wi-night-alt-hail"></li>

                                        <li class="wi-night-alt-lightning" title="wi-night-alt-lightning"></li>

                                        <li class="wi-night-alt-rain-mix" title="wi-night-alt-rain-mix"></li>

                                        <li class="wi-night-alt-rain-wind" title="wi-night-alt-rain-wind"></li>

                                        <li class="wi-night-alt-rain" title="wi-night-alt-rain"></li>

                                        <li class="wi-night-alt-showers" title="wi-night-alt-showers"></li>

                                        <li class="wi-night-alt-snow" title="wi-night-alt-snow"></li>


                                        <li class="wi-night-alt-sprinkle" title="wi-night-alt-sprinkle"></li>

                                        <li class="wi-night-alt-storm-showers" title="wi-night-alt-storm-showers"></li>

                                        <li class="wi-night-alt-thunderstorm" title="wi-night-alt-thunderstorm"></li>

                                        <li class="wi-night-clear" title="wi-night-clear"></li>

                                        <li class="wi-night-cloudy-gusts" title="wi-night-cloudy-gusts"></li>

                                        <li class="wi-night-cloudy-windy" title="wi-night-cloudy-windy"></li>

                                        <li class="wi-night-cloudy" title="wi-night-cloudy"></li>

                                        <li class="wi-night-hail" title="wi-night-hail"></li>

                                        <li class="wi-night-lightning" title="wi-night-lightning"></li>


                                        <li class="wi-night-rain-mix" title="wi-night-rain-mix"></li>

                                        <li class="wi-night-rain-wind" title="wi-night-rain-wind"></li>

                                        <li class="wi-night-rain" title="wi-night-rain"></li>

                                        <li class="wi-night-showers" title="wi-night-showers"></li>

                                        <li class="wi-night-snow" title="wi-night-snow"></li>

                                        <li class="wi-night-sprinkle" title="wi-night-sprinkle"></li>

                                        <li class="wi-night-storm-showers" title="wi-night-storm-showers"></li>

                                        <li class="wi-night-thunderstorm" title="wi-night-thunderstorm"></li>


                                        <li class="wi-celcius" title="wi-celcius"></li>

                                        <li class="wi-cloud-down" title="wi-cloud-down"></li>

                                        <li class="wi-cloud-refresh" title="wi-cloud-refresh"></li>

                                        <li class="wi-cloud-up" title="wi-cloud-up"></li>

                                        <li class="wi-cloud" title="wi-cloud"></li>

                                        <li class="wi-degrees" title="wi-degrees"></li>

                                        <li class="wi-down-left" title="wi-down-left"></li>

                                        <li class="wi-down" title="wi-down"></li>

                                        <li class="wi-fahrenheit" title="wi-fahrenheit"></li>

                                        <li class="wi-horizon-alt" title="wi-horizon-alt"></li>

                                        <li class="wi-horizon" title="wi-horizon"></li>

                                        <li class="wi-left" title="wi-left"></li>


                                        <li class="wi-lightning" title="wi-lightning"></li>

                                        <li class="wi-night-fog" title="wi-night-fog"></li>

                                        <li class="wi-refresh-alt" title="wi-refresh-alt"></li>

                                        <li class="wi-refresh" title="wi-refresh"></li>

                                        <li class="wi-right" title="wi-right"></li>

                                        <li class="wi-sprinkles" title="wi-sprinkles"></li>

                                        <li class="wi-strong-wind" title="wi-sunrise"></li>

                                        <li class="wi-sunrise" title="wi-sunrise"></li>

                                        <li class="wi-sunset" title="wi-sunset"></li>

                                        <li class="wi-thermometer-exterior" title="wi-thermometer-exterior"></li>

                                        <li class="wi-thermometer-internal" title="wi-thermometer-internal"></li>

                                        <li class="wi-thermometer" title="wi-thermometer"></li>


                                        <li class="wi-tornado" title="wi-tornado"></li>

                                        <li class="wi-up-right" title="wi-up-right"></li>

                                        <li class="wi-up" title="wi-up"></li>

                                        <li class="wi-wind-east" title="wi-wind-east"></li>

                                        <li class="wi-wind-north-east" title="wi-wind-north-east"></li>

                                        <li class="wi-wind-north-west" title="wi-wind-north-west"></li>

                                        <li class="wi-wind-north" title="wi-wind-north"></li>

                                        <li class="wi-wind-south-east" title="wi-wind-south-east"></li>

                                        <li class="wi-wind-south-west" title="wi-wind-south-west"></li>

                                        <li class="wi-wind-south" title="wi-wind-south"></li>

                                        <li class="wi-wind-west" title="wi-wind-west"></li>

                                        <li class="wi-windy" title="wi-windy"></li>


                                    </ul>
                                </div>
                            </section>
                            <div style="clear:both;"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="content-wrap">
            <div class="row">

                <div class="col-sm-12">

                    <div class="nest" id="entypoClose">
                        <div class="title-alt">
                            <h6>
                                <span class="entypo-smashing"></span>&nbsp;&nbsp;Entypo Icons</h6>
                            <div class="titleClose">
                                <a class="gone" href="#entypoClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#entypo">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="entypo">
                            <p class="lead well">A set of 250+ carefully crafted pictograms by <a target="_blank"
                                                                                                  href="http://danielbruce.se/">Daniel
                                    Bruce</a>. To use with single element use this
                                <code>&lt;span class="entypo-note"&gt;&lt;/span&gt;</code>
                            </p>


                            <section data-valign="center" data-cols="1" data-name="preview">
                                <div class="entypo-tooltip">
                                    <ul class="entypo">
                                        <li class="entypo-note" title="note"></li>
                                        <li class="entypo-note-beamed" title="note-beamed"></li>
                                        <li class="entypo-music" title="music"></li>
                                        <li class="entypo-search" title="search"></li>
                                        <li class="entypo-flashlight" title="flashlight"></li>
                                        <li class="entypo-mail" title="mail"></li>
                                        <li class="entypo-heart" title="heart"></li>
                                        <li class="entypo-heart-empty" title="heart-empty"></li>
                                        <li class="entypo-star" title="star"></li>
                                        <li class="entypo-star-empty" title="star-empty"></li>
                                        <li class="entypo-user" title="user"></li>
                                        <li class="entypo-users" title="users"></li>
                                        <li class="entypo-user-add" title="user-add"></li>
                                        <li class="entypo-video" title="video"></li>
                                        <li class="entypo-picture" title="picture"></li>
                                        <li class="entypo-camera" title="camera"></li>
                                        <li class="entypo-layout" title="layout"></li>
                                        <li class="entypo-menu" title="menu"></li>
                                        <li class="entypo-check" title="check"></li>
                                        <li class="entypo-cancel" title="cancel"></li>
                                        <li class="entypo-cancel-circled" title="cancel-circled"></li>
                                        <li class="entypo-cancel-squared" title="cancel-squared"></li>
                                        <li class="entypo-plus" title="plus"></li>
                                        <li class="entypo-plus-circled" title="plus-circled"></li>
                                        <li class="entypo-plus-squared" title="plus-squared"></li>
                                        <li class="entypo-minus" title="minus"></li>
                                        <li class="entypo-minus-circled" title="minus-circled"></li>
                                        <li class="entypo-minus-squared" title="minus-squared"></li>
                                        <li class="entypo-help" title="help"></li>
                                        <li class="entypo-help-circled" title="help-circled"></li>
                                        <li class="entypo-info" title="info"></li>
                                        <li class="entypo-info-circled" title="info-circled"></li>
                                        <li class="entypo-back" title="back"></li>
                                        <li class="entypo-home" title="home"></li>
                                        <li class="entypo-link" title="link"></li>
                                        <li class="entypo-attach" title="attach"></li>
                                        <li class="entypo-lock" title="lock"></li>
                                        <li class="entypo-lock-open" title="lock-open"></li>
                                        <li class="entypo-eye" title="eye"></li>
                                        <li class="entypo-tag" title="tag"></li>
                                        <li class="entypo-bookmark" title="bookmark"></li>
                                        <li class="entypo-bookmarks" title="bookmarks"></li>
                                        <li class="entypo-flag" title="flag"></li>
                                        <li class="entypo-thumbs-up" title="thumbs-up"></li>
                                        <li class="entypo-thumbs-down" title="thumbs-down"></li>
                                        <li class="entypo-download" title="download"></li>
                                        <li class="entypo-upload" title="upload"></li>
                                        <li class="entypo-upload-cloud" title="upload-cloud"></li>
                                        <li class="entypo-reply" title="reply"></li>
                                        <li class="entypo-reply-all" title="reply-all"></li>
                                        <li class="entypo-forward" title="forward"></li>
                                        <li class="entypo-quote" title="quote"></li>
                                        <li class="entypo-code" title="code"></li>
                                        <li class="entypo-export" title="export"></li>
                                        <li class="entypo-pencil" title="pencil"></li>
                                        <li class="entypo-feather" title="feather"></li>
                                        <li class="entypo-print" title="print"></li>
                                        <li class="entypo-retweet" title="retweet"></li>
                                        <li class="entypo-keyboard" title="keyboard"></li>
                                        <li class="entypo-comment" title="comment"></li>
                                        <li class="entypo-chat" title="chat"></li>
                                        <li class="entypo-bell" title="bell"></li>
                                        <li class="entypo-attention" title="attention"></li>
                                        <li class="entypo-alert" title="alert"></li>
                                        <li class="entypo-vcard" title="vcard"></li>
                                        <li class="entypo-address" title="address"></li>
                                        <li class="entypo-location" title="location"></li>
                                        <li class="entypo-map" title="map"></li>
                                        <li class="entypo-direction" title="direction"></li>
                                        <li class="entypo-compass" title="compass"></li>
                                        <li class="entypo-cup" title="cup"></li>
                                        <li class="entypo-trash" title="trash"></li>
                                        <li class="entypo-doc" title="doc"></li>
                                        <li class="entypo-docs" title="docs"></li>
                                        <li class="entypo-doc-landscape" title="doc-landscape"></li>
                                        <li class="entypo-doc-text" title="doc-text"></li>
                                        <li class="entypo-doc-text-inv" title="doc-text-inv"></li>
                                        <li class="entypo-newspaper" title="newspaper"></li>
                                        <li class="entypo-book-open" title="book-open"></li>
                                        <li class="entypo-book" title="book"></li>
                                        <li class="entypo-folder" title="folder"></li>
                                        <li class="entypo-archive" title="archive"></li>
                                        <li class="entypo-box" title="box"></li>
                                        <li class="entypo-rss" title="rss"></li>
                                        <li class="entypo-phone" title="phone"></li>
                                        <li class="entypo-cog" title="cog"></li>
                                        <li class="entypo-tools" title="tools"></li>
                                        <li class="entypo-share" title="share"></li>
                                        <li class="entypo-shareable" title="shareable"></li>
                                        <li class="entypo-basket" title="basket"></li>
                                        <li class="entypo-bag" title="bag"></li>
                                        <li class="entypo-calendar" title="calendar"></li>
                                        <li class="entypo-login" title="login"></li>
                                        <li class="entypo-logout" title="logout"></li>
                                        <li class="entypo-mic" title="mic"></li>
                                        <li class="entypo-mute" title="mute"></li>
                                        <li class="entypo-sound" title="sound"></li>
                                        <li class="entypo-volume" title="volume"></li>
                                        <li class="entypo-clock" title="clock"></li>
                                        <li class="entypo-hourglass" title="hourglass"></li>
                                        <li class="entypo-lamp" title="lamp"></li>
                                        <li class="entypo-light-down" title="light-down"></li>
                                        <li class="entypo-light-up" title="light-up"></li>
                                        <li class="entypo-adjust" title="adjust"></li>
                                        <li class="entypo-block" title="block"></li>
                                        <li class="entypo-resize-full" title="resize-full"></li>
                                        <li class="entypo-resize-small" title="resize-small"></li>
                                        <li class="entypo-popup" title="popup"></li>
                                        <li class="entypo-publish" title="publish"></li>
                                        <li class="entypo-window" title="window"></li>
                                        <li class="entypo-arrow-combo" title="arrow-combo"></li>
                                        <li class="entypo-down-circled" title="down-circled"></li>
                                        <li class="entypo-left-circled" title="left-circled"></li>
                                        <li class="entypo-right-circled" title="right-circled"></li>
                                        <li class="entypo-up-circled" title="up-circled"></li>
                                        <li class="entypo-down-open" title="down-open"></li>
                                        <li class="entypo-left-open" title="left-open"></li>
                                        <li class="entypo-right-open" title="right-open"></li>
                                        <li class="entypo-up-open" title="up-open"></li>
                                        <li class="entypo-down-open-mini" title="down-open-mini"></li>
                                        <li class="entypo-left-open-mini" title="left-open-mini"></li>
                                        <li class="entypo-right-open-mini" title="right-open-mini"></li>
                                        <li class="entypo-up-open-mini" title="up-open-mini"></li>
                                        <li class="entypo-down-open-big" title="down-open-big"></li>
                                        <li class="entypo-left-open-big" title="left-open-big"></li>
                                        <li class="entypo-right-open-big" title="right-open-big"></li>
                                        <li class="entypo-up-open-big" title="up-open-big"></li>
                                        <li class="entypo-down" title="down"></li>
                                        <li class="entypo-left" title="left"></li>
                                        <li class="entypo-right" title="right"></li>
                                        <li class="entypo-up" title="up"></li>
                                        <li class="entypo-down-dir" title="down-dir"></li>
                                        <li class="entypo-left-dir" title="left-dir"></li>
                                        <li class="entypo-right-dir" title="right-dir"></li>
                                        <li class="entypo-up-dir" title="up-dir"></li>
                                        <li class="entypo-down-bold" title="down-bold"></li>
                                        <li class="entypo-left-bold" title="left-bold"></li>
                                        <li class="entypo-right-bold" title="right-bold"></li>
                                        <li class="entypo-up-bold" title="up-bold"></li>
                                        <li class="entypo-down-thin" title="down-thin"></li>
                                        <li class="entypo-left-thin" title="left-thin"></li>
                                        <li class="entypo-right-thin" title="right-thin"></li>
                                        <li class="entypo-up-thin" title="up-thin"></li>
                                        <li class="entypo-ccw" title="ccw"></li>
                                        <li class="entypo-cw" title="cw"></li>
                                        <li class="entypo-arrows-ccw" title="arrows-ccw"></li>
                                        <li class="entypo-level-down" title="level-down"></li>
                                        <li class="entypo-level-up" title="level-up"></li>
                                        <li class="entypo-shuffle" title="shuffle"></li>
                                        <li class="entypo-loop" title="loop"></li>
                                        <li class="entypo-switch" title="switch"></li>
                                        <li class="entypo-play" title="play"></li>
                                        <li class="entypo-stop" title="stop"></li>
                                        <li class="entypo-pause" title="pause"></li>
                                        <li class="entypo-record" title="record"></li>
                                        <li class="entypo-to-end" title="to-end"></li>
                                        <li class="entypo-to-start" title="to-start"></li>
                                        <li class="entypo-fast-forward" title="fast-forward"></li>
                                        <li class="entypo-fast-backward" title="fast-backward"></li>
                                        <li class="entypo-progress-0" title="progress-0"></li>
                                        <li class="entypo-progress-1" title="progress-1"></li>
                                        <li class="entypo-progress-2" title="progress-2"></li>
                                        <li class="entypo-progress-3" title="progress-3"></li>
                                        <li class="entypo-target" title="target"></li>
                                        <li class="entypo-palette" title="palette"></li>
                                        <li class="entypo-list" title="list"></li>
                                        <li class="entypo-list-add" title="list-add"></li>
                                        <li class="entypo-signal" title="signal"></li>
                                        <li class="entypo-trophy" title="trophy"></li>
                                        <li class="entypo-battery" title="battery"></li>
                                        <li class="entypo-back-in-time" title="back-in-time"></li>
                                        <li class="entypo-monitor" title="monitor"></li>
                                        <li class="entypo-mobile" title="mobile"></li>
                                        <li class="entypo-network" title="network"></li>
                                        <li class="entypo-cd" title="cd"></li>
                                        <li class="entypo-inbox" title="inbox"></li>
                                        <li class="entypo-install" title="install"></li>
                                        <li class="entypo-globe" title="globe"></li>
                                        <li class="entypo-cloud" title="cloud"></li>
                                        <li class="entypo-cloud-thunder" title="cloud-thunder"></li>
                                        <li class="entypo-flash" title="flash"></li>
                                        <li class="entypo-moon" title="moon"></li>
                                        <li class="entypo-flight" title="flight"></li>
                                        <li class="entypo-paper-plane" title="paper-plane"></li>
                                        <li class="entypo-leaf" title="leaf"></li>
                                        <li class="entypo-lifebuoy" title="lifebuoy"></li>
                                        <li class="entypo-mouse" title="mouse"></li>
                                        <li class="entypo-briefcase" title="briefcase"></li>
                                        <li class="entypo-suitcase" title="suitcase"></li>
                                        <li class="entypo-dot" title="dot"></li>
                                        <li class="entypo-dot-2" title="dot-2"></li>
                                        <li class="entypo-dot-3" title="dot-3"></li>
                                        <li class="entypo-brush" title="brush"></li>
                                        <li class="entypo-magnet" title="magnet"></li>
                                        <li class="entypo-infinity" title="infinity"></li>
                                        <li class="entypo-erase" title="erase"></li>
                                        <li class="entypo-chart-pie" title="chart-pie"></li>
                                        <li class="entypo-chart-line" title="chart-line"></li>
                                        <li class="entypo-chart-bar" title="chart-bar"></li>
                                        <li class="entypo-chart-area" title="chart-area"></li>
                                        <li class="entypo-tape" title="tape"></li>
                                        <li class="entypo-graduation-cap" title="graduation-cap"></li>
                                        <li class="entypo-language" title="language"></li>
                                        <li class="entypo-ticket" title="ticket"></li>
                                        <li class="entypo-water" title="water"></li>
                                        <li class="entypo-droplet" title="droplet"></li>
                                        <li class="entypo-air" title="air"></li>
                                        <li class="entypo-credit-card" title="credit-card"></li>
                                        <li class="entypo-floppy" title="floppy"></li>
                                        <li class="entypo-clipboard" title="clipboard"></li>
                                        <li class="entypo-megaphone" title="megaphone"></li>
                                        <li class="entypo-database" title="database"></li>
                                        <li class="entypo-drive" title="drive"></li>
                                        <li class="entypo-bucket" title="bucket"></li>
                                        <li class="entypo-thermometer" title="thermometer"></li>
                                        <li class="entypo-key" title="key"></li>
                                        <li class="entypo-flow-cascade" title="flow-cascade"></li>
                                        <li class="entypo-flow-branch" title="flow-branch"></li>
                                        <li class="entypo-flow-tree" title="flow-tree"></li>
                                        <li class="entypo-flow-line" title="flow-line"></li>
                                        <li class="entypo-flow-parallel" title="flow-parallel"></li>
                                        <li class="entypo-rocket" title="rocket"></li>
                                        <li class="entypo-gauge" title="gauge"></li>
                                        <li class="entypo-traffic-cone" title="traffic-cone"></li>
                                        <li class="entypo-cc" title="cc"></li>
                                        <li class="entypo-cc-by" title="cc-by"></li>
                                        <li class="entypo-cc-nc" title="cc-nc"></li>
                                        <li class="entypo-cc-nc-eu" title="cc-nc-eu"></li>
                                        <li class="entypo-cc-nc-jp" title="cc-nc-jp"></li>
                                        <li class="entypo-cc-sa" title="cc-sa"></li>
                                        <li class="entypo-cc-nd" title="cc-nd"></li>
                                        <li class="entypo-cc-pd" title="cc-pd"></li>
                                        <li class="entypo-cc-zero" title="cc-zero"></li>
                                        <li class="entypo-cc-share" title="cc-share"></li>
                                        <li class="entypo-cc-remix" title="cc-remix"></li>
                                        <li class="entypo-github" title="github"></li>
                                        <li class="entypo-github-circled" title="github-circled"></li>
                                        <li class="entypo-flickr" title="flickr"></li>
                                        <li class="entypo-flickr-circled" title="flickr-circled"></li>
                                        <li class="entypo-vimeo" title="vimeo"></li>
                                        <li class="entypo-vimeo-circled" title="vimeo-circled"></li>
                                        <li class="entypo-twitter" title="twitter"></li>
                                        <li class="entypo-twitter-circled" title="twitter-circled"></li>
                                        <li class="entypo-facebook" title="facebook"></li>
                                        <li class="entypo-facebook-circled" title="facebook-circled"></li>
                                        <li class="entypo-facebook-squared" title="facebook-squared"></li>
                                        <li class="entypo-gplus" title="gplus"></li>
                                        <li class="entypo-gplus-circled" title="gplus-circled"></li>
                                        <li class="entypo-pinterest" title="pinterest"></li>
                                        <li class="entypo-pinterest-circled" title="pinterest-circled"></li>
                                        <li class="entypo-tumblr" title="tumblr"></li>
                                        <li class="entypo-tumblr-circled" title="tumblr-circled"></li>
                                        <li class="entypo-linkedin" title="linkedin"></li>
                                        <li class="entypo-linkedin-circled" title="linkedin-circled"></li>
                                        <li class="entypo-dribbble" title="dribbble"></li>
                                        <li class="entypo-dribbble-circled" title="dribbble-circled"></li>
                                        <li class="entypo-stumbleupon" title="stumbleupon"></li>
                                        <li class="entypo-stumbleupon-circled" title="stumbleupon-circled"></li>
                                        <li class="entypo-lastfm" title="lastfm"></li>
                                        <li class="entypo-lastfm-circled" title="lastfm-circled"></li>
                                        <li class="entypo-rdio" title="rdio"></li>
                                        <li class="entypo-rdio-circled" title="rdio-circled"></li>
                                        <li class="entypo-spotify" title="spotify"></li>
                                        <li class="entypo-spotify-circled" title="spotify-circled"></li>
                                        <li class="entypo-qq" title="qq"></li>
                                        <li class="entypo-instagrem" title="instagrem"></li>
                                        <li class="entypo-dropbox" title="dropbox"></li>
                                        <li class="entypo-evernote" title="evernote"></li>
                                        <li class="entypo-flattr" title="flattr"></li>
                                        <li class="entypo-skype" title="skype"></li>
                                        <li class="entypo-skype-circled" title="skype-circled"></li>
                                        <li class="entypo-renren" title="renren"></li>
                                        <li class="entypo-sina-weibo" title="sina-weibo"></li>
                                        <li class="entypo-paypal" title="paypal"></li>
                                        <li class="entypo-picasa" title="picasa"></li>
                                        <li class="entypo-soundcloud" title="soundcloud"></li>
                                        <li class="entypo-mixi" title="mixi"></li>
                                        <li class="entypo-behance" title="behance"></li>
                                        <li class="entypo-google-circles" title="google-circles"></li>
                                        <li class="entypo-vkontakte" title="vkontakte"></li>
                                        <li class="entypo-smashing" title="smashing"></li>
                                        <li class="entypo-sweden" title="sweden"></li>
                                        <li class="entypo-db-shape" title="db-shape"></li>
                                        <li class="entypo-logo-db" title="logo-db"></li>
                                    </ul>
                                </div>
                            </section>
                            <div style="clear:both;"></div>
                        </div>

                    </div>


                </div>

            </div>
        </div>


        <div class="content-wrap">
            <div class="row">


                <div class="col-sm-12">

                    <div class="nest" id="fontClose">
                        <div class="title-alt">
                            <h6>
                                <span class="fontawesome-beaker"></span>&nbsp;&nbsp;Font Awesome Icons</h6>
                            <div class="titleClose">
                                <a class="gone" href="#fontClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#font">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="font">

                            <p class="lead well">The iconic font designed for use with Twitter Bootstrap by <a
                                        target="_blank" href="http://fortawesome.github.com/Font-Awesome/">Dave
                                    Gandy</a>.Avant comes baked with <a
                                        href="http://fortawesome.github.io/Font-Awesome/">Font Awesome 4.0.1</a>, which
                                provides you with scalable vector icons that can instantly be customized &mdash; size,
                                color, drop shadow, and anything that can be done with the power of CSS.</p>

                            <section data-valign="center" data-cols="1" data-name="preview">
                                <div class="entypo-tooltip">
                                    <ul>
                                        <li class="fontawesome-glass" title="glass"></li>
                                        <li class="fontawesome-music" title="music"></li>
                                        <li class="fontawesome-search" title="search"></li>
                                        <li class="fontawesome-envelope" title="envelope"></li>
                                        <li class="fontawesome-heart" title="heart"></li>
                                        <li class="fontawesome-star" title="star"></li>
                                        <li class="fontawesome-star-empty" title="star-empty"></li>
                                        <li class="fontawesome-user" title="user"></li>
                                        <li class="fontawesome-film" title="film"></li>
                                        <li class="fontawesome-th-large" title="th-large"></li>
                                        <li class="fontawesome-th" title="th"></li>
                                        <li class="fontawesome-th-list" title="th-list"></li>
                                        <li class="fontawesome-ok" title="ok"></li>
                                        <li class="fontawesome-remove" title="remove"></li>
                                        <li class="fontawesome-zoom-in" title="zoom-in"></li>
                                        <li class="fontawesome-zoom-out" title="zoom-out"></li>
                                        <li class="fontawesome-off" title="off"></li>
                                        <li class="fontawesome-signal" title="signal"></li>
                                        <li class="fontawesome-cog" title="cog"></li>
                                        <li class="fontawesome-trash" title="trash"></li>
                                        <li class="fontawesome-home" title="home"></li>
                                        <li class="fontawesome-file" title="file"></li>
                                        <li class="fontawesome-time" title="time"></li>
                                        <li class="fontawesome-road" title="road"></li>
                                        <li class="fontawesome-download-alt" title="download-alt"></li>
                                        <li class="fontawesome-download" title="download"></li>
                                        <li class="fontawesome-upload" title="upload"></li>
                                        <li class="fontawesome-inbox" title="inbox"></li>
                                        <li class="fontawesome-play-circle" title="play-circle"></li>
                                        <li class="fontawesome-repeat" title="repeat"></li>
                                        <li class="fontawesome-refresh" title="refresh"></li>
                                        <li class="fontawesome-list-alt" title="list-alt"></li>
                                        <li class="fontawesome-lock" title="lock"></li>
                                        <li class="fontawesome-flag" title="flag"></li>
                                        <li class="fontawesome-headphones" title="headphones"></li>
                                        <li class="fontawesome-volume-off" title="volume-off"></li>
                                        <li class="fontawesome-volume-down" title="volume-down"></li>
                                        <li class="fontawesome-volume-up" title="volume-up"></li>
                                        <li class="fontawesome-qrcode" title="qrcode"></li>
                                        <li class="fontawesome-barcode" title="barcode"></li>
                                        <li class="fontawesome-tag" title="tag"></li>
                                        <li class="fontawesome-tags" title="tags"></li>
                                        <li class="fontawesome-book" title="book"></li>
                                        <li class="fontawesome-bookmark" title="bookmark"></li>
                                        <li class="fontawesome-print" title="print"></li>
                                        <li class="fontawesome-camera" title="camera"></li>
                                        <li class="fontawesome-font" title="font"></li>
                                        <li class="fontawesome-bold" title="bold"></li>
                                        <li class="fontawesome-italic" title="italic"></li>
                                        <li class="fontawesome-text-height" title="text-height"></li>
                                        <li class="fontawesome-text-width" title="text-width"></li>
                                        <li class="fontawesome-align-left" title="align-left"></li>
                                        <li class="fontawesome-align-center" title="align-center"></li>
                                        <li class="fontawesome-align-right" title="align-right"></li>
                                        <li class="fontawesome-align-justify" title="align-justify"></li>
                                        <li class="fontawesome-list" title="list"></li>
                                        <li class="fontawesome-indent-left active" title="indent-left"></li>
                                        <li class="fontawesome-indent-right" title="indent-right"></li>
                                        <li class="fontawesome-facetime-video" title="facetime-video"></li>
                                        <li class="fontawesome-picture" title="picture"></li>
                                        <li class="fontawesome-pencil" title="pencil"></li>
                                        <li class="fontawesome-map-marker" title="map-marker"></li>
                                        <li class="fontawesome-adjust" title="adjust"></li>
                                        <li class="fontawesome-tint" title="tint"></li>
                                        <li class="fontawesome-edit" title="edit"></li>
                                        <li class="fontawesome-share" title="share"></li>
                                        <li class="fontawesome-check" title="check"></li>
                                        <li class="fontawesome-move" title="move"></li>
                                        <li class="fontawesome-step-backward" title="step-backward"></li>
                                        <li class="fontawesome-fast-backward" title="fast-backward"></li>
                                        <li class="fontawesome-backward" title="backward"></li>
                                        <li class="fontawesome-play" title="play"></li>
                                        <li class="fontawesome-pause" title="pause"></li>
                                        <li class="fontawesome-stop" title="stop"></li>
                                        <li class="fontawesome-forward" title="forward"></li>
                                        <li class="fontawesome-fast-forward" title="fast-forward"></li>
                                        <li class="fontawesome-step-forward" title="step-forward"></li>
                                        <li class="fontawesome-eject" title="eject"></li>
                                        <li class="fontawesome-chevron-left" title="chevron-left"></li>
                                        <li class="fontawesome-chevron-right" title="chevron-right"></li>
                                        <li class="fontawesome-plus-sign" title="plus-sign"></li>
                                        <li class="fontawesome-minus-sign" title="minus-sign"></li>
                                        <li class="fontawesome-remove-sign" title="remove-sign"></li>
                                        <li class="fontawesome-ok-sign" title="ok-sign"></li>
                                        <li class="fontawesome-question-sign" title="question-sign"></li>
                                        <li class="fontawesome-info-sign" title="info-sign"></li>
                                        <li class="fontawesome-screenshot" title="screenshot"></li>
                                        <li class="fontawesome-remove-circle" title="remove-circle"></li>
                                        <li class="fontawesome-ok-circle" title="ok-circle"></li>
                                        <li class="fontawesome-ban-circle" title="ban-circle"></li>
                                        <li class="fontawesome-arrow-left" title="arrow-left"></li>
                                        <li class="fontawesome-arrow-right" title="arrow-right"></li>
                                        <li class="fontawesome-arrow-up" title="arrow-up"></li>
                                        <li class="fontawesome-arrow-down" title="arrow-down"></li>
                                        <li class="fontawesome-share-alt" title="share-alt"></li>
                                        <li class="fontawesome-resize-full" title="resize-full"></li>
                                        <li class="fontawesome-resize-small" title="resize-small"></li>
                                        <li class="fontawesome-plus" title="plus"></li>
                                        <li class="fontawesome-minus" title="minus"></li>
                                        <li class="fontawesome-asterisk" title="asterisk"></li>
                                        <li class="fontawesome-exclamation-sign" title="exclamation-sign"></li>
                                        <li class="fontawesome-gift" title="gift"></li>
                                        <li class="fontawesome-leaf" title="leaf"></li>
                                        <li class="fontawesome-fire" title="fire"></li>
                                        <li class="fontawesome-eye-open" title="eye-open"></li>
                                        <li class="fontawesome-eye-close" title="eye-close"></li>
                                        <li class="fontawesome-warning-sign" title="warning-sign"></li>
                                        <li class="fontawesome-plane" title="plane"></li>
                                        <li class="fontawesome-calendar" title="calendar"></li>
                                        <li class="fontawesome-random" title="random"></li>
                                        <li class="fontawesome-comment" title="comment"></li>
                                        <li class="fontawesome-magnet" title="magnet"></li>
                                        <li class="fontawesome-chevron-up" title="chevron-up"></li>
                                        <li class="fontawesome-chevron-down" title="chevron-down"></li>
                                        <li class="fontawesome-retweet" title="retweet"></li>
                                        <li class="fontawesome-shopping-cart" title="shopping-cart"></li>
                                        <li class="fontawesome-folder-close" title="folder-close"></li>
                                        <li class="fontawesome-folder-open" title="folder-open"></li>
                                        <li class="fontawesome-resize-vertical" title="resize-vertical"></li>
                                        <li class="fontawesome-resize-horizontal" title="resize-horizontal"></li>
                                        <li class="fontawesome-bar-chart" title="bar-chart"></li>
                                        <li class="fontawesome-twitter-sign" title="twitter-sign"></li>
                                        <li class="fontawesome-facebook-sign" title="facebook-sign"></li>
                                        <li class="fontawesome-camera-retro" title="camera-retro"></li>
                                        <li class="fontawesome-key" title="key"></li>
                                        <li class="fontawesome-cogs" title="cogs"></li>
                                        <li class="fontawesome-comments" title="comments"></li>
                                        <li class="fontawesome-thumbs-up" title="thumbs-up"></li>
                                        <li class="fontawesome-thumbs-down" title="thumbs-down"></li>
                                        <li class="fontawesome-star-half" title="star-half"></li>
                                        <li class="fontawesome-heart-empty" title="heart-empty"></li>
                                        <li class="fontawesome-signout" title="signout"></li>
                                        <li class="fontawesome-linkedin-sign" title="linkedin-sign"></li>
                                        <li class="fontawesome-pushpin" title="pushpin"></li>
                                        <li class="fontawesome-external-link" title="external-link"></li>
                                        <li class="fontawesome-signin" title="signin"></li>
                                        <li class="fontawesome-trophy" title="trophy"></li>
                                        <li class="fontawesome-github-sign" title="github-sign"></li>
                                        <li class="fontawesome-upload-alt" title="upload-alt"></li>
                                        <li class="fontawesome-lemon" title="lemon"></li>
                                        <li class="fontawesome-phone" title="phone"></li>
                                        <li class="fontawesome-check-empty" title="check-empty"></li>
                                        <li class="fontawesome-bookmark-empty" title="bookmark-empty"></li>
                                        <li class="fontawesome-phone-sign" title="phone-sign"></li>
                                        <li class="fontawesome-twitter" title="twitter"></li>
                                        <li class="fontawesome-facebook" title="facebook"></li>
                                        <li class="fontawesome-github" title="github"></li>
                                        <li class="fontawesome-unlock" title="unlock"></li>
                                        <li class="fontawesome-credit-card" title="credit-card"></li>
                                        <li class="fontawesome-rss" title="rss"></li>
                                        <li class="fontawesome-hdd" title="hdd"></li>
                                        <li class="fontawesome-bullhorn" title="bullhorn"></li>
                                        <li class="fontawesome-bell" title="bell"></li>
                                        <li class="fontawesome-certificate" title="certificate"></li>
                                        <li class="fontawesome-hand-right" title="hand-right"></li>
                                        <li class="fontawesome-hand-left" title="hand-left"></li>
                                        <li class="fontawesome-hand-up" title="hand-up"></li>
                                        <li class="fontawesome-hand-down" title="hand-down"></li>
                                        <li class="fontawesome-circle-arrow-left" title="circle-arrow-left"></li>
                                        <li class="fontawesome-circle-arrow-right" title="circle-arrow-right"></li>
                                        <li class="fontawesome-circle-arrow-up" title="circle-arrow-up"></li>
                                        <li class="fontawesome-circle-arrow-down" title="circle-arrow-down"></li>
                                        <li class="fontawesome-globe" title="globe"></li>
                                        <li class="fontawesome-wrench" title="wrench"></li>
                                        <li class="fontawesome-tasks" title="tasks"></li>
                                        <li class="fontawesome-filter" title="filter"></li>
                                        <li class="fontawesome-briefcase" title="briefcase"></li>
                                        <li class="fontawesome-fullscreen" title="fullscreen"></li>
                                        <li class="fontawesome-group" title="group"></li>
                                        <li class="fontawesome-link" title="link"></li>
                                        <li class="fontawesome-cloud" title="cloud"></li>
                                        <li class="fontawesome-beaker" title="beaker"></li>
                                        <li class="fontawesome-cut" title="cut"></li>
                                        <li class="fontawesome-copy" title="copy"></li>
                                        <li class="fontawesome-paper-clip" title="paper-clip"></li>
                                        <li class="fontawesome-save" title="save"></li>
                                        <li class="fontawesome-sign-blank" title="sign-blank"></li>
                                        <li class="fontawesome-reorder" title="reorder"></li>
                                        <li class="fontawesome-list-ul" title="list-ul"></li>
                                        <li class="fontawesome-list-ol" title="list-ol"></li>
                                        <li class="fontawesome-strikethrough" title="strikethrough"></li>
                                        <li class="fontawesome-underline" title="underline"></li>
                                        <li class="fontawesome-table" title="table"></li>
                                        <li class="fontawesome-magic" title="magic"></li>
                                        <li class="fontawesome-truck" title="truck"></li>
                                        <li class="fontawesome-pinterest" title="pinterest"></li>
                                        <li class="fontawesome-pinterest-sign" title="pinterest-sign"></li>
                                        <li class="fontawesome-google-plus-sign" title="google-plus-sign"></li>
                                        <li class="fontawesome-google-plus" title="google-plus"></li>
                                        <li class="fontawesome-money" title="money"></li>
                                        <li class="fontawesome-caret-down" title="caret-down"></li>
                                        <li class="fontawesome-caret-up" title="caret-up"></li>
                                        <li class="fontawesome-caret-left" title="caret-left"></li>
                                        <li class="fontawesome-caret-right" title="caret-right"></li>
                                        <li class="fontawesome-columns" title="columns"></li>
                                        <li class="fontawesome-sort" title="sort"></li>
                                        <li class="fontawesome-sort-down" title="sort-down"></li>
                                        <li class="fontawesome-sort-up" title="sort-up"></li>
                                        <li class="fontawesome-envelope-alt" title="envelope-alt"></li>
                                        <li class="fontawesome-linkedin" title="linkedin"></li>
                                        <li class="fontawesome-undo" title="undo"></li>
                                        <li class="fontawesome-legal" title="legal"></li>
                                        <li class="fontawesome-dashboard" title="dashboard"></li>
                                        <li class="fontawesome-comment-alt" title="comment-alt"></li>
                                        <li class="fontawesome-comments-alt" title="comments-alt"></li>
                                        <li class="fontawesome-bolt" title="bolt"></li>
                                        <li class="fontawesome-sitemap" title="sitemap"></li>
                                        <li class="fontawesome-umbrella" title="umbrella"></li>
                                        <li class="fontawesome-paste" title="paste"></li>
                                        <li class="fontawesome-lightbulb" title="lightbulb"></li>
                                        <li class="fontawesome-exchange" title="exchange"></li>
                                        <li class="fontawesome-cloud-download" title="cloud-download"></li>
                                        <li class="fontawesome-cloud-upload" title="cloud-upload"></li>
                                        <li class="fontawesome-user-md" title="user-md"></li>
                                        <li class="fontawesome-stethoscope" title="stethoscope"></li>
                                        <li class="fontawesome-suitcase" title="suitcase"></li>
                                        <li class="fontawesome-bell-alt" title="bell-alt"></li>
                                        <li class="fontawesome-coffee" title="coffee"></li>
                                        <li class="fontawesome-food" title="food"></li>
                                        <li class="fontawesome-file-alt" title="file-alt"></li>
                                        <li class="fontawesome-building" title="building"></li>
                                        <li class="fontawesome-hospital" title="hospital"></li>
                                        <li class="fontawesome-ambulance" title="ambulance"></li>
                                        <li class="fontawesome-medkit" title="medkit"></li>
                                        <li class="fontawesome-fighter-jet" title="fighter-jet"></li>
                                        <li class="fontawesome-beer" title="beer"></li>
                                        <li class="fontawesome-h-sign" title="h-sign"></li>
                                        <li class="fontawesome-plus-sign-alt" title="plus-sign-alt"></li>
                                        <li class="fontawesome-double-angle-left" title="double-angle-left"></li>
                                        <li class="fontawesome-double-angle-right" title="double-angle-right"></li>
                                        <li class="fontawesome-double-angle-up" title="double-angle-up"></li>
                                        <li class="fontawesome-double-angle-down" title="double-angle-down"></li>
                                        <li class="fontawesome-angle-left" title="angle-left"></li>
                                        <li class="fontawesome-angle-right" title="angle-right"></li>
                                        <li class="fontawesome-angle-up" title="angle-up"></li>
                                        <li class="fontawesome-angle-down" title="angle-down"></li>
                                        <li class="fontawesome-desktop" title="desktop"></li>
                                        <li class="fontawesome-laptop" title="laptop"></li>
                                        <li class="fontawesome-tablet" title="tablet"></li>
                                        <li class="fontawesome-mobile-phone" title="mobile-phone"></li>
                                        <li class="fontawesome-circle-blank" title="circle-blank"></li>
                                        <li class="fontawesome-quote-left" title="quote-left"></li>
                                        <li class="fontawesome-quote-right" title="quote-right"></li>
                                        <li class="fontawesome-spinner" title="spinner"></li>
                                        <li class="fontawesome-circle" title="circle"></li>
                                        <li class="fontawesome-reply" title="reply"></li>
                                        <li class="fontawesome-github-alt" title="github-alt"></li>
                                        <li class="fontawesome-folder-close-alt" title="folder-close-alt"></li>
                                        <li class="fontawesome-folder-open-alt" title="folder-open-alt"></li>
                                    </ul>
                                </div>
                            </section>
                            <div style="clear:both;"></div>
                        </div>

                    </div>


                </div>

            </div>
        </div>


        <div class="content-wrap">
            <div class="row">


                <div class="col-sm-12">

                    <div class="nest" id="makiClose">
                        <div class="title-alt">
                            <h6>
                                <span class="maki-fast-food"></span>&nbsp;&nbsp;Maki Icons</h6>
                            <div class="titleClose">
                                <a class="gone" href="#makiClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#maki">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="maki">
                            <p class="lead well">It's a clean point of interest icon set made for web cartography by <a
                                        target="_blank" href="http://mapbox.com/">MapBox</a>.</p>
                            <section data-valign="center" data-cols="1" data-name="preview">
                                <div class="entypo-tooltip" style="color:#3498DB">
                                    <ul>
                                        <li class="maki-aboveground-rail" data-placement="right"
                                            title="aboveground-rail"></li>
                                        <li class="maki-airfield" title="airfield"></li>
                                        <li class="maki-airport" title="airport"></li>
                                        <li class="maki-art-gallery" title="art-gallery"></li>
                                        <li class="maki-bar" title="bar"></li>
                                        <li class="maki-baseball" title="baseball"></li>
                                        <li class="maki-basketball" title="basketball"></li>
                                        <li class="maki-beer" title="beer"></li>
                                        <li class="maki-belowground-rail" title="belowground-rail"></li>
                                        <li class="maki-bicycle" title="bicycle"></li>
                                        <li class="maki-bus" title="bus"></li>
                                        <li class="maki-cafe" title="cafe"></li>
                                        <li class="maki-campsite" title="campsite"></li>
                                        <li class="maki-cemetery" title="cemetery"></li>
                                        <li class="maki-cinema" title="cinema"></li>
                                        <li class="maki-college" title="college"></li>
                                        <li class="maki-commerical-building" title="commerical-building"></li>
                                        <li class="maki-credit-card" title="credit-card"></li>
                                        <li class="maki-cricket" title="cricket"></li>
                                        <li class="maki-embassy" title="embassy"></li>
                                        <li class="maki-fast-food" title="fast-food"></li>
                                        <li class="maki-ferry" title="ferry"></li>
                                        <li class="maki-fire-station" title="fire-station"></li>
                                        <li class="maki-football" title="football"></li>
                                        <li class="maki-fuel" title="fuel"></li>
                                        <li class="maki-garden" title="garden"></li>
                                        <li class="maki-giraffe" title="giraffe"></li>
                                        <li class="maki-golf" title="golf"></li>
                                        <li class="maki-grocery-store" title="grocery-store"></li>
                                        <li class="maki-harbor" title="harbor"></li>
                                        <li class="maki-heliport" title="heliport"></li>
                                        <li class="maki-hospital" title="hospital"></li>
                                        <li class="maki-industrial-building" title="industrial-building"></li>
                                        <li class="maki-library" title="library"></li>
                                        <li class="maki-lodging" title="lodging"></li>
                                        <li class="maki-london-underground" title="london-underground"></li>
                                        <li class="maki-minefield" title="minefield"></li>
                                        <li class="maki-monument" title="monument"></li>
                                        <li class="maki-museum" title="museum"></li>
                                        <li class="maki-pharmacy" title="pharmacy"></li>
                                        <li class="maki-pitch" title="pitch"></li>
                                        <li class="maki-police" title="police"></li>
                                        <li class="maki-post" title="post"></li>
                                        <li class="maki-prison" title="prison"></li>
                                        <li class="maki-rail" title="rail"></li>
                                        <li class="maki-religious-christian" title="religious-christian"></li>
                                        <li class="maki-religious-islam" title="religious-islam"></li>
                                        <li class="maki-religious-jewish" title="religious-jewish"></li>
                                        <li class="maki-restaurant" title="restaurant"></li>
                                        <li class="maki-roadblock" title="roadblock"></li>
                                        <li class="maki-school" title="school"></li>
                                        <li class="maki-shop" title="shop"></li>
                                        <li class="maki-skiing" title="skiing"></li>
                                        <li class="maki-soccer" title="soccer"></li>
                                        <li class="maki-swimming" title="swimming"></li>
                                        <li class="maki-tennis" title="tennis"></li>
                                        <li class="maki-theatre" title="theatre"></li>
                                        <li class="maki-toilet" title="toilet"></li>
                                        <li class="maki-town-hall" title="town-hall"></li>
                                        <li class="maki-trash" title="trash"></li>
                                        <li class="maki-tree-1" title="tree-1"></li>
                                        <li class="maki-tree-2" title="tree-2"></li>
                                        <li class="maki-warehouse" title="warehouse"></li>
                                    </ul>
                                </div>
                            </section>

                            <div style="clear:both;"></div>
                        </div>

                    </div>


                </div>

            </div>
        </div>
        <!-- /END OF CONTENT -->


        <!-- FOOTER -->
        <div class="footer-space"></div>
        <div id="footer">
            <div class="devider-footer-left"></div>
            <div class="time">
                <p id="spanDate">
                <p id="clock">
            </div>
            <div class="copyright">Make with Love
                <span class="entypo-heart"></span>Collect from All Rights Reserved
            </div>
            <div class="devider-footer"></div>

        </div>
        <!-- / END OF FOOTER -->


    </div>
</div>
<!--  END OF PAPER WRAP -->

<!-- RIGHT SLIDER CONTENT -->
<div class="sb-slidebar sb-right">
    <div class="right-wrapper">
        <div class="row">
            <h3>
                <span><i class="entypo-gauge"></i>&nbsp;&nbsp;MAIN WIDGET</span>
            </h3>
            <div class="col-sm-12">

                <div class="widget-knob">
                        <span class="chart" style="position:relative" data-percent="86">
                            <span class="percent"></span>
                        </span>
                </div>
                <div class="widget-def">
                    <b>Distance traveled</b>
                    <br>
                    <i>86% to the check point</i>
                </div>

                <div class="widget-knob">
                        <span class="speed-car" style="position:relative" data-percent="60">
                            <span class="percent2"></span>
                        </span>
                </div>
                <div class="widget-def">
                    <b>The average speed</b>
                    <br>
                    <i>30KM/h avarage speed</i>
                </div>


                <div class="widget-knob">
                        <span class="overall" style="position:relative" data-percent="25">
                            <span class="percent3"></span>
                        </span>
                </div>
                <div class="widget-def">
                    <b>Overall result</b>
                    <br>
                    <i>30KM/h avarage Result</i>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top:0;" class="right-wrapper">
        <div class="row">
            <h3>
                <span><i class="entypo-chat"></i>&nbsp;&nbsp;CHAT</span>
            </h3>
            <div class="col-sm-12">
                <span class="label label-warning label-chat">Online</span>
                <ul class="chat">
                    <li>
                        <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-circle"
                                         src="http://api.randomuser.me/portraits/thumb/men/20.jpg">
                                </span><b>Dave Junior</b>
                            <br><i>Last seen : 08:00 PM</i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-circle"
                                         src="http://api.randomuser.me/portraits/thumb/men/21.jpg">
                                </span><b>Kenneth Lucas</b>
                            <br><i>Last seen : 07:21 PM</i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-circle"
                                         src="http://api.randomuser.me/portraits/thumb/men/22.jpg">
                                </span><b>Heidi Perez</b>
                            <br><i>Last seen : 05:43 PM</i>
                        </a>
                    </li>


                </ul>

                <span class="label label-chat">Offline</span>
                <ul class="chat">
                    <li>
                        <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle"
                                         src="http://api.randomuser.me/portraits/thumb/men/23.jpg">
                                </span><b>Dave Junior</b>
                            <br><i>Last seen : 08:00 PM</i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle"
                                         src="http://api.randomuser.me/portraits/thumb/women/24.jpg">
                                </span><b>Kenneth Lucas</b>
                            <br><i>Last seen : 07:21 PM</i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle"
                                         src="http://api.randomuser.me/portraits/thumb/men/25.jpg">
                                </span><b>Heidi Perez</b>
                            <br><i>Last seen : 05:43 PM</i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle"
                                         src="http://api.randomuser.me/portraits/thumb/women/25.jpg">
                                </span><b>Kenneth Lucas</b>
                            <br><i>Last seen : 07:21 PM</i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle"
                                         src="http://api.randomuser.me/portraits/thumb/men/26.jpg">
                                </span><b>Heidi Perez</b>
                            <br><i>Last seen : 05:43 PM</i>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
    </div>
</div>

<!-- END OF RIGHT SLIDER CONTENT-->


<!-- MAIN EFFECT -->
<script type="text/javascript" src="assets/js/preloader.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/load.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>


<!-- /MAIN EFFECT -->
<script>
    $('.entypo-tooltip > ul > li').tooltip({
        "margin-top": "50px"
    });
</script>


</body>

</html>
