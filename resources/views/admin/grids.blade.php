<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HeLinFeng 1.3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <script type="text/javascript" src="assets/js/jquery.js"></script>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/loader-style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/minus.png">
</head>

<body>
<div id="awwwards" class="right black"><a
            href="" target="_blank">best
        websites of the world</a></div>
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- TOP NAVBAR -->
@include('admin.top')
<!-- /END OF TOP NAVBAR -->

<!-- SIDE MENU -->
@include('admin.menu')
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
                        <i class="icon-menu"></i>
                        <span>Grids
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
            <li><a href="#" title="Sample page 1">Grids</a>
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
                <div class="col-lg-12">
                    <p class="hd-title">Base on Bootstrap grid system.</p>
                </div>
                <div class="col-lg-12">
                    <section class="panel">
                        <div class="panel-body">col-lg-12</div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <section class="panel">
                        <div class="panel-body">col-lg-6</div>
                    </section>
                </div>
                <div class="col-lg-6">
                    <section class="panel">
                        <div class="panel-body">col-lg-6</div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <section class="panel">
                        <div class="panel-body">col-lg-4</div>
                    </section>
                </div>
                <div class="col-lg-4">
                    <section class="panel">
                        <div class="panel-body">col-lg-4</div>
                    </section>
                </div>
                <div class="col-lg-4">
                    <section class="panel">
                        <div class="panel-body">col-lg-4</div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <section class="panel">
                        <div class="panel-body">col-lg-3</div>
                    </section>
                </div>
                <div class="col-lg-3">
                    <section class="panel">
                        <div class="panel-body">col-lg-3</div>
                    </section>
                </div>
                <div class="col-lg-3">
                    <section class="panel">
                        <div class="panel-body">col-lg-3</div>
                    </section>
                </div>
                <div class="col-lg-3">
                    <section class="panel">
                        <div class="panel-body">col-lg-3</div>
                    </section>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2">
                    <section class="panel">
                        <div class="panel-body">col-lg-2</div>
                    </section>
                </div>
                <div class="col-lg-2">
                    <section class="panel">
                        <div class="panel-body">col-lg-2</div>
                    </section>
                </div>
                <div class="col-lg-2">
                    <section class="panel">
                        <div class="panel-body">col-lg-2</div>
                    </section>
                </div>
                <div class="col-lg-2">
                    <section class="panel">
                        <div class="panel-body">col-lg-2</div>
                    </section>
                </div>
                <div class="col-lg-2">
                    <section class="panel">
                        <div class="panel-body">col-lg-2</div>
                    </section>
                </div>
                <div class="col-lg-2">
                    <section class="panel">
                        <div class="panel-body">col-lg-2</div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="hd-title">Mobile, tablet, and desktop</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-xs-6">
                            <section class="panel">
                                <div class="panel-body">col-xs-6</div>
                            </section>
                        </div>
                        <div class="col-xs-6">
                            <section class="panel">
                                <div class="panel-body">col-xs-6</div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <section class="panel">
                        <div class="panel-body">col-lg-8</div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <section class="panel">
                                <div class="panel-body">col-sm-6</div>
                            </section>
                        </div>
                        <div class="col-sm-6">
                            <section class="panel">
                                <div class="panel-body">col-sm-6</div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <section class="panel">
                        <div class="panel-body">col-lg-6</div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <section class="panel">
                                <div class="panel-body">col-md-6</div>
                            </section>
                        </div>
                        <div class="col-md-6">
                            <section class="panel">
                                <div class="panel-body">col-md-6</div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <section class="panel">
                        <div class="panel-body">col-lg-4</div>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <section class="panel">
                        <div class="panel-body">col-sm-6</div>
                    </section>
                </div>
                <div class="col-sm-6">
                    <section class="panel">
                        <div class="panel-body">col-sm-6</div>
                    </section>
                </div>
            </div>


            <hr>


            <h4>Three equal columns</h4>
            <p>Get three equal-width columns
                <strong>starting at desktops and scaling to large desktops</strong>. On mobile devices, tablets and
                below, the columns will automatically stack.</p>
            <div class="row">
                <div class="col-md-4">
                    <section class="panel">
                        <div class="panel-body">col-md-4</div>
                    </section>
                </div>
                <div class="col-md-4">
                    <section class="panel">
                        <div class="panel-body">col-md-4</div>
                    </section>
                </div>
                <div class="col-md-4">
                    <section class="panel">
                        <div class="panel-body">col-md-4</div>
                    </section>
                </div>
            </div>

            <h4>Three unequal columns</h4>
            <p>Get three columns
                <strong>starting at desktops and scaling to large desktops</strong>of various widths. Remember, grid
                columns should add up to twelve for a single horizontal block. More than that, and columns start
                stacking no matter the viewport.</p>
            <div class="row">
                <div class="col-md-3">
                    <section class="panel">
                        <div class="panel-body">col-md-3</div>
                    </section>
                </div>
                <div class="col-md-6">
                    <section class="panel">
                        <div class="panel-body">col-md-6</div>
                    </section>
                </div>
                <div class="col-md-3">
                    <section class="panel">
                        <div class="panel-body">col-md-3</div>
                    </section>
                </div>
            </div>

            <h4>Two columns</h4>
            <p>Get two columns
                <strong>starting at desktops and scaling to large desktops</strong>.</p>
            <div class="row">
                <div class="col-md-8">
                    <section class="panel">
                        <div class="panel-body">col-md-8</div>
                    </section>
                </div>
                <div class="col-md-4">
                    <section class="panel">
                        <div class="panel-body">col-md-4</div>
                    </section>
                </div>
            </div>

            <h4>Full width, single column</h4>
            <p class="text-warning">No grid classes are necessary for full-width elements.</p>

            <hr>

            <h4>Two columns with two nested columns</h4>
            <p>Per the documentation, nesting is easy&mdash;just put a row of columns within an existing column. This
                gives you two columns
                <strong>starting at desktops and scaling to large desktops</strong>, with another two (equal widths)
                within the larger column.</p>
            <p>At mobile device sizes, tablets and down, these columns and their nested columns will stack.</p>
            <div class="row">
                <div class="col-md-8">
                    <section class="panel">
                        <div class="panel-body">col-md-8</div>
                    </section>
                    <div class="row">
                        <div class="col-md-6">
                            <section class="panel">
                                <div class="panel-body">col-md-6</div>
                            </section>
                        </div>
                        <div class="col-md-6">
                            <section class="panel">
                                <div class="panel-body">col-md-6</div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <section class="panel">
                        <div class="panel-body">col-md-4</div>
                    </section>
                </div>
            </div>

            <hr>


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

</body>

</html>
