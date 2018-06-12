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


    <link rel="stylesheet" href="assets/js/calendar/css/calendar.css">


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
    @include('admin.title')
    <!--/ TITLE -->

        <!-- BREADCRUMB -->
    @include('admin.breadcrumb')
    <!-- END OF BREADCRUMB -->


        <div class="content-wrap">
            <div class="row">


                <div class="col-sm-12">

                    <div class="nest" id="labelClose">
                        <div class="title-alt">
                            <h6>
                                <span class="icon-calendar"></span>&nbsp;&nbsp;Calendar</h6>
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

                            <div class="page-header">

                                <div class="pull-right form-inline">
                                    <div class="btn-group">
                                        <button class="btn btn-primary" data-calendar-nav="prev">
                                            <span class="entypo-left-circled">&nbsp;&nbsp;Prev</span>
                                        </button>

                                        <button class="btn btn-default" data-calendar-nav="today">Today</button>

                                        <button class="btn btn-primary" data-calendar-nav="next">Next&nbsp;&nbsp;
                                            <span class="entypo-right-circled"></span>
                                        </button>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-warning" data-calendar-view="year">Year</button>
                                        <button class="btn btn-warning active" data-calendar-view="month">Month</button>
                                        <button class="btn btn-warning" data-calendar-view="week">Week</button>
                                        <button class="btn btn-warning" data-calendar-view="day">Day</button>
                                    </div>
                                </div>

                                <h3>
                                    <span></span>
                                </h3>

                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div id="calendar"></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row" style="padding:0 20px 0 0;">
                                        <select id="first_day" class="form-control"
                                                style="margin-bottom:10px;margin-top:30px;">
                                            <option value="" selected="selected">First day of week language-dependant
                                            <option value="2">First day of week is Sunday
                                            <option value="1">First day of week is Monday
                                        </select>
                                        <select id="language" class="form-control">
                                            <option value="">Language
                                            <option value="nl-NL">Dutch
                                            <option value="fr-FR">French
                                            <option value="de-DE">German
                                            <option value="el-GR">Greek
                                            <option value="it-IT">Italian
                                            <option value="pl-PL">Polish
                                            <option value="pt-BR">Portuguese (Brazil)
                                            <option value="es-MX">Spanish (Mexico)
                                            <option value="es-ES">Spanish (Spain)
                                            <option value="ru-RU">Russian
                                            <option value="sv-SE">Swedish
                                        </select>

                                    </div>


                                </div>
                            </div>

                            <div class="clearfix"></div>

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


<!-- /MAIN EFFECT -->
<!-- GAGE -->
<script type="text/javascript" src="assets/js/calendar/underscore/underscore-min.js"></script>
<!-- <script type="text/javascript" src="assets/js/calendar/bootstrap3/js/bootstrap.min.js"></script> -->
<script type="text/javascript" src="assets/js/calendar/jstimezonedetect/jstz.min.js"></script>

<script type="text/javascript" src="assets/js/calendar/language/fr-FR.js"></script>
<script type="text/javascript" src="assets/js/calendar/language/de-DE.js"></script>
<script type="text/javascript" src="assets/js/calendar/language/el-GR.js"></script>
<script type="text/javascript" src="assets/js/calendar/language/it-IT.js"></script>
<script type="text/javascript" src="assets/js/calendar/language/pl-PL.js"></script>
<script type="text/javascript" src="assets/js/calendar/language/pt-BR.js"></script>
<script type="text/javascript" src="assets/js/calendar/language/es-MX.js"></script>
<script type="text/javascript" src="assets/js/calendar/language/es-ES.js"></script>
<script type="text/javascript" src="assets/js/calendar/language/ru-RU.js"></script>
<script type="text/javascript" src="assets/js/calendar/language/sv-SE.js"></script>
<script type="text/javascript" src="assets/js/calendar/calendar.js"></script>
<script type="text/javascript" src="assets/js/calendar/app.js"></script>


</body>

</html>
