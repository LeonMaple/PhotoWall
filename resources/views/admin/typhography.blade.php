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
    <link rel="stylesheet" href="assets/js/button/ladda/ladda.min.css">


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


                <div class="col-sm-6">
                    <!-- LEFT -->


                    <div class="nest" id="headerClose">
                        <div class="title-alt">
                            <h6>
                                header</h6>
                            <div class="titleClose">
                                <a class="gone" href="#headerClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#header">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="header">


                            <h1>Heading 1
                                <small>Sub-heading</small>
                            </h1>
                            <h2>Heading 2
                                <small>Sub-heading</small>
                            </h2>
                            <h3>Heading 3
                                <small>Sub-heading</small>
                            </h3>
                            <h4>Heading 4
                                <small>Sub-heading</small>
                            </h4>
                            <h5>Heading 5
                                <small>Sub-heading</small>
                            </h5>
                            <h6>Heading 6
                                <small>Sub-heading</small>
                            </h6>


                        </div>
                    </div>


                    <div class="nest" id="AlignmentClose">
                        <div class="title-alt">
                            <h6>
                                Alignment Classes</h6>
                            <div class="titleClose">
                                <a class="gone" href="#AlignmentClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#Alignment">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="Alignment">

                            <p class="text-left">Left aligned text.</p>
                            <p class="text-center">Center aligned text.</p>
                            <p class="text-right">Right aligned text.</p>


                        </div>
                    </div>


                    <div class="nest" id="EmphasisClose">
                        <div class="title-alt">
                            <h6>
                                Emphasis Classes</h6>
                            <div class="titleClose">
                                <a class="gone" href="#EmphasisClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#Emphasis">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="Emphasis">
                            <p class="text-muted">This is an example of muted text.</p>
                            <p class="text-primary">This is an example of primary text.</p>
                            <p class="text-success">This is an example of success text.</p>
                            <p class="text-info">This is an example of info text.</p>
                            <p class="text-warning">This is an example of warning text.</p>
                            <p class="text-danger">This is an example of danger text.</p>
                        </div>
                    </div>


                    <div class="nest" id="DescriptionsClose">
                        <div class="title-alt">
                            <h6>
                                Descriptions</h6>
                            <div class="titleClose">
                                <a class="gone" href="#DescriptionsClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#Descriptions">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="Descriptions">

                            <dl>
                                <dt>Standard Description List</dt>
                                <dd>Description Text</dd>
                                <dt>Description List Title</dt>
                                <dd>Description List Text</dd>
                            </dl>

                            <dl class="dl-horizontal">
                                <dt>Horizontal Description List</dt>
                                <dd>A description list is perfect for defining terms.</dd>
                                <dt>Description List Title</dt>
                                <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                            </dl>


                        </div>
                    </div>


                </div>
                <!-- LEFT -->

                <!-- RIGHT -->
                <div class="col-sm-6">
                    <div class="nest" id="BlockquotesClose">
                        <div class="title-alt">
                            <h6>
                                Blockquotes</h6>
                            <div class="titleClose">
                                <a class="gone" href="#BlockquotesClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#Blockquotes">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="Blockquotes">

                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                                    ante.</p>
                                <small>Someone famous in
                                    <cite title="Source Title">Source Title</cite>
                                </small>
                            </blockquote>

                        </div>
                    </div>


                    <div class="nest" id="AddressesClose">
                        <div class="title-alt">
                            <h6>
                                Addresses</h6>
                            <div class="titleClose">
                                <a class="gone" href="#AddressesClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#Addresses">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="Addresses">
                            <address>
                                <strong>Twitter, Inc.</strong>
                                <br>795 Folsom Ave, Suite 600
                                <br>San Francisco, CA 94107
                                <br>
                                <abbr title="Phone">P:</abbr>(123) 456-7890
                            </address>

                            <address>
                                <strong>Full Name</strong>
                                <br>
                                <a href="mailto:#">first.last@example.com</a>
                            </address>


                        </div>
                    </div>


                    <div class="nest" id="ListClose">
                        <div class="title-alt">
                            <h6>
                                List</h6>
                            <div class="titleClose">
                                <a class="gone" href="#ListClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#List">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="List" style="margin:0 auto;">
                            <div class="row">

                                <div class="col-sm-6">

                                    <h4>Unordered List</h4>
                                    <ul>
                                        <li>Vegetables</li>
                                        <li>Fruits
                                            <ul>
                                                <li>Apple</li>
                                                <li>Banana</li>
                                                <li>Coconut</li>
                                            </ul>
                                            Flower
                                        </li>
                                    </ul>


                                    <h4>Ordered List</h4>
                                    <ol>
                                        <li>Vegetables</li>
                                        <li>Fruits</li>
                                        <li>Flower</li>
                                    </ol>

                                </div>

                                <div class="col-sm-6">

                                    <h4>Unstyled List</h4>
                                    <ul class="list-unstyled">
                                        <li>Apple</li>
                                        <li>Banana</li>
                                        <li>Coconut</li>
                                    </ul>
                                    <h4>Inline List</h4>
                                    <ul class="list-inline">
                                        <li>Apple</li>
                                        <li>Banana</li>
                                        <li>Coconut</li>
                                    </ul>


                                </div>

                            </div>


                        </div>
                    </div>


                    <div class="nest" id="CodeClose">
                        <div class="title-alt">
                            <h6>
                                Code</h6>
                            <div class="titleClose">
                                <a class="gone" href="#CodeClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#Code">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="Code">
                            <p>This is an example of an inline code element within body copy. Wrap inline code within a
                                <code>&lt;code&gt;...&lt;/code&gt;</code>tag.</p>
                            <pre>This is an example of preformatted text.</pre>

                        </div>
                    </div>


                </div>
            </div>
            <!-- End of RIGHT -->


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
