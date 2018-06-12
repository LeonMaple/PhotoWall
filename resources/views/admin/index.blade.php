<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>HELINFENG</title>

    @include('admin.layouts')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('admin/js/progress-bar/number-pb.css') }}">
    <style type="text/css">
        canvas#canvas4 {
            position: relative;
            top: 20px;
        }
    </style>
</head>

<body>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>

<!-- 顶部 -->
@include('admin.top')

<!-- 左边菜单 -->
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

        <div id="paper-middle">
            <div id="mapContainer"></div>
        </div>

        <!--  DEVICE MANAGER -->
        <div class="content-wrap">
            <div class="row">
                <div class="col-lg-3">
                    <div class="profit" id="profitClose">
                        <div class="headline ">
                            <h3>
                                <span><i class="maki-ferry"></i>&#160;&#160;Ferry Arrival</span>
                            </h3>
                            <div class="titleClose">
                                <a href="#profitClose" class="gone">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                        </div>

                        <div class="value">
                            <span class="pull-left"><i class="entypo-clock clock-position"></i></span>
                            <div id="getting-started">
                                <span>%M</span>
                                <span>%S</span>
                            </div>
                        </div>

                        <div class="progress-tinny">
                            <div style="width: 50%" class="bar"></div>
                        </div>
                        <div class="profit-line">
                            <i class="fa fa-caret-up fa-lg"></i>&#160;&#160; 50% &#160;From Last Hour
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="revenue" id="revenueClose">
                        <div class="headline ">
                            <h3>
                                <span><i class="maki-aboveground-rail"></i>&#160;&#160;Train Speed</span>
                            </h3>

                            <div class="titleClose">
                                <a href="#revenueClose" class="gone">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                        </div>
                        <div class="value">
                                <span class="pull-left"><i class="entypo-gauge gauge-position"></i>
                                </span>
                            <canvas id="canvas4" width="70" height="70"></canvas>
                            <i class="pull-right">/Km</i>
                        </div>


                        <div class="progress-tinny">
                            <div style="width: 25%" class="bar"></div>
                        </div>
                        <div class="profit-line">
                            <i class="fa fa-caret-down fa-lg"></i>&#160;&#160;Rate : 20 km/Hour
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="order" id="orderClose">
                        <div class="headline ">
                            <h3>
                                <span><i class="maki-airport"></i>&#160;&#160;AIR PORT TRAFFIC</span>
                            </h3>
                            <div class="titleClose">
                                <a href="#orderClose" class="gone">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                        </div>
                        <div class="value">
                            <span><i class="fa fa-plane fa-2x"></i></span>
                            <b id="speed"></b><b>Take Off</b>
                        </div>

                        <div class="progress-tinny">
                            <div style="width: 10%" class="bar"></div>
                        </div>
                        <div class="profit-line">
                            <i class="fa fa-caret-down fa-lg"></i>&#160;&#160;Rate : 20 Plane/Hour
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class=" member" id="memberClose">
                        <div class="headline ">
                            <h3>
                                <span>
                                    <i class="fa fa-truck"></i>
                                        &#160;&#160;CARGO
                                </span>
                            </h3>
                            <div class="titleClose">
                                <a href="#memberClose" class="gone">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                        </div>
                        <div class="value">
                            <span><i class="maki-warehouse"></i>
                            </span>45<b>Sent</b>
                        </div>
                        <div class="progress-tinny">
                            <div style="width: 50%" class="bar"></div>
                        </div>
                        <div class="profit-line">
                            <span class="entypo-down-circled"></span>&#160;50% From Last Month
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  / DEVICE MANAGER -->

        <div class="content-wrap">
            <div class="row">
                <div class="col-lg-8">
                    <div id="siteClose" class="nest">
                        <div class="title-alt">
                            <h6>
                                <span class="fontawesome-truck"></span>&nbsp;Destination</h6>
                            <div class="titleClose">
                                <a class="gone" href="#siteClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#site">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>
                        </div>
                        <div id="site" class="body-nest" style="min-height:296px;">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="armada-devider">
                                            <div class="armada">
                                                        <span style="background:#65C3DF">
                                                            <span class="maki-bus"></span>&nbsp;&nbsp;Trans Berlin</span>
                                                <p>
                                                    <span class="entypo-gauge"></span>&nbsp;12 Km/<i>Hours</i>
                                                </p>
                                            </div>
                                        </td>
                                        <td class="driver-devider">
                                            <img class="armada-pic img-circle" alt=""
                                                 src="http://api.randomuser.me/portraits/thumb/men/14.jpg">
                                            <h3>Mark Zukenbeirg</h3>
                                            <br>
                                            <p>Driver</p>
                                        </td>
                                        <td class="progress-devider">


                                            <section id="basic">
                                                <article>

                                                    <div class="number-pb">
                                                        <div class="number-pb-shown"></div>
                                                        <div class="number-pb-num">0</div>
                                                    </div>
                                                </article>
                                            </section>
                                            <span class="label pull-left">Berlin</span>
                                            <span class="label pull-right">Muchen</span>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="armada-devider">
                                            <div class="armada">
                                                        <span style="background:#45B6B0">
                                                            <span class="fontawesome-plane"></span>&nbsp;&nbsp;Fly Airlines</span>
                                                <p>
                                                    <span class="entypo-gauge"></span>&nbsp;600 Km/<i>Hours</i>
                                                </p>
                                            </div>
                                        </td>
                                        <td class="driver-devider">
                                            <img class="armada-pic img-circle" alt=""
                                                 src="http://api.randomuser.me/portraits/thumb/men/38.jpg">
                                            <h3>Marko Freytag</h3>
                                            <br>
                                            <p>Pilot</p>
                                        </td>
                                        <td class="progress-devider">


                                            <section id="percentage">
                                                <article>
                                                    <div class="number-pb">
                                                        <div class="number-pb-shown dream"></div>
                                                        <div class="number-pb-num">0%</div>
                                                    </div>
                                                </article>
                                            </section>


                                            <span class="label pull-left">Berlin</span>
                                            <span class="label pull-right">London</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="armada-devider">
                                            <div class="armada">
                                                        <span style="background:#FF6B6B">
                                                            <span class="maki-aboveground-rail"></span>&nbsp;&nbsp;Fazttrain</span>
                                                <p>
                                                    <span class="entypo-gauge"></span>&nbsp;40 Km/<i>Hours</i>
                                                </p>
                                            </div>
                                        </td>
                                        <td class="driver-devider">
                                            <img class="armada-pic img-circle" alt=""
                                                 src="http://api.randomuser.me/portraits/thumb/men/39.jpg">
                                            <h3>Dieter Gruenewald</h3>
                                            <br>
                                            <p>machinist</p>
                                        </td>
                                        <td class="progress-devider">

                                            <section id="step">
                                                <article>

                                                    <div class="number-pb">
                                                        <div class="number-pb-shown sun"></div>
                                                        <div class="number-pb-num">0/0</div>
                                                    </div>
                                                </article>
                                            </section>

                                            <span class="label pull-left">Berlin</span>
                                            <span class="label pull-right">Dortmund</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div id="RealTimeClose" class="nest">
                        <div class="title-alt">
                            <h6>
                                <span class="fontawesome-resize-horizontal"></span>&nbsp;Direction</h6>
                            <div class="titleClose">
                                <a class="gone" href="#RealTimeClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#RealTime">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>
                        </div>
                        <div id="RealTime" style="min-height:296px;padding-top:20px;" class="body-nest">
                            <ul class="direction">
                                <li>
                                    <span class="direction-icon maki-fuel" style="background:#FF6B6B"></span>
                                    <h3>
                                        <span>Gas Station</span>
                                    </h3>
                                    <p>5 Km Foward&nbsp;&nbsp;<i class="fa fa-arrow-circle-up"></i>
                                    </p>
                                    <p><i>Estimated time </i>:&nbsp;<i class="fa fa-clock-o"></i>&nbsp;&nbsp;20 Min</p>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <span class="direction-icon maki-fast-food" style="background:#65C3DF"></span>
                                    <h3>
                                        <span>Restourant</span>
                                    </h3>
                                    <p>1 Km Turn Left&nbsp;&nbsp;<i class="fa fa-reply"></i>
                                    </p>
                                    <p><i>Estimated time </i>:&nbsp;<i class="fa fa-clock-o"></i>&nbsp;&nbsp;20 Min</p>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <span class="direction-icon maki-giraffe" style="background:#45B6B0"></span>
                                    <h3>
                                        <span>Zoo</span>
                                    </h3>
                                    <p>3 Km Turn Right &nbsp;&nbsp;<i class="fa fa-share"></i>
                                    </p>
                                    <p><i>Estimated time </i>:&nbsp;<i class="fa fa-clock-o"></i>&nbsp;&nbsp;20 Min</p>
                                </li>
                                <li class="divider"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="content-wrap">
            <div class="row">
                <div class="col-lg-6">
                    <div class="chart-wrap">
                        <div class="chart-dash">
                            <!-- <div id="sparkline"></div> -->
                            <div id="placeholder" style="width:100%;height:200px;"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="speed">
                                    <h2>Speed Avarage</h2>
                                    <h1>74
                                        <span>Km / hours</span>
                                    </h1>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="traffic">
                                    <h2>Traffic per day</h2>
                                    <h1>2.5874</h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="traffic-rates">
                                    <h4>Traffic Rates</h4>
                                    <h1>76 %
                                        <span>-1,2 %</span>
                                    </h1>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="traffic-rates">
                                    <h4>Traffic Rates</h4>
                                    <h1>25 %
                                        <span>-1,8 %</span>
                                    </h1>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="traffic-rates">
                                    <h4>Traffic Rates</h4>
                                    <h1>83 %
                                        <span>-1,9 %</span>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="weather-wrap">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="temperature"><b>Monday</b>, 07:30 AM
                                    <span>F</span>
                                    <span><b>C</b>
                                        </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="weather-icon">
                                    <i class="wi-day-lightning"></i>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="weather-text">
                                    <h2>Berlin
                                        <br><i>Day Lightning</i>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="weather-text">
                                    <h3><i class="wi-thermometer"></i>18<i class="wi-celcius"></i>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="weather-dash">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="daily-weather">
                                        <h2>Mon</h2>
                                        <h3>85
                                            <span><i class="wi-fahrenheit"></i>
                                                </span>
                                        </h3>
                                        <h4>
                                                <span><i class="wi-day-lightning"></i>
                                                </span>
                                        </h4>
                                        <h5>15
                                            <i>km/h</i>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="daily-weather">
                                        <h2>Tue</h2>
                                        <h3>81
                                            <span><i class="wi-fahrenheit"></i>
                                                </span>
                                        </h3>
                                        <h4><i class="wi-day-cloudy"></i>
                                        </h4>
                                        <h5>12
                                            <i>km/h</i>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="daily-weather">
                                        <h2>Wed</h2>
                                        <h3>83
                                            <span><i class="wi-fahrenheit"></i>
                                                </span>
                                        </h3>
                                        <h4><i class="wi-rain-mix"></i>
                                        </h4>
                                        <h5>14
                                            <i>km/h</i>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="daily-weather">
                                        <h2>Thu</h2>
                                        <h3>80
                                            <span><i class="wi-fahrenheit"></i>
                                                </span>
                                        </h3>
                                        <h4><i class="wi-day-sunny"></i>
                                        </h4>
                                        <h5>15
                                            <i>km/h</i>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="daily-weather">
                                        <h2>Fri</h2>
                                        <h3>79
                                            <span><i class="wi-fahrenheit"></i>
                                                </span>
                                        </h3>
                                        <h4><i class="wi-day-storm-showers"></i>
                                        </h4>
                                        <h5>11
                                            <i>km/h</i>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="daily-weather">
                                        <h2>Sat</h2>
                                        <h3>82
                                            <span><i class="wi-fahrenheit"></i>
                                                </span>
                                        </h3>
                                        <h4><i class="wi-cloudy"></i>
                                        </h4>
                                        <h5>10
                                            <i>km/h</i>
                                        </h5>
                                    </div>
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


            </div>
            <!-- / END OF FOOTER -->


        </div>
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
            <div class="col-lg-12">

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
            <div class="col-lg-12">
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
<script type="text/javascript" src="{{ URL::asset('admin/js/jquery.js') }}"></script>
<script src="{{ URL::asset('admin/js/progress-bar/src/jquery.velocity.min.js') }}"></script>
<script src="{{ URL::asset('admin/js/progress-bar/number-pb.js') }}"></script>
<script src="{{ URL::asset('admin/js/progress-bar/progress-app.js') }}"></script>

<!-- MAIN EFFECT -->
@include('admin.bottom')

<!-- GAGE -->
<script type="text/javascript" src="{{ URL::asset('admin/js/chart/jquery.flot.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/js/chart/jquery.flot.resize.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/js/chart/realTime.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/js/speed/canvasgauge-coustom.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('admin/js/countdown/jquery.countdown.js') }}"></script>


{{--<script src="{{ URL::asset('admin/js/jhere-custom.js') }}"></script>--}}

{{--<script>--}}
    {{--var gauge4 = new Gauge("canvas4", {--}}
        {{--'mode': 'needle',--}}
        {{--'range': {--}}
            {{--'min': 0,--}}
            {{--'max': 90--}}
        {{--}--}}
    {{--});--}}
    {{--gauge4.draw(Math.floor(Math.random() * 90));--}}
    {{--var run = setInterval(function () {--}}
        {{--gauge4.draw(Math.floor(Math.random() * 90));--}}
    {{--}, 3500);--}}
{{--</script>--}}


<script type="text/javascript">
    /* Javascript
     *
     * See http://jhere.net/docs for full documentation
     */
    $(window).on('load', function () {
        $('#mapContainer').jHERE({
            center: [52.500556, 13.398889],
            type: 'smart',
            zoom: 10
        }).jHERE('marker', [52.500556, 13.338889], {
            icon: "{{ URL::asset('admin/img/marker.pngs') }}",
            anchor: {
                x: 12,
                y: 32
            },
            click: function () {
                alert('Hallo from Berlin!');
            }
        })
            .jHERE('route', [52.711, 13.011], [52.514, 13.453], {
                color: '#FFA200',
                marker: {
                    fill: '#86c440',
                    text: '#'
                }
            });
    });
</script>
<script type="text/javascript">
    var output, started, duration, desired;

    // Constants
    duration = 5000;
    desired = '50';

    // Initial setup
    output = $('#speed');
    started = new Date().getTime();

    // Animate!
    animationTimer = setInterval(function () {
        // If the value is what we want, stop animating
        // or if the duration has been exceeded, stop animating
        if (output.text().trim() === desired || new Date().getTime() - started > duration) {
            console.log('animating');
            // Generate a random string to use for the next animation step
            output.text('' + Math.floor(Math.random() * 60)
            );

        } else {
            console.log('animating');
            // Generate a random string to use for the next animation step
            output.text('' + Math.floor(Math.random() * 120)
            );
        }
    }, 5000);
</script>
<script type="text/javascript">
    $('#getting-started').countdown('2015/01/01', function (event) {
        $(this)(event.strftime(
            '<span>%M</span>' + '<span class="start-min">:</span>' + '<span class="start-min">%S</span>'));
    });
</script>

<div style="text-align:center;">
    <p>More Templates </p>
</div>
</body>

</html>
