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

                    <div class="nest" id="alertClose">
                        <div class="title-alt">
                            <h6>
                                Alert</h6>
                            <div class="titleClose">
                                <a class="gone" href="#alertClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#alert">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="alert">


                            <!--  <h2>Table Bordered</h2> -->
                            <p>For longer messages, increase the padding on the top and bottom of the alert wrapper by
                                adding
                                <code>.alert-block</code>.</p>

                            <div class="alert alert-warning">
                                <button data-dismiss="alert" class="close" type="button">×</button>
                                <span class="entypo-cancel-circled"></span>
                                <strong>Warning!</strong>&nbsp;&nbsp;Best check yo self, you're not looking too good.
                            </div>

                            <div class="alert alert-danger">
                                <button data-dismiss="alert" class="close" type="button">×</button>
                                <span class="entypo-attention"></span>
                                <strong>Oh snap!</strong>&nbsp;&nbsp;Change a few things up and try submitting again.
                            </div>

                            <div class="alert alert-success">
                                <button data-dismiss="alert" class="close" type="button">×</button>
                                <span class="entypo-thumbs-up"></span>
                                <strong>Well done!</strong>&nbsp;&nbsp;You successfully read this important alert
                                message.
                            </div>

                            <div class="alert alert-info">
                                <button data-dismiss="alert" class="close" type="button">×</button>
                                <span class="entypo-info-circled"></span>
                                <strong>Heads up!</strong>&nbsp;&nbsp;This alert needs your attention, but it's not
                                super important.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="content-wrap">
            <div class="row">
                <div class="col-sm-12">

                    <div class="nest" id="notifClose">
                        <div class="title-alt">
                            <h6>
                                Notify</h6>
                            <div class="titleClose">
                                <a class="gone" href="#notifClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#notif">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div id="notif" style="display:block" class="body-nest">

                            <button onClick="$.pnotify({
                                title: 'New Thing',
                                text: 'Just to let you know, something happened.',
                                type: 'info'

                             });" class="btn source">Info Notice
                            </button>

                            <button onClick="$.pnotify({
                                title: 'New Thing',
                                text: 'Just to let you know, something happened.',
                                type: 'success'

                             });" class="btn source">Success Notice
                            </button>

                            <button onClick="$.pnotify({
                                title: 'New Thing',
                                text: 'Just to let you know, something happened.',
                                type: 'error'

                             });" class="btn source">Important Notice
                            </button>

                            <button onClick="$.pnotify({
                                 title: 'New Thing',
                                text: 'Just to let you know, something happened.',
                              

                             });" class="btn source">Info Notice
                            </button>


                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="content-wrap">
            <div class="row">
                <div class="col-sm-12">
                    <div class="nest" id="tipClose">
                        <div class="title-alt">
                            <h6>
                                Tooltip</h6>
                            <div class="titleClose">
                                <a class="gone" href="#tipClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#tip">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="tip">
                            <div class="form_center" style="text-align:center">
                                <button type="button" class="btn" data-toggle="tooltip" data-placement="left"
                                        title="Tooltip on left">Tooltip on left
                                </button>

                                <button type="button" class="btn" data-toggle="tooltip" data-placement="top"
                                        title="Tooltip on top">Tooltip on top
                                </button>

                                <button type="button" class="btn" data-toggle="tooltip" data-placement="bottom"
                                        title="Tooltip on bottom">Tooltip on bottom
                                </button>

                                <button type="button" class="btn" data-toggle="tooltip" data-placement="right"
                                        title="Tooltip on right">Tooltip on right
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- PROGRESS BAR -->
        <div class="content-wrap">
            <div class="row">


                <div class="col-sm-12">

                    <div class="nest" id="progressClose">
                        <div class="title-alt">
                            <h6>
                                Progress Bar</h6>
                            <div class="titleClose">
                                <a class="gone" href="#progressClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#progress">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="progress">

                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                     aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    <span class="sr-only">40% Complete (success)</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
                                     aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                    <span class="sr-only">20% Complete</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                     aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    <span class="sr-only">60% Complete (warning)</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                                     aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                    <span class="sr-only">80% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /PROGRESS BAR -->


        <!-- Labels and Badges -->

        <div class="content-wrap">
            <div class="row">


                <div class="col-sm-12">

                    <div class="nest" id="labelClose">
                        <div class="title-alt">
                            <h6>
                                Labels and Badges</h6>
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

                            <ul>
                                <li>
                                    <span class="label">Default</span>
                                </li>
                                <li>
                                    <span class="label label-success">Success</span>
                                </li>
                                <li>
                                    <span class="label label-warning">Warning</span>
                                </li>
                                <li>
                                    <span class="label label-important">Important</span>
                                </li>
                                <li>
                                    <span class="label label-info">Info</span>
                                </li>
                                <li>
                                    <span class="label label-inverse">Inverse</span>
                                </li>
                                <!-- <li></li> -->

                            </ul>
                            <ul>
                                <li>
                                    <span class="badge">1</span>
                                </li>
                                <li>
                                    <span class="badge badge-success">2</span>
                                </li>
                                <li>
                                    <span class="badge badge-warning">4</span>
                                </li>
                                <li>
                                    <span class="badge badge-important">6</span>
                                </li>
                                <li>
                                    <span class="badge badge-info">8</span>
                                </li>
                                <li>
                                    <span class="badge badge-inverse">10</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /Labels and Badges -->

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
<!-- PLUG IN -->
<script type="text/javascript" src="assets/js/pnotify/jquery.pnotify.min.js"></script>


<script type="text/javascript">
    $('.btn').tooltip();
</script>


</body>

</html>
