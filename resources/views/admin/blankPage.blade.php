<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HeLinFeng v1.0</title>
    @include('admin.menu.layouts')

    <link rel="stylesheet" href="{{ URL::asset('admin/js/button/ladda/ladda.min.css') }}">

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
                    <!-- BLANK PAGE-->

                    <div class="nest" id="Blank_PageClose">
                        <div class="title-alt">
                            <h6>
                                Blank Page</h6>
                            <div class="titleClose">
                                <a class="gone" href="#Blank_PageClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#Blank_Page_Content">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="Blank_Page_Content">

                            Content Goes Here
                        </div>
                    </div>
                </div>
                <!-- END OF BLANK PAGE -->


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
    @include('admin.menu.bottom')
</div>
</body>

</html>
