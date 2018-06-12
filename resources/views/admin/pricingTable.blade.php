<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HeLinFeng 1.3</title>
    @include('admin.layouts')

    <link rel="stylesheet" href="{{ URL::asset('admin/css/extra-pages.css') }}">
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

        <div class="content-wrap wrap-price-table">
            <div class="row">

                <div class="col-sm-3">
                    <div class="plan">
                        <h3 class="plan-title">Started</h3>
                        <p class="plan-price">$19
                            <span class="plan-unit">per month</span>
                        </p>
                        <ul class="plan-features">
                            <li class="plan-feature">2
                                <span class="plan-feature-name">websites</span>
                            </li>
                            <li class="plan-feature">5
                                <span class="plan-feature-unit">GB</span>
                                <span class="plan-feature-name">storage</span>
                            </li>
                            <li class="plan-feature">3
                                <span class="plan-feature-name">users</span>
                            </li>
                        </ul>
                        <a href="#" class="plan-button">Choose Plan</a>
                    </div>

                </div>


                <div class="col-sm-3">
                    <div class="plan plan-highlight">
                        <p class="plan-recommended">Recommended</p>
                        <h3 class="plan-title">Team</h3>
                        <p class="plan-price">$49
                            <span class="plan-unit">per month</span>
                        </p>
                        <ul class="plan-features">
                            <li class="plan-feature">5
                                <span class="plan-feature-name">websites</span>
                            </li>
                            <li class="plan-feature">20
                                <span class="plan-feature-unit">GB</span>
                                <span class="plan-feature-name">storage</span>
                            </li>
                            <li class="plan-feature">10
                                <span class="plan-feature-name">users</span>
                            </li>
                        </ul>
                        <a href="#" class="plan-button">Choose Plan</a>
                    </div>

                </div>


                <div class="col-sm-3">

                    <div class="plan">
                        <h3 class="plan-title">Premium</h3>
                        <p class="plan-price">$99
                            <span class="plan-unit">per month</span>
                        </p>
                        <ul class="plan-features">
                            <li class="plan-feature">20
                                <span class="plan-feature-name">websites</span>
                            </li>
                            <li class="plan-feature">50
                                <span class="plan-feature-unit">GB</span>
                                <span class="plan-feature-name">storage</span>
                            </li>
                            <li class="plan-feature">25
                                <span class="plan-feature-name">users</span>
                            </li>
                        </ul>
                        <a href="#" class="plan-button">Choose Plan</a>
                    </div>

                </div>


                <div class="col-sm-3">
                    <div class="plan">
                        <h3 class="plan-title">Corporate</h3>
                        <p class="plan-price">$249
                            <span class="plan-unit">per month</span>
                        </p>
                        <ul class="plan-features">
                            <li class="plan-feature">&infin;
                                <span class="plan-feature-name">websites</span>
                            </li>
                            <li class="plan-feature">200
                                <span class="plan-feature-unit">GB</span>
                                <span class="plan-feature-name">storage</span>
                            </li>
                            <li class="plan-feature">&infin;
                                <span class="plan-feature-name">users</span>
                            </li>
                        </ul>
                        <a href="#" class="plan-button">Choose Plan</a>
                    </div>


                </div>

            </div>
        </div>


        <div class="content-wrap wrap-price-table">
            <div class="row">
                <!-- SIDEMENU MAIL -->

                <!-- CONTENT MAIL -->
                <div class="col-sm-4">
                    <div class="plan">
                        <div class="plan-circle">
                            <h3>Started</h3>
                            <p>$19</p>
                            <span>per month</span>

                        </div>
                        <ul class="plan-features">
                            <li class="plan-feature">2
                                <span class="plan-feature-name">websites</span>
                            </li>
                            <li class="plan-feature">5
                                <span class="plan-feature-unit">GB</span>
                                <span class="plan-feature-name">storage</span>
                            </li>
                            <li class="plan-feature">3
                                <span class="plan-feature-name">users</span>
                            </li>
                        </ul>
                        <a href="#" class="plan-button">Choose Plan</a>
                    </div>

                </div>


                <div class="col-sm-4">
                    <div class="plan plan-highlight">
                        <div class="plan-circle-highlight">
                            <!--   <h2>Recommended</h2> -->
                            <h3>Team</h3>
                            <p>$49</p>
                            <span>per month</span>
                        </div>

                        <ul class="plan-features">
                            <li class="plan-feature">5
                                <span class="plan-feature-name">websites</span>
                            </li>
                            <li class="plan-feature">20
                                <span class="plan-feature-unit">GB</span>
                                <span class="plan-feature-name">storage</span>
                            </li>
                            <li class="plan-feature">10
                                <span class="plan-feature-name">users</span>
                            </li>
                        </ul>
                        <a href="#" class="plan-button">Choose Plan</a>
                    </div>

                </div>


                <div class="col-sm-4">
                    <div class="plan">
                        <div class="plan-circle">
                            <h3>Corporate</h3>
                            <p>$249</p>
                            <span>per month</span>
                        </div>
                        <ul class="plan-features">
                            <li class="plan-feature">&infin;
                                <span class="plan-feature-name">websites</span>
                            </li>
                            <li class="plan-feature">200
                                <span class="plan-feature-unit">GB</span>
                                <span class="plan-feature-name">storage</span>
                            </li>
                            <li class="plan-feature">&infin;
                                <span class="plan-feature-name">users</span>
                            </li>
                        </ul>
                        <a href="#" class="plan-button">Choose Plan</a>
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
@include('admin.bottom')

</body>

</html>
