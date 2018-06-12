<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HeLinFeng 1.3</title>
    @include('admin.menu.layouts')

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
            <div class="time-wrap">
                <div class="row">
                    <div class="col-md-12">
                        <!-- The time line -->
                        <ul class="timeline">
                            <!-- timeline time label -->
                            <li class="time-label">
                                    <span class="bg-red">
                                        10 Feb. 2014
                                    </span>
                            </li>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-envelope bg-time"></i>
                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
                                    <h3 class="timeline-header"><a href="#">Support Team</a> sent you and email</h3>
                                    <div class="timeline-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et dui id
                                        justo rhoncus consequat. Aliquam porttitor, arcu quis ornare ultricies, augue
                                        neque fringilla turpis, nec cursus arcu enim nec ante. Duis lacus velit,
                                        ultricies nec condimentum at, ultrices id eros. Nullam elementum turpis ut est
                                        porttitor porttitor. Mauris eu nunc id neque tempor venenatis. Nulla eu placerat
                                        orci, quis gravida nulla. Donec suscipit ligula felis, nec egestas massa aliquet
                                        vitae. Cras nec faucibus leo, eu placerat est. Phasellus tortor nulla, congue
                                        tristique cursus nec, pellentesque non nunc. Nullam condimentum ante nulla,
                                        pellentesque fermentum mi tristique eget. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Nam sit amet rutrum felis. Ut ultricies mi ut
                                        adipiscing fringilla.
                                    </div>
                                    <div class='timeline-footer'>
                                        <a class="btn btn-primary btn-xs">Read more</a>
                                        <a class="btn btn-danger btn-xs">Delete</a>
                                    </div>
                                </div>
                            </li>
                            <!-- END timeline item -->
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-user bg-time"></i>
                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>
                                    <h3 class="timeline-header no-border"><a href="#">Dominic Pagboo</a> accepted your
                                        friend request</h3>

                                    <div class="timeline-body">
                                        Vestibulum risus augue, cursus et est sed, pharetra venenatis nibh. Sed
                                        hendrerit sollicitudin pretium. Integer consequat suscipit scelerisque. Nullam
                                        sagittis, ante et aliquet tincidunt, nunc metus tincidunt ipsum, at gravida
                                        lacus nibh eget purus. Nulla euismod est et massa scelerisque, vitae semper diam
                                        ultrices. Donec porta condimentum pharetra. Suspendisse tincidunt, mauris vel
                                        laoreet aliquet, urna ante tristique nisl, ut sagittis justo neque quis augue.
                                        In sollicitudin vel libero interdum varius.
                                    </div>
                                </div>
                            </li>
                            <!-- END timeline item -->
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-comments bg-time"></i>
                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> 40 mins ago</span>
                                    <h3 class="timeline-header"><a href="#">Ronald deboor</a> commented on your post
                                    </h3>
                                    <div class="timeline-body">
                                        Pellentesque vel sem in dui porttitor tempus non interdum augue. Aliquam
                                        consectetur arcu nec enim vulputate, eget mattis augue rhoncus. Aliquam
                                        porttitor cursus metus vitae fringilla. Pellentesque sed ipsum id purus placerat
                                        ornare. Mauris bibendum enim tellus,
                                    </div>
                                    <div class='timeline-footer'>
                                        <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                                    </div>
                                </div>
                            </li>
                            <!-- END timeline item -->
                            <!-- timeline time label -->
                            <li class="time-label">
                                    <span class="bg-green">
                                        3 Jan. 2014
                                    </span>
                            </li>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-camera bg-time"></i>
                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>
                                    <h3 class="timeline-header"><a href="#">Joko Sriyanto</a> Your new friends</h3>
                                    <div class="timeline-body">
                                        <img src="http://api.randomuser.me/portraits/thumb/men/40.jpg" alt="..."
                                             class='margin'>
                                        <img src="http://api.randomuser.me/portraits/thumb/women/41.jpg" alt="..."
                                             class='margin'>
                                        <img src="http://api.randomuser.me/portraits/thumb/men/42.jpg" alt="..."
                                             class='margin'>
                                        <img src="http://api.randomuser.me/portraits/thumb/women/43.jpg" alt="..."
                                             class='margin'>
                                    </div>
                                </div>
                            </li>
                            <!-- END timeline item -->
                            <!-- timeline item -->
                            <li>
                                <i class="fa fa-video-camera bg-time"></i>
                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> 5 days ago</span>
                                    <h3 class="timeline-header"><a href="#">Mr. Doe</a> shared a video</h3>
                                    <div class="timeline-body">
                                        Pellentesque vel sem in dui porttitor tempus non interdum augue. Aliquam
                                        consectetur arcu nec enim vulputate, eget mattis augue rhoncus. Aliquam
                                        porttitor cursus metus vitae fringilla. Pellentesque sed ipsum id purus placerat
                                        ornare. Mauris bibendum enim tellus,

                                    </div>
                                    <div class="timeline-footer">
                                        <a href="#" class="btn btn-xs bg-time">See comments</a>
                                    </div>
                                </div>
                            </li>
                            <!-- END timeline item -->
                            <li>
                                <i class="fa fa-clock-o bg-time"></i>
                            </li>
                        </ul>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
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
@include('admin.menu.bottom')
</body>

</html>
