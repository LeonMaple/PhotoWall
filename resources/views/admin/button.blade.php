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
