<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HeLinFeng V 1.2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="admin">
    <meta name="author" content="matirasa">
    <!-- Le styles -->
    <script type="text/javascript" src="assets/js/jquery.js"></script>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/loader-style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/js/button/ladda/ladda.min.css">
    <style type="text/css">
        .button-demo, .progress-demo {
            display: inline-block;
            margin-right: 3px;
            margin-bottom: 20px;
        }
    </style>


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/minus.png">
</head>

<body>
<div id="awwwards" class="right black"><a
            href="http://www.awwwards.com/best-websites/HeLinFeng-navigation-admin-dashboard-template" target="_blank">best
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
                <h1>HeLinFeng<span>v1.0</span></h1>
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
                            <a href="http://themeforest.net/item/HeLinFeng-navigation-admin-dashboard-template/7664475?WT.ac=category_item&WT.z_author=themesmile">
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
        <h1>HeLinFeng<span>v1.0</span></h1>
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
                            <li>
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
                        <i class="icon-view-list-large"></i>
                        <span>Button
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
            <li><a href="#" title="Sample page 1">UI Element</a>
            </li>
            <li><i class="fa fa-lg fa-angle-right"></i>
            </li>
            <li><a href="#" title="Sample page 1">Button</a>
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

                    <div class="nest" id="buttonClose">
                        <div class="title-alt">
                            <h6>
                                Progress Button Examples</h6>
                            <div class="titleClose">
                                <a class="gone" href="#buttonClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#button">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="button">

                            <button class="btn btn-default  button test" data-opacity="0.9">Example</button>
                            <button class="btn btn-default  button test" data-color="#0DB8DF" data-opacity="0.5">A
                                Button
                            </button>
                            <button class="btn btn-default  button test disable" data-color="#ff0011"
                                    data-opacity="0.5">Disables on Click
                            </button>
                            <button class="btn btn-default  button test">YABTT</button>
                            <button class="btn btn-default  button test disable" data-opacity="0.91"
                                    data-color="#222222">Great for use as an uploader button so take up less space.
                            </button>

                            <p style="margin:15px 0">bonus! works on any element too.</p>
                            <div style=" display: block;
                height: 5px;
                background-color: #efefef;
                margin-bottom: 20px;
                border-radius: 2px;" id="standard" data-opacity="0.8"></div>
                            <button class="btn btn-default button other">Div Bar</button>


                        </div>

                    </div>
                </div>

            </div>
        </div>


        <div class="content-wrap">
            <div class="row">


                <div class="col-sm-12">

                    <div class="nest" id="ladaClose">
                        <div class="title-alt">
                            <h6>
                                Progress Button (Lada)</h6>
                            <div class="titleClose">
                                <a class="gone" href="#ladaClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#lada">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="lada">

                            <p>A UI concept which merges loading indicators into the action that invoked them. Primarily
                                intended for use with forms where it gives users immediate feedback upon submit rather
                                than leaving them wondering while the browser does its thing. For a real-world
                                example</p>


                            <section class="button-demo">
                                <button class="ladda-button" data-size="xs" data-color="green" data-style="expand-left">
                                    Expand Left
                                </button>
                            </section>

                            <section class="button-demo">
                                <h3></h3>
                                <button class="ladda-button" data-size="xs" data-color="green"
                                        data-style="expand-right">Expand Right
                                </button>
                            </section>

                            <section class="button-demo">

                                <button class="ladda-button" data-size="xs" data-color="green" data-style="expand-up">
                                    Expand Up
                                </button>
                            </section>

                            <section class="button-demo">

                                <button class="ladda-button" data-size="xs" data-color="green" data-style="expand-down">
                                    Expand Down
                                </button>
                            </section>

                            <br>
                            <section class="button-demo">

                                <button class="ladda-button" data-size="xs" data-color="red" data-style="contract">
                                    Contract
                                </button>
                            </section>

                            <section class="button-demo">
                                <h3></h3>
                                <button class="ladda-button" data-size="xs" data-color="red"
                                        data-style="contract-overlay" style="z-index: 10;">Contract Overlay
                                </button>
                            </section>

                            <section class="button-demo">

                                <button class="ladda-button" data-size="xs" data-color="red" data-style="zoom-in">Zoom
                                    In
                                </button>
                            </section>

                            <section class="button-demo">

                                <button class="ladda-button" data-size="xs" data-color="red" data-style="zoom-out">Zoom
                                    Out
                                </button>
                            </section>

                            <br>
                            <section class="button-demo">

                                <button class="ladda-button" data-size="xs" data-color="blue" data-style="slide-left">
                                    Slide Left
                                </button>
                            </section>

                            <section class="button-demo">

                                <button class="ladda-button" data-size="xs" data-color="blue" data-style="slide-right">
                                    Slide Right
                                </button>
                            </section>

                            <section class="button-demo">

                                <button class="ladda-button" data-size="xs" data-color="blue" data-style="slide-up">
                                    Slide Up
                                </button>
                            </section>

                            <section class="button-demo">

                                <button class="ladda-button" data-size="xs" data-color="blue" data-style="slide-down">
                                    Slide Down
                                </button>
                            </section>

                            <br>

                            <section class="progress-demo">

                                <button class="ladda-button" data-size="xs" data-color="purple"
                                        data-style="expand-right">Expand Right
                                </button>
                            </section>

                            <section class="progress-demo">

                                <button class="ladda-button" data-size="xs" data-color="purple" data-style="contract">
                                    Contract
                                </button>
                            </section>

                            <br>

                            <section class="progress-demo">

                                <button class="ladda-button" data-color="mint" data-style="expand-right" data-size="xs">
                                    Extra Small
                                </button>
                            </section>

                            <section class="progress-demo">

                                <button class="ladda-button" data-color="mint" data-style="expand-right" data-size="s">
                                    Small
                                </button>
                            </section>

                            <section class="progress-demo">

                                <button class="ladda-button" data-color="mint" data-style="expand-right" data-size="l">
                                    Large
                                </button>
                            </section>

                            <section class="progress-demo">

                                <button class="ladda-button" data-color="mint" data-style="expand-right" data-size="xl">
                                    Extra Large
                                </button>
                            </section>

                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="content-wrap">
            <div class="row">


                <div class="col-sm-12">

                    <div class="nest" id="bootsrap_btnClose">
                        <div class="title-alt">
                            <h6>
                                Bootsrap Button</h6>
                            <div class="titleClose">
                                <a class="gone" href="#bootsrap_btnClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#bootsrap_btn">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="bootsrap_btn">

                            <!-- Standard button -->
                            <p>Default</p>
                            <button type="button" class="btn btn-default">Default</button>

                            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                            <button type="button" class="btn btn-primary">Primary</button>

                            <!-- Indicates a successful or positive action -->
                            <button type="button" class="btn btn-success">Success</button>

                            <!-- Contextual button for informational alert messages -->
                            <button type="button" class="btn btn-info">Info</button>

                            <!-- Indicates caution should be taken with this action -->
                            <button type="button" class="btn btn-warning">Warning</button>

                            <!-- Indicates a dangerous or potentially negative action -->
                            <button type="button" class="btn btn-danger">Danger</button>

                            <!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
                            <button type="button" class="btn btn-link">Link</button>
                            <br>

                            <p style="margin:20px 0 10px">Single button dropdowns</p>

                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                                    Default
                                    <span class="caret"></span>
                                </button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">Action</a>
                                    </li>
                                    <li><a href="#">Another action</a>
                                    </li>
                                    <li><a href="#">Something else here</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /btn-group -->
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">
                                    Primary
                                    <span class="caret"></span>
                                </button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">Action</a>
                                    </li>
                                    <li><a href="#">Another action</a>
                                    </li>
                                    <li><a href="#">Something else here</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /btn-group -->
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-success dropdown-toggle" type="button">
                                    Success
                                    <span class="caret"></span>
                                </button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">Action</a>
                                    </li>
                                    <li><a href="#">Another action</a>
                                    </li>
                                    <li><a href="#">Something else here</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /btn-group -->
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-info dropdown-toggle" type="button">Info
                                    <span class="caret"></span>
                                </button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">Action</a>
                                    </li>
                                    <li><a href="#">Another action</a>
                                    </li>
                                    <li><a href="#">Something else here</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /btn-group -->
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-warning dropdown-toggle" type="button">
                                    Warning
                                    <span class="caret"></span>
                                </button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">Action</a>
                                    </li>
                                    <li><a href="#">Another action</a>
                                    </li>
                                    <li><a href="#">Something else here</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /btn-group -->
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-danger dropdown-toggle" type="button">
                                    Danger
                                    <span class="caret"></span>
                                </button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">Action</a>
                                    </li>
                                    <li><a href="#">Another action</a>
                                    </li>
                                    <li><a href="#">Something else here</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /btn-group -->

                            <p style="margin:20px 0 10px">Button with icon</p>

                            <button type="button" class="btn btn-default">
                                <span class="entypo-pencil"></span>&nbsp;&nbsp;Edit
                            </button>

                            <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                            <button type="button" class="btn btn-primary">
                                <span class="entypo-plus-squared"></span>&nbsp;&nbsp;Add
                            </button>

                            <!-- Indicates a successful or positive action -->
                            <button type="button" class="btn btn-success">
                                <span class="entypo-upload"></span>&nbsp;&nbsp;Upload
                            </button>

                            <!-- Contextual button for informational alert messages -->
                            <button type="button" class="btn btn-info">
                                <span class="entypo-trash"></span>&nbsp;&nbsp;Delete
                            </button>

                            <!-- Indicates caution should be taken with this action -->
                            <button type="button" class="btn btn-warning">
                                <span class="entypo-print"></span>&nbsp;&nbsp;Print
                            </button>

                            <!-- Indicates a dangerous or potentially negative action -->
                            <button type="button" class="btn btn-danger">
                                <span class="entypo-cancel-squared"></span>&nbsp;&nbsp;Cancel
                            </button>

                            <!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
                            <button type="button" class="btn btn-link">
                                <span class="entypo-import"></span>&nbsp;&nbsp;Import
                            </button>

                            <br>
                            <p style="margin:20px 0 10px">Button groups</p>
                            <div class="btn-group">
                                <button type="button" class="btn btn-warning">Left</button>
                                <button type="button" class="btn btn-danger">Middle</button>
                                <button type="button" class="btn btn-info">Right</button>
                            </div>
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
            <ul>
                <li><i class="fa fa-facebook"></i>
                </li>
                <li><i class="fa fa-twitter"></i>
                </li>
                <li><i class="fa fa-google-plus"></i>
                </li>
            </ul>
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
<script src="assets/js/button/ladda/spin.min.js"></script>
<script src="assets/js/button/ladda/ladda.min.js"></script>
<script type='text/javascript' src='assets/js/button/progressbutton.jquery.js'></script>
<script>
    jQuery(document).ready(function ($) {
        var interval;
        var bar = jQuery('.main').progressbutton();
        jQuery('#reset').click(function () {
            clearInterval(interval);
            if (bar) {
                bar.progressbutton('reset');
            }
        });
        jQuery('.color').click(function () {
            //clearInterval(interval);
            var clicked = jQuery(this);
            bar.progressbutton({
                color: clicked.data('color')
            });
        });
        jQuery('.opacity').click(function () {
            //clearInterval(interval);
            var clicked = jQuery(this);
            bar.progressbutton({
                opacity: clicked.data('opacity')
            });
        });

        jQuery('.test').click(function () {
            var itm = jQuery(this);
            if (itm.hasClass('disable')) {
                itm.attr('disabled', 'disabled');
            }
            var bar = itm.progressbutton({
                percent: -1
            });
            var clock = 0;

            var interval = setInterval(function () {
                bar.progressbutton({
                    percent: clock
                });
                clock = clock + 0.5;
                if (clock > 100) {
                    itm.removeAttr('disabled');
                    clearInterval(interval);
                    bar.progressbutton('reset');
                }
            }, 30);
        });
        jQuery('.action').click(function () {
            clearInterval(interval);
            var clicked = jQuery(this);
            bar.progressbutton({
                percent: clicked.data('percent')
            });
        });
        jQuery('.other').click(function () {
            var itm = jQuery('#standard');
            var bar = itm.progressbutton({
                percent: -1
            });
            var clock = 0;

            var interval = setInterval(function () {
                bar.progressbutton({
                    percent: clock
                });
                clock = clock + 0.5;
                if (clock > 100) {
                    clearInterval(interval);
                    bar.progressbutton('reset');
                }
            }, 30);
        });


    });
</script>

<script>
    // Bind normal buttons
    Ladda.bind('.button-demo button', {
        timeout: 2000
    });

    // Bind progress buttons and simulate loading progress
    Ladda.bind('.progress-demo button', {
        callback: function (instance) {
            var progress = 0;
            var interval = setInterval(function () {
                progress = Math.min(progress + Math.random() * 0.1, 1);
                instance.setProgress(progress);

                if (progress === 1) {
                    instance.stop();
                    clearInterval(interval);
                }
            }, 200);
        }
    });

    // You can control loading explicitly using the JavaScript API
    // as outlined below:

    // var l = Ladda.create( document.querySelector( 'button' ) );
    // l.start();
    // l.stop();
    // l.toggle();
    // l.isLoading();
    // l.setProgress( 0-1 );
</script>


</body>

</html>
