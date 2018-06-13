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
    <style type="text/css">
        canvas {
            width: 100% !important;
            max-width: 1000px;
            height: auto !important;
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
            href="" target="_blank">best
        websites of the world</a></div>
<!-- TOP NAVBAR -->
@include('admin.menu.top')
<!-- /END OF TOP NAVBAR -->

<!-- SIDE MENU -->
@include('admin.menu.menu')
<!-- END OF SIDE MENU -->


<!--  PAPER WRAP -->
<div class="wrap-fluid">
    <div class="container-fluid paper-wrap bevel tlbr">


        <!-- CONTENT -->
        <!--TITLE -->
    @include('admin.menu.title')
    <!--/ TITLE -->

        <!-- BREADCRUMB -->
    @include('admin.menu.breadcrumb')
    <!-- END OF BREADCRUMB -->

        <div class="content-wrap">
            <div class="row">


                <div class="col-sm-12">

                    <div class="nest" id="realtimeClose">
                        <div class="title-alt">
                            <h6>
                                Plot Realtime</h6>
                            <div class="titleClose">
                                <a class="gone" href="#realtimeClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#realtime">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="realtime">

                            <div id="placeholder" style="width:100%;height:300px;"></div>


                            <p>You can update a chart periodically to get a real-time effect by using a timer to insert
                                the new data in the plot and redraw it.</p>

                            <p>Time between updates:
                                <input id="updateInterval" type="text" value="" style="text-align: right; width:5em">milliseconds
                            </p>


                        </div>

                    </div>


                </div>


            </div>


        </div>

        <div class="content-wrap">
            <div class="row">


                <div class="col-sm-12">

                    <div class="nest" id="plotClose">
                        <div class="title-alt">
                            <h6>
                                Plot Line</h6>
                            <div class="titleClose">
                                <a class="gone" href="#plotClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#plot">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="plot">

                            <div id="placeholder2" style="width:100%;height:300px;"></div>
                            <p>You can update a chart periodically to get a real-time effect by using a timer to insert
                                the new data in the plot and redraw it.</p>

                            <div class="graphControls">
                                <input type="button" class="btn" value="Bars">
                                <input type="button" class="btn" value="Lines">
                                <input type="button" class="btn" value="Lines with steps">
                            </div>

                        </div>

                    </div>


                </div>


            </div>


        </div>


        <div class="content-wrap">
            <div class="row">


                <div class="col-sm-12">

                    <div class="nest" id="labelClose">
                        <div class="title-alt">
                            <h6>
                                Bar Chart</h6>
                            <div class="titleClose">
                                <a class="gone" href="#labelClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#label">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="label">

                            <canvas id="canvas1" class="myChart" height="416" width="900"></canvas>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="content-wrap">
            <div class="row">


                <div class="col-sm-12">

                    <div class="nest" id="lineClose">
                        <div class="title-alt">
                            <h6>
                                Line Chart</h6>
                            <div class="titleClose">
                                <a class="gone" href="#lineClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#line">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="line">

                            <canvas id="canvas4" class="myChart" height="416" width="900"></canvas>

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
                                         src="">
                                </span><b>Dave Junior</b>
                            <br><i>Last seen : 08:00 PM</i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-circle"
                                         src="">
                                </span><b>Kenneth Lucas</b>
                            <br><i>Last seen : 07:21 PM</i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-circle"
                                         src="">
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
                                         src="">
                                </span><b>Dave Junior</b>
                            <br><i>Last seen : 08:00 PM</i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle"
                                         src="">
                                </span><b>Kenneth Lucas</b>
                            <br><i>Last seen : 07:21 PM</i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle"
                                         src="">
                                </span><b>Heidi Perez</b>
                            <br><i>Last seen : 05:43 PM</i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle"
                                         src="">
                                </span><b>Kenneth Lucas</b>
                            <br><i>Last seen : 07:21 PM</i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                                <span>
                                    <img alt="" class="img-chat img-offline img-circle"
                                         src="">
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
<!--  PLUGIN -->
<script type="text/javascript" src="assets/js/chart/chart.js"></script>
<script type="text/javascript" src="assets/js/chart/barChart.js"></script>
<script type="text/javascript" src="assets/js/chart/radarChart.js"></script>
<script type="text/javascript" src="assets/js/chart/polarChart.js"></script>
<script type="text/javascript" src="assets/js/chart/lineChart.js"></script>


<script type="text/javascript" src="assets/js/chart/jquery.flot2.js"></script>
<script type="text/javascript" src="assets/js/chart/jquery.flot.resize.js"></script>
<script type="text/javascript" src="assets/js/chart/realTime.js"></script>
<script type="text/javascript" src="assets/js/chart/chart-float-stacking.js"></script>


</body>

</html>
