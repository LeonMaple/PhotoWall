<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HeLinFeng 1.3</title>
    @include('admin.layouts')
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

        <!-- MASONRY MEDIA-->


        <div class="container-fluid" style="padding:0 30px!important;margin-top:30px;">

            <div class="row-mansory">
                <!-- VIDEO -->

                <div class="col-md-4">
                    <div class="well-media">

                        <div class="vendor">
                            <iframe width="420" height="315" src="http://www.youtube.com/embed/QqDKF6QIQ1I"
                                    frameborder="0" allowfullscreen=""></iframe>
                        </div>
                        <div class="video-text">
                            <h2>Woohal</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et dui id justo
                                rhoncus consequat. Aliquam porttitor, arcu quis ornare ultricies, augue neque fringilla
                                turpis.</p>
                        </div>
                        <div class="tag-nest">
                            <i>angel</i><i>dark</i><i>mistic</i>
                        </div>
                        <div class="video-category-bg">
                            <h3>Video</h3>
                            <a class="link-media pull-right" href="#">
                                <span class="fontawesome-film"></span>
                            </a>
                            <div class="triangle-white"></div>
                            <div class="triangle-video-right"></div>
                        </div>

                    </div>
                </div>
                <!-- END OF VIDEO -->

                <!-- PHOTO -->
                <div class="col-md-4">
                    <div class="well-media">

                        <div class="vendor">

                            <a class="fancybox" rel="group" href="#">
                                <img class="img-responsive-media"
                                     src="http://lorempixel.com/output/city-h-c-350-450-6.jpg" alt="">
                            </a>
                        </div>
                        <div class="video-text">
                            <h2>Black Angel</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="tag-nest">
                            <i>angel</i><i>dark</i><i>mistic</i>
                        </div>
                        <div class="photo-category-bg">
                            <h3>Photo</h3>
                            <a class="link-media pull-right" href="#">
                                <span class="fontawesome-picture"></span>
                            </a>
                            <div class="triangle-white"></div>
                            <div class="triangle-photo-right"></div>
                        </div>

                    </div>
                </div>

                <!-- END OF PHOTO -->


                <!-- AUDIO -->

                <div class="col-md-4">
                    <div class="well-media">

                        <div class="vendor">
                            <iframe width="100%" height="166" scrolling="no" frameborder="no"
                                    src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/120672658&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe>

                        </div>
                        <div class="video-text">
                            <h2>Terlatih Patah Hati</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="tag-nest">
                            <i>patah </i><i>hati</i><i>music</i>
                        </div>
                        <div class="audio-category-bg">
                            <h3>audio</h3>
                            <a class="link-media pull-right" href="#">
                                <span class="entypo-note-beamed"></span>
                            </a>
                            <div class="triangle-white"></div>
                            <div class="triangle-audio-right"></div>
                        </div>

                    </div>
                </div>
                <!-- END OF AUDIO -->

                <!-- PHOTO SET -->
                <div class="col-md-4">
                    <div class="well-media">


                        <div class="vendor">
                            <div data-ride="carousel" class="carousel slide" id="carousel-example-generic">
                                <ol class="carousel-indicators">
                                    <li class="" data-slide-to="0" data-target="#carousel-example-generic"></li>
                                    <li data-slide-to="1" data-target="#carousel-example-generic" class="active"></li>
                                    <li data-slide-to="2" data-target="#carousel-example-generic" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item">
                                        <img class="img-responsive-media" alt="First slide"
                                             src="assets/img/people-q-c-350-250-5.jpg">
                                    </div>
                                    <div class="item active">
                                        <img class="img-responsive-media" alt="Second slide"
                                             src="assets/img/people-q-c-350-250-7.jpg">
                                    </div>
                                    <div class="item">
                                        <img class="img-responsive-media" alt="Third slide"
                                             src="assets/img/people-q-c-350-250-8.jpg">
                                    </div>
                                </div>
                                <a data-slide="prev" href="#carousel-example-generic" class="left carousel-control">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a data-slide="next" href="#carousel-example-generic" class="right carousel-control">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>

                        </div>


                        <div class="video-text">
                            <h2>Holyday</h2>
                            <p>It ws may last summer holyday</p>
                        </div>
                        <div class="tag-nest">
                            <i>angel</i><i>dark</i><i>mistic</i>
                        </div>
                        <div class="album-category-bg">
                            <h3>Photoset</h3>
                            <a class="link-media pull-right" href="#">
                                <span class="entypo-picture"></span>
                            </a>
                            <div class="triangle-white"></div>
                            <div class="triangle-album-right"></div>
                        </div>

                    </div>
                </div>
                <!--     END OF PHOTO SET -->


                <!-- VIDEO -->

                <div class="col-md-4">
                    <div class="well-media">

                        <div class="vendor">
                            <iframe width="560" height="315" src="//www.youtube.com/embed/ICAisYcDNqw" frameborder="0"
                                    allowfullscreen=""></iframe>

                        </div>
                        <div class="video-text">
                            <h2>Black Angel</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et dui id justo
                                rhoncus consequat. Aliquam porttitor, arcu quis ornare ultricies, augue neque fringilla
                                turpis.</p>
                        </div>
                        <div class="tag-nest">
                            <i>angel</i><i>dark</i><i>mistic</i>
                        </div>
                        <div class="video-category-bg">
                            <h3>Video</h3>
                            <a class="link-media pull-right" href="#">
                                <span class="fontawesome-film"></span>
                            </a>
                            <div class="triangle-white"></div>
                            <div class="triangle-video-right"></div>
                        </div>

                    </div>
                </div>
                <!-- END OF VIDEO -->

                <!-- PHOTO -->
                <div class="col-md-4">
                    <div class="well-media">

                        <div class="vendor">

                            <a rel="group" href="#">
                                <img class="img-responsive-media"
                                     src="http://lorempixel.com/output/food-h-c-350-450-8.jpg" alt="">
                            </a>
                        </div>
                        <div class="video-text">
                            <h2>Black Angel</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="tag-nest">
                            <i>angel</i><i>dark</i><i>mistic</i>
                        </div>
                        <div class="photo-category-bg">
                            <h3>Photo</h3>
                            <a class="link-media pull-right" href="#">
                                <span class="fontawesome-picture"></span>
                            </a>
                            <div class="triangle-white"></div>
                            <div class="triangle-photo-right"></div>
                        </div>

                    </div>
                </div>

                <!-- END OF PHOTO -->


                <!-- AUDIO -->

                <div class="col-md-4">
                    <div class="well-media">

                        <div class="vendor">

                            <iframe width="100%" height="166" scrolling="no" frameborder="no"
                                    src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/88278446&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe>

                        </div>
                        <div class="video-text">
                            <h2>Favright</h2>
                            <p>Favright - Taking Over (feat. Cassandra Kay)</p>
                        </div>
                        <div class="tag-nest">
                            <i>patah </i><i>hati</i><i>music</i>
                        </div>
                        <div class="audio-category-bg">
                            <h3>audio</h3>
                            <a class="link-media pull-right" href="#">
                                <span class="entypo-note-beamed"></span>
                            </a>
                            <div class="triangle-white"></div>
                            <div class="triangle-audio-right"></div>
                        </div>

                    </div>
                </div>
                <!-- END OF AUDIO -->

                <!-- PHOTO SET -->
                <div class="col-md-4">
                    <div class="well-media">


                        <div class="vendor">
                            <div data-ride="carousel" class="carousel slide" id="carousel-dua">
                                <ol class="carousel-indicators">
                                    <li class="" data-slide-to="0" data-target="#carousel-dua"></li>
                                    <li data-slide-to="1" data-target="#carousel-dua" class="active"></li>
                                    <li data-slide-to="2" data-target="#carousel-dua" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item">
                                        <img class="img-responsive-media" alt="First slide"
                                             data-src="holder.js/900x500/auto/#777:#555/text:First slide"
                                             src="http://placehold.it/350x250">
                                    </div>
                                    <div class="item active">
                                        <img class="img-responsive-media" alt="Second slide"
                                             data-src="holder.js/900x500/auto/#666:#444/text:Second slide"
                                             src="http://placehold.it/350x250">
                                    </div>
                                    <div class="item">
                                        <img class="img-responsive-media" alt="Third slide"
                                             data-src="holder.js/900x500/auto/#555:#333/text:Third slide"
                                             src="http://placehold.it/350x250">
                                    </div>
                                </div>
                                <a data-slide="prev" href="#carousel-dua" class="left carousel-control">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a data-slide="next" href="#carousel-dua" class="right carousel-control">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>

                        </div>


                        <div class="video-text">
                            <h2>Holyday</h2>
                            <p>It ws may last summer holyday</p>
                        </div>
                        <div class="tag-nest">
                            <i>angel</i><i>dark</i><i>mistic</i>
                        </div>
                        <div class="album-category-bg">
                            <h3>Photoset</h3>
                            <a class="link-media pull-right" href="#">
                                <span class="entypo-picture"></span>
                            </a>
                            <div class="triangle-white"></div>
                            <div class="triangle-album-right"></div>
                        </div>

                    </div>
                </div>
                <!--     END OF PHOTO SET -->

                <!-- AUDIO -->

                <div class="col-md-4">
                    <div class="well-media">


                        <div class="vendor">
                            <iframe width="100%" height="166" scrolling="no" frameborder="no"
                                    src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/149950304&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe>
                        </div>
                        <div class="video-text">
                            <h2>Terlatih Patah Hati</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="tag-nest">
                            <i>patah </i><i>hati</i><i>music</i>
                        </div>
                        <div class="audio-category-bg">
                            <h3>audio</h3>
                            <a class="link-media pull-right" href="#">
                                <span class="entypo-note-beamed"></span>
                            </a>
                            <div class="triangle-white"></div>
                            <div class="triangle-audio-right"></div>
                        </div>

                    </div>
                </div>
                <!-- END OF AUDIO -->


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

<script>
    // Basic FitVids Test
    $(".well-media").fitVids();
    $(".vendor").fitVids();
    // Custom selector and No-Double-Wrapping Prevention Test
    $(".well-media").fitVids({
        customSelector: "iframe[src^='http://socialcam.com']"
    });
</script>


</body>

</html>
