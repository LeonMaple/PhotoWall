<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HeLinFeng 1.3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>

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
                    <div class="nest" id="GmapClose">
                        <div class="title-alt">
                            <h6>
                                Gmap</h6>
                            <div class="titleClose">
                                <a class="gone" href="#GmapClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#Gmap">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div style="padding:0;" class="body-nest" id="Gmap">


                            <div id="test1" class="gmap" style="width:100%;height:500px;position:relative;"></div>


                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="content-wrap">
            <div class="row">


                <div class="col-sm-12">
                    <div class="nest" id="JHereClose">
                        <div class="title-alt">
                            <h6>
                                JHere</h6>
                            <div class="titleClose">
                                <a class="gone" href="#JHereClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#JHere">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div style="padding:0;" class="body-nest" id="JHere">


                            <div id="mapContainer" style="width:100%;height:500px;position:relative;"></div>


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


<script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script type="text/javascript" src="assets/js/map/gmap3.js"></script>
<script src="http://jhere.net/js/jhere-custom.js"></script>


<script type="text/javascript">
    $(function () {

        $("#test1").gmap3({
            marker: {
                latLng: [52.500556, 13.398889],
                options: {
                    draggable: true
                },
                events: {
                    dragend: function (marker) {
                        $(this).gmap3({
                            getaddress: {
                                latLng: marker.getPosition(),
                                callback: function (results) {
                                    var map = $(this).gmap3("get"),
                                        infowindow = $(this).gmap3({
                                            get: "infowindow"
                                        }),
                                        content = results && results[1] ? results && results[1].formatted_address : "no address";
                                    if (infowindow) {
                                        infowindow.open(map, marker);
                                        infowindow.setContent(content);
                                    } else {
                                        $(this).gmap3({
                                            infowindow: {
                                                anchor: marker,
                                                options: {
                                                    content: content
                                                }
                                            }
                                        });
                                    }
                                }
                            }
                        });
                    }
                }
            },
            map: {
                options: {
                    zoom: 13
                }
            }
        });

    });
</script>

<script type="text/javascript">
    /* Javascript
     *
     * See http://jhere.net/docs for full documentation
     */
    $(window).on('load', function () {
        $('#mapContainer').jHERE({
            center: [52.500556, 13.398889],
            type: 'smart',
            zoom: 13
        });
    });
</script>


</body>

</html>
