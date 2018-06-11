<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HeLinFeng v 1.2</title>
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
        <div class="row">
            <div id="paper-top">
                <div class="col-sm-3">
                    <h2 class="tittle-content-header">
                        <span class="entypo-newspaper"></span>
                        <span>Blog Detail
                            </span>
                    </h2>

                </div>

                <div class="col-sm-7">
                    <div class="devider-vertical visible-lg"></div>
                    <div class="tittle-middle-header">

                        <div class="alert">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <span class="tittle-alert entypo-info-circled"></span>
                            Welcome back,&nbsp;
                            <strong>Dave mattew!</strong>&nbsp;&nbsp;Your last sig in at Yesterday, 16:54 PM
                        </div>


                    </div>

                </div>
                <div class="col-sm-2">
                    <div class="devider-vertical visible-lg"></div>
                    <div class="btn-group btn-wigdet pull-right visible-lg">
                        <div class="btn">
                            Widget
                        </div>
                        <button data-toggle="dropdown" class="btn dropdown-toggle" type="button">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul role="menu" class="dropdown-menu">
                            <li>
                                <a href="#">
                                    <span class="entypo-plus-circled margin-iconic"></span>Add New</a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="entypo-heart margin-iconic"></span>Favorite</a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="entypo-cog margin-iconic"></span>Setting</a>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
        <!--/ TITLE -->


        <!-- BREADCRUMB -->
        <ul id="breadcrumb">
            <li>
                <span class="entypo-home"></span>
            </li>
            <li><i class="fa fa-lg fa-angle-right"></i>
            </li>
            <li><a href="#" title="Sample page 1">Blog App</a>
            </li>
            <li><i class="fa fa-lg fa-angle-right"></i>
            </li>
            <li><a href="#" title="Sample page 1">Blog Detail</a>
            </li>
            <li class="pull-right">
                <div class="input-group" style="margin:-7px 30px 0 0">

                    <input style="border-radius:15px" type="text" placeholder="Search..." class="form-control">
                </div>
            </li>
        </ul>

        <!-- END OF BREADCRUMB -->

        <!--CONTENT-->
        <div class="row" style="margin-top:30px;padding:0 15px;">
            <!--  BLOG CONTENT -->
            <div class="col-sm-8">

                <div class="blogList-nest">
                    <div class="vendor">
                        <iframe width="100%" height="166" scrolling="no" frameborder="no"
                                src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/149950304&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe>
                    </div>

                    <div class="blogList-content">
                        <h2>Favright</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam condimentum sollicitudin mi,
                            vitae vehicula justo venenatis at. Morbi tempor fermentum velit non pretium. Phasellus at
                            lacus turpis. Curabitur dapibus pulvinar velit eu rutrum. Nulla adipiscing sapien orci, ac
                            iaculis justo euismod vitae. Fusce tincidunt accumsan erat, a molestie eros auctor a.
                            Suspendisse vel nibh vulputate, porttitor neque in, pellentesque lectus. Pellentesque
                            aliquet diam sed placerat scelerisque. Suspendisse eleifend sem urna, eget viverra nunc
                            interdum quis. Nam porta nunc turpis. Pellentesque ut adipiscing mi, eu facilisis
                            turpis.</p>

                        <p>Nunc ac erat semper, ultrices lorem eu, pretium urna. Etiam nibh nibh, laoreet id pharetra
                            sit amet, interdum at sapien. Fusce venenatis velit in diam auctor tempus. Duis feugiat
                            consectetur urna vel suscipit. In in lorem placerat, tempus velit ac, aliquam diam. Cras
                            vestibulum velit posuere, elementum enim sed, imperdiet nisl. Etiam scelerisque purus
                            tempus, fringilla dolor at, sodales nibh. Morbi molestie porta nunc, ut tincidunt ante
                            euismod vitae. Mauris vehicula augue augue, ut placerat sapien porta vel. Curabitur laoreet
                            odio et nibh hendrerit consequat. Quisque aliquet orci est, condimentum dignissim felis
                            tempus eget. Morbi ac bibendum velit, eget aliquam nisi. Integer posuere consequat purus non
                            mollis. Integer posuere vitae massa a posuere. Vivamus at lectus at elit aliquam pulvinar
                            porta nec turpis.</p>

                        <p>Vestibulum eu scelerisque ante, eget molestie tellus. Aenean eget sagittis massa. Fusce et
                            ligula ultricies, venenatis leo et, posuere orci. Aenean euismod augue id orci consequat,
                            eget lobortis ante blandit. Nulla tempus viverra mattis. Maecenas volutpat ut massa
                            pellentesque tristique. Morbi erat enim, dapibus ornare laoreet non, auctor sit amet lorem.
                            Integer nec lorem a risus tristique viverra. Quisque aliquam nisl eu ante pretium, vel
                            volutpat leo tempus. Nam velit arcu, tincidunt eget viverra vitae, auctor ac neque.</p>

                        <p class="pull-right">
                            <span class="label label-default">keyword</span>
                            <span class="label label-default">tag</span>
                            <span class="label label-default">post</span>
                        </p>
                        <ul class="list-inline">
                            <li>
                                <a href="#">
                                    <span class="entypo-network"></span>&nbsp;2 Days Ago</a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="entypo-chat"></span>&nbsp;2 Comments</a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="entypo-share"></span>&nbsp;14 Shares</a>
                            </li>
                        </ul>
                        <hr>
                        <button class="btn btn-info pull-right">Read More</button>
                        <div style="clear:both;"></div>
                    </div>
                </div>


                <div class="comment-nest">
                    <h1>Leave a Comment:</h1>
                    <div class="well">

                        <form role="form">
                            <div class="form-group">
                                <textarea placeholder="Comment" rows="5" class="form-update"></textarea>
                            </div>
                            <button type="submit" class="btn btn-info">Submit</button>
                        </form>
                    </div>


                    <hr>
                    <ul class="media-list">
                        <li class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object img-circle" data-src="holder.js/64x64" alt="64x64"
                                     src="http://api.randomuser.me/portraits/thumb/women/21.jpg"
                                     style="width: 64px; height: 64px;">
                            </a>


                            <div class="media-body">
                                <div class="social-profile">
                                    <h3><a class="link-comment" href="#">Sympo Nia</a>
                                        <span><i class="entypo-globe"></i>&nbsp;1 hours ago</span>
                                        <span><a class="link-comment" href="#"><i class="fontawesome-share"></i>&nbsp;Reply</a>
                                            </span>
                                    </h3>
                                </div>

                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                    sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                    turpis.</p>
                                <!-- Nested media object -->

                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object img-circle" data-src="holder.js/64x64" alt="64x64"
                                             src="http://api.randomuser.me/portraits/thumb/men/40.jpg"
                                             style="width: 64px; height: 64px;">
                                    </a>
                                    <div class="media-body">

                                        <div class="social-profile">
                                            <h3><a class="link-comment" href="#">Awangizm</a>
                                                <span><i class="entypo-globe"></i>&nbsp;1 hours ago</span>
                                                <span><a class="link-comment" href="#"><i class="fontawesome-share"></i>&nbsp;Reply</a>
                                                    </span>
                                            </h3>
                                        </div>

                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                            sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus
                                            viverra turpis.</p>
                                        <!-- Nested media object -->
                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object img-circle" data-src="holder.js/64x64"
                                                     alt="64x64"
                                                     src="http://api.randomuser.me/portraits/thumb/women/21.jpg"
                                                     style="width: 64px; height: 64px;">
                                            </a>
                                            <div class="media-body">

                                                <div class="social-profile">
                                                    <h3><a class="link-comment" href="#">Symponia</a>
                                                        <span><i class="entypo-globe"></i>&nbsp;1 hours ago</span>
                                                        <span><a class="link-comment" href="#"><i
                                                                        class="fontawesome-share"></i>&nbsp;Reply</a>
                                                            </span>
                                                    </h3>
                                                </div>


                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                    scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum
                                                    in vulputate at, tempus viverra turpis.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Nested media object -->
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object img-circle" data-src="holder.js/64x64" alt="64x64"
                                             src="http://api.randomuser.me/portraits/thumb/men/55.jpg"
                                             style="width: 64px; height: 64px;">
                                    </a>
                                    <div class="media-body">

                                        <div class="social-profile">
                                            <h3><a class="link-comment" href="#">Agus Berontazk</a>
                                                <span><i class="entypo-globe"></i>&nbsp;12 minute ago</span>
                                                <span><a class="link-comment" href="#"><i class="fontawesome-share"></i>&nbsp;Reply</a>
                                                    </span>
                                            </h3>
                                        </div>


                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                            sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus
                                            viverra turpis.</p>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>


                </div>


                <ul class="pager success">
                    <li class="previous"><a href="#">�?Older</a>
                    </li>
                    <li class="next disabled"><a href="#">Newer �?/a>
                        </a></li>
                </ul>


            </div>
            <!--  END OF BLOG CONTENT -->

            <!--  BLOG SIDE CONTENT -->
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <img class="media-object img-circle blog-profile" data-src="holder.js/64x64" alt="64x64"
                         src="http://api.randomuser.me/portraits/thumb/men/10.jpg">
                    <hr style="margin:0;">

                    <div class="panel-body">
                        <p class="lead text-center">Dave Mattew</p>
                        <p class="tex-center social-blog-profile">
                            <a href="#">
                                <span class="entypo-facebook-circled"></span>
                            </a>
                            <a class="tweet-link" href="#">
                                <span class="entypo-twitter-circled"></span>
                            </a>
                            <a class="gplus-textcolor" href="#">
                                <span class="entypo-instagrem"></span>
                            </a>

                        </p>
                        <p class="social-follower text-center">A graphics designer, a web developer, a boyfriend, a
                            friend, a son</p>


                    </div>
                </div>

                <div class="blog-side-nest">
                    <h4 class="text-center">JOIN NEWSLETTER</h4>
                    <p class="text-center">Sign up for our daily Newslatter</p>
                    <form role="form">
                        <div class="row">
                            <div class="col-xs-8">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Enter email">
                                </div>
                            </div>
                            <!-- /.col-xs-8 -->
                            <div class="col-xs-4 col-full-width-left">
                                <button type="submit" class="btn btn-info btn-block">Sign up</button>
                            </div>
                            <!-- /.col-xs-4 -->
                        </div>
                        <!-- /.row -->
                    </form>

                </div>

                <div class="blog-side-nest">
                    <h4 class="text-left">POPULAR POST</h4>
                    <hr style="margin:0">

                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object img-responsive-media" data-src="holder.js/64x64" alt="64x64"
                                 src="http://placehold.it/64x64">
                        </a>
                        <div class="media-body">
                            <h5 class="media-heading"> Cras sit amet nibh Lorem ipsum dolor si amet </h5>
                            <a class="link-comment recentpost-link" style="margin:-10px 0 10px" href="#">88 Views</a>
                        </div>
                    </div>

                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object img-responsive-media" data-src="holder.js/64x64" alt="64x64"
                                 src="http://placehold.it/64x64">
                        </a>
                        <div class="media-body">
                            <h5 class="media-heading"> Cras sit amet nibh Lorem ipsum dolor si amet </h5>
                            <a class="link-comment recentpost-link" style="margin:-10px 0 10px" href="#">90 Views</a>
                        </div>
                    </div>

                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object img-responsive-media" data-src="holder.js/64x64" alt="64x64"
                                 src="http://placehold.it/64x64">
                        </a>
                        <div class="media-body">
                            <h5 class="media-heading"> Cras sit amet nibh Lorem ipsum dolor si amet </h5>
                            <a class="link-comment recentpost-link" style="margin:-10px 0 10px" href="#">42 Views</a>
                        </div>
                    </div>

                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object img-responsive-media" data-src="holder.js/64x64" alt="64x64"
                                 src="http://placehold.it/64x64">
                        </a>
                        <div class="media-body">
                            <h5 class="media-heading"> Cras sit amet nibh Lorem ipsum dolor si amet </h5>
                            <a class="link-comment recentpost-link" style="margin:-10px 0 10px" href="#">111 Views</a>
                        </div>
                    </div>

                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object img-responsive-media" data-src="holder.js/64x64" alt="64x64"
                                 src="http://placehold.it/64x64">
                        </a>
                        <div class="media-body">
                            <h5 class="media-heading"> Cras sit amet nibh Lorem ipsum dolor si amet </h5>
                            <a class="link-comment recentpost-link" style="margin:-10px 0 10px" href="#">123 Views</a>
                        </div>
                    </div>

                    <br>
                </div>

                <div class="blog-side-nest">
                    <h4 class="text-left">TAG</h4>
                    <hr style="margin:0">
                    <ul class="list-inline">
                        <li>
                            <a class="btn btn-info" href="#">Admin</a>
                        </li>
                        <li>
                            <a class="btn btn-info" href="#">Fleet</a>
                        </li>
                        <li>
                            <a class="btn btn-info" href="#">Music</a>
                        </li>
                        <li>
                            <a class="btn btn-info" href="#">Video</a>
                        </li>
                        <li>
                            <a class="btn btn-info" href="#">Typhography</a>
                        </li>
                        <li>
                            <a class="btn btn-info" href="#">Computer</a>
                        </li>
                        <li>
                            <a class="btn btn-info" href="#">Web Design</a>
                        </li>
                        <li>
                            <a class="btn btn-info" href="#">Movie</a>
                        </li>

                    </ul>
                </div>
            </div>
            <!--  END OF BLOG SIDE CONTENT -->
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
    $(".blogList-nest").fitVids();
    // Custom selector and No-Double-Wrapping Prevention Test
    $(".blogList-nest").fitVids({
        customSelector: "iframe[src^='http://socialcam.com']"
    });
</script>


</body>

</html>
