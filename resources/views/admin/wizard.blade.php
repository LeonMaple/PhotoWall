<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HeLinFeng 1.3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <script src="assets/js/wizard/lib/modernizr-2.6.2.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.js"></script>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/loader-style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">


    <link rel="stylesheet" href="assets/js/wizard/css/jquery.steps.css">
    <link type="text/css" rel="stylesheet" href="assets/js/wizard/jquery.stepy.css">
    <link href="assets/js/tabs/acc-wizard.min.css" rel="stylesheet">


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
                    <div class="nest" id="basicClose">
                        <div class="title-alt">
                            <h6>
                                Basic Wizard</h6>
                            <div class="titleClose">
                                <a class="gone" href="#basicClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#basic">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="basic">

                            <div id="wizard">
                                <h2>First Step</h2>
                                <section>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut nulla nunc.
                                        Maecenas arcu sem, hendrerit a tempor quis, sagittis accumsan tellus. In hac
                                        habitasse platea dictumst. Donec a semper dui. Nunc eget quam libero. Nam at
                                        felis metus. Nam tellus dolor, tristique ac tempus nec, iaculis quis nisi.</p>
                                </section>

                                <h2>Second Step</h2>
                                <section>
                                    <p>Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis
                                        diam ac ligula elementum pellentesque. In lobortis sollicitudin felis non
                                        eleifend. Morbi tristique tellus est, sed tempor elit. Morbi varius, nulla quis
                                        condimentum dictum, nisi elit condimentum magna, nec venenatis urna quam in
                                        nisi. Integer hendrerit sapien a diam adipiscing consectetur. In euismod augue
                                        ullamcorper leo dignissim quis elementum arcu porta. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Vestibulum leo velit, blandit ac tempor nec,
                                        ultrices id diam. Donec metus lacus, rhoncus sagittis iaculis nec, malesuada a
                                        diam. Donec non pulvinar urna. Aliquam id velit lacus.</p>
                                </section>

                                <h2>Third Step</h2>
                                <section>
                                    <p>Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl
                                        at justo condimentum dapibus. Fusce eros justo, pellentesque non euismod ac,
                                        rutrum sed quam. Ut non mi tortor. Vestibulum eleifend varius ullamcorper.
                                        Aliquam erat volutpat. Donec diam massa, porta vel dictum sit amet, iaculis ac
                                        massa. Sed elementum dui commodo lectus sollicitudin in auctor mauris venenatis.
                                    </p>
                                </section>

                                <h2>Forth Step</h2>
                                <section>
                                    <p>Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere
                                        mauris vehicula vulputate. Aliquam sed sem tortor. Quisque sed felis ut mauris
                                        feugiat iaculis nec ac lectus. Sed consequat vestibulum purus, imperdiet varius
                                        est pellentesque vitae. Suspendisse consequat cursus eros, vitae tempus enim
                                        euismod non. Nullam ut commodo tortor.</p>
                                </section>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col-sm-12">
                    <div class="nest" id="verticalClose">
                        <div class="title-alt">
                            <h6>
                                Vertical Wizard</h6>
                            <div class="titleClose">
                                <a class="gone" href="#verticalClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#vertical">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="vertical">

                            <div id="wizard_vertical">
                                <h2>First Step</h2>
                                <section>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut nulla nunc.
                                        Maecenas arcu sem, hendrerit a tempor quis, sagittis accumsan tellus. In hac
                                        habitasse platea dictumst. Donec a semper dui. Nunc eget quam libero. Nam at
                                        felis metus. Nam tellus dolor, tristique ac tempus nec, iaculis quis nisi.</p>
                                </section>

                                <h2>Second Step</h2>
                                <section>
                                    <p>Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis
                                        diam ac ligula elementum pellentesque. In lobortis sollicitudin felis non
                                        eleifend. Morbi tristique tellus est, sed tempor elit. Morbi varius, nulla quis
                                        condimentum dictum, nisi elit condimentum magna, nec venenatis urna quam in
                                        nisi. Integer hendrerit sapien a diam adipiscing consectetur. In euismod augue
                                        ullamcorper leo dignissim quis elementum arcu porta. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Vestibulum leo velit, blandit ac tempor nec,
                                        ultrices id diam. Donec metus lacus, rhoncus sagittis iaculis nec, malesuada a
                                        diam. Donec non pulvinar urna. Aliquam id velit lacus.</p>
                                </section>

                                <h2>Third Step</h2>
                                <section>
                                    <p>Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl
                                        at justo condimentum dapibus. Fusce eros justo, pellentesque non euismod ac,
                                        rutrum sed quam. Ut non mi tortor. Vestibulum eleifend varius ullamcorper.
                                        Aliquam erat volutpat. Donec diam massa, porta vel dictum sit amet, iaculis ac
                                        massa. Sed elementum dui commodo lectus sollicitudin in auctor mauris venenatis.
                                    </p>
                                </section>

                                <h2>Forth Step</h2>
                                <section>
                                    <p>Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere
                                        mauris vehicula vulputate. Aliquam sed sem tortor. Quisque sed felis ut mauris
                                        feugiat iaculis nec ac lectus. Sed consequat vestibulum purus, imperdiet varius
                                        est pellentesque vitae. Suspendisse consequat cursus eros, vitae tempus enim
                                        euismod non. Nullam ut commodo tortor.</p>
                                </section>
                            </div>


                        </div>
                    </div>
                </div>


                <div class="col-sm-12">
                    <div class="nest" id="stepyClose">
                        <div class="title-alt">
                            <h6>
                                STEPY WIZARD</h6>
                            <div class="titleClose">
                                <a class="gone" href="#stepyClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#stepy">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="stepy">

                            <div class="demo">
                                <form id="transition-duration-demo">
                                    <fieldset title="Login">
                                        <legend>Access</legend>

                                        <input type="hidden" name="id">

                                        <p>
                                            <label for="username-2">Username:</label>
                                            <input id="username-2" type="text" value="wbotelhos" disabled="disabled">
                                        </p>

                                        <p>
                                            <label for="email-2">E-mail:</label>
                                            <input id="email-2" type="text">
                                        </p>

                                        <p>
                                            <label for="password-2">Password:</label>
                                            <input id="password-2" type="password">
                                        </p>
                                    </fieldset>

                                    <fieldset title="Personal">
                                        <legend>About you</legend>

                                        <p>
                                            <label for="name-2">Name:</label>
                                            <input id="name-2" type="text">
                                        </p>

                                        <p>
                                            <label for="birthday-2">Birthday:</label>

                                            <select id="birthday-2" name="day">
                                                <option>1984
                                            </select>
                                        </p>

                                        <p>
                                            <label for="bio-2">Bio:</label>
                                            <textarea id="bio-2"></textarea>
                                        </p>
                                    </fieldset>

                                    <fieldset title="Professional">
                                        <legend>Your professional informations</legend>

                                        <p class="skills">
                                            <input id="ruby-2" type="checkbox" name="ruby-2">
                                            <label for="ruby-2">Ruby</label>

                                            <input id="python-2" type="checkbox" name="python">
                                            <label for="python-2">Python</label>

                                            <input id="java-2" type="checkbox" name="java">
                                            <label for="java-2">Java</label>

                                            <input id="javascript-2" type="checkbox" name="javascript">
                                            <label for="javascript-2">Javascript</label>
                                        </p>

                                        <p>
                                            <label for="linkedin-2">Linkedin:</label>
                                            <input id="linkedin-2" type="text" name="Linkedin">
                                        </p>
                                    </fieldset>

                                    <input type="submit" value="Finish!">
                                </form>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col-sm-12">
                    <div class="nest" id="tabClose">
                        <div class="title-alt">
                            <h6>
                                Tabs</h6>
                            <div class="titleClose">
                                <a class="gone" href="#tabClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#tab">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="tab">

                            <div id="wizard-tab">
                                <h2>First Step</h2>
                                <section>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut nulla nunc.
                                        Maecenas arcu sem, hendrerit a tempor quis, sagittis accumsan tellus. In hac
                                        habitasse platea dictumst. Donec a semper dui. Nunc eget quam libero. Nam at
                                        felis metus. Nam tellus dolor, tristique ac tempus nec, iaculis quis nisi.</p>
                                </section>

                                <h2>Second Step</h2>
                                <section>
                                    <p>Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis
                                        diam ac ligula elementum pellentesque. In lobortis sollicitudin felis non
                                        eleifend. Morbi tristique tellus est, sed tempor elit. Morbi varius, nulla quis
                                        condimentum dictum, nisi elit condimentum magna, nec venenatis urna quam in
                                        nisi. Integer hendrerit sapien a diam adipiscing consectetur. In euismod augue
                                        ullamcorper leo dignissim quis elementum arcu porta. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Vestibulum leo velit, blandit ac tempor nec,
                                        ultrices id diam. Donec metus lacus, rhoncus sagittis iaculis nec, malesuada a
                                        diam. Donec non pulvinar urna. Aliquam id velit lacus.</p>
                                </section>

                                <h2>Third Step</h2>
                                <section>
                                    <p>Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl
                                        at justo condimentum dapibus. Fusce eros justo, pellentesque non euismod ac,
                                        rutrum sed quam. Ut non mi tortor. Vestibulum eleifend varius ullamcorper.
                                        Aliquam erat volutpat. Donec diam massa, porta vel dictum sit amet, iaculis ac
                                        massa. Sed elementum dui commodo lectus sollicitudin in auctor mauris venenatis.
                                    </p>
                                </section>

                                <h2>Forth Step</h2>
                                <section>
                                    <p>Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere
                                        mauris vehicula vulputate. Aliquam sed sem tortor. Quisque sed felis ut mauris
                                        feugiat iaculis nec ac lectus. Sed consequat vestibulum purus, imperdiet varius
                                        est pellentesque vitae. Suspendisse consequat cursus eros, vitae tempus enim
                                        euismod non. Nullam ut commodo tortor.</p>
                                </section>
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
<script src="assets/js/wizard/lib/jquery.cookie-1.3.1.js"></script>
<script src="assets/js/wizard/build/jquery.steps.js"></script>
<script type="text/javascript" src="assets/js/wizard/jquery.stepy.js"></script>


<script>
    $(function () {
        $("#wizard").steps({
            headerTag: "h2",
            bodyTag: "section",
            transitionEffect: "slideLeft"
        });

        $("#wizard_vertical").steps({
            headerTag: "h2",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            stepsOrientation: "vertical"
        });

        $("#wizard-tab").steps({
            headerTag: "h2",
            bodyTag: "section",
            transitionEffect: "none",
            enableFinishButton: false,
            enablePagination: false,
            enableAllSteps: true,
            titleTemplate: "#title#",
            cssClass: "tabcontrol"
        });

        //stepy
        $('#transition-duration-demo').stepy({
            duration: 400,
            transition: 'fade'
        });

    });
</script>

</body>

</html>
