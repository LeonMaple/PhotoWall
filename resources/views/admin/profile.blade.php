<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HeLinFeng 1.3</title>
    @include('admin.layouts')
    <link rel="stylesheet" href="{{ URL::asset('admin/css/profile.css') }}">

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
                        <i class="icon-media-record"></i>
                        <span>Blank Page
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
            <li><a href="#" title="Sample page 1">Extra Pages</a>
            </li>
            <li><i class="fa fa-lg fa-angle-right"></i>
            </li>
            <li><a href="#" title="Sample page 1">Blank Page</a>
            </li>
            <li class="pull-right">
                <div class="input-group input-widget">

                    <input style="border-radius:15px" type="text" placeholder="Search..." class="form-control">
                </div>
            </li>
        </ul>

        <!-- END OF BREADCRUMB -->

        <div class="content-wrap">
            <!-- PROFILE -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="well profile">
                        <div class="col-sm-12">
                            <div class="col-xs-12 col-sm-4 text-center">

                                <ul class="list-group">
                                    <li class="list-group-item text-left">
                                        <span class="entypo-user"></span>&nbsp;&nbsp;Profile
                                    </li>
                                    <li class="list-group-item text-center">
                                        <img src="http://api.randomuser.me/portraits/men/10.jpg" alt=""
                                             class="img-circle img-responsive img-profile">

                                    </li>
                                    <li class="list-group-item text-center">
                                            <span class="pull-left">
                                                <strong>Ratings</strong>
                                            </span>


                                        <div class="ratings">

                                            <a href="#">
                                                <span class="fa fa-star"></span>
                                            </a>
                                            <a href="#">
                                                <span class="fa fa-star"></span>
                                            </a>
                                            <a href="#">
                                                <span class="fa fa-star"></span>
                                            </a>
                                            <a href="#">
                                                <span class="fa fa-star"></span>
                                            </a>
                                            <a href="#">
                                                <span class="fa fa-star-o"></span>
                                            </a>

                                        </div>


                                    </li>

                                    <li class="list-group-item text-right">
                                            <span class="pull-left">
                                                <strong>Joined</strong>
                                            </span>2.13.2014
                                    </li>
                                    <li class="list-group-item text-right">
                                            <span class="pull-left">
                                                <strong>Last seen</strong>
                                            </span>Yesterday
                                    </li>
                                    <li class="list-group-item text-right">
                                            <span class="pull-left">
                                                <strong>Nickname</strong>
                                            </span>themesmile
                                    </li>

                                </ul>

                            </div>
                            <div class="col-xs-12 col-sm-8 profile-name">
                                <h2>Dave Mattew
                                    <span class="pull-right social-profile">
                                            <i class="entypo-facebook-circled"></i>  <i
                                                class="entypo-twitter-circled"></i>  <i
                                                class="entypo-linkedin-circled"></i>  <i
                                                class="entypo-github-circled"></i>  <i class="entypo-gplus-circled"></i>
                                        </span>
                                </h2>
                                <hr>

                                <dl class="dl-horizontal-profile">
                                    <dt>User Id</dt>
                                    <dd>eko.sulis</dd>

                                    <dt>Name</dt>
                                    <dd>Eko Sulistyo</dd>

                                    <dt>Email</dt>
                                    <dd>eko.sulistyo@yahoo.com</dd>

                                    <dt>Phone</dt>
                                    <dd>081 725 xxx</dd>

                                    <dt>Active Periode</dt>
                                    <dd>02 Dec 2014</dd>

                                    <dt>Last Update</dt>
                                    <dd>02 Apr 2014</dd>

                                    <dt>About</dt>
                                    <dd>Web Designer / UI</dd>

                                    <dt>Hobbies</dt>
                                    <dd>Read, out with friends, listen to music, draw and learn new things</dd>

                                    <dt>Skills</dt>
                                    <dd>
                                        <span class="tags">html5</span>
                                        <span class="tags">css3</span>
                                        <span class="tags">jquery</span>
                                        <span class="tags">bootstrap3</span>
                                    </dd>

                                </dl>


                                <hr>

                                <h5>
                                    <span class="entypo-arrows-ccw"></span>&nbsp;&nbsp;Recent Activities</h5>

                                <div class="table-responsive">
                                    <table class="table table-hover table-striped table-condensed">

                                        <tbody>
                                        <tr>
                                            <td><i class="pull-right fa fa-edit"></i> Today, 1:00 - Jeff Manzi liked
                                                your post.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="pull-right fa fa-edit"></i> Today, 12:23 - Mark Friendo liked
                                                and shared your post.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="pull-right fa fa-edit"></i> Today, 12:20 - You posted a new
                                                blog entry title "Why social media is".
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="pull-right fa fa-edit"></i> Yesterday - Karen P. liked your
                                                post.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="pull-right fa fa-edit"></i> 2 Days Ago - Philip W. liked your
                                                post.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><i class="pull-right fa fa-edit"></i> 2 Days Ago - Jeff Manzi liked your
                                                post.
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                        <div class="col-xs-12 divider text-center">
                            <div class="col-xs-12 col-sm-4 emphasis">
                                <h2>
                                    <strong>20,7K</strong>
                                </h2>
                                <p>
                                    <small>Followers</small>
                                </p>
                                <button class="btn btn-success btn-block">
                                    <span class="fa fa-plus-circle"></span>&nbsp;&nbsp;Follow
                                </button>
                            </div>
                            <div class="col-xs-12 col-sm-4 emphasis">
                                <h2>
                                    <strong>245</strong>
                                </h2>
                                <p>
                                    <small>Following</small>
                                </p>
                                <button class="btn btn-info btn-block">
                                    <span class="fa fa-user"></span>&nbsp;&nbsp;View Profile
                                </button>
                            </div>
                            <div class="col-sm-4 emphasis">
                                <h2>
                                    <strong>43</strong>
                                </h2>
                                <p>
                                    <small>Likes</small>
                                </p>
                                <button class="btn btn-default btn-block">
                                    <span class="fa fa-user"></span>&nbsp;&nbsp;Likes
                                </button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">


                    <div class="col-sm-12">
                        <!-- BLANK PAGE-->

                        <div style="margin:-20px 15px;" class="nest" id="Blank_PageClose">
                            <div class="title-alt">
                                <h6>
                                    Edit Profile</h6>
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


                                <div class="row">


                                    <!-- left column -->
                                    <div class="col-md-3">
                                        <div class="text-center">
                                            <img src="http://placehold.it/150" class="avatar img-circle" alt="avatar">
                                            <h6>Upload a different photo...</h6>

                                            <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <span class="btn btn-primary btn-file">
                                                            Browse
                                                            <input type="file" multiple="">
                                                        </span>
                                                    </span>
                                                <input type="text" class="form-control">
                                            </div>

                                        </div>
                                    </div>

                                    <!-- edit form column -->
                                    <div class="col-md-9 personal-info">
                                        <div class="alert alert-info alert-dismissable">
                                            <a class="panel-close close" data-dismiss="alert">×</a>
                                            <i class="fa fa-coffee"></i>
                                            This is an
                                            <strong>.alert</strong>. Use this to show important messages to the user.
                                        </div>
                                        <h3>Personal info</h3>

                                        <form class="form-horizontal" role="form">
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">First name:</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control" value="Jane" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Last name:</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control" value="Bishop" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Company:</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control" value="" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Email:</label>
                                                <div class="col-lg-8">
                                                    <input class="form-control" value="janesemail@gmail.com"
                                                           type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Time Zone:</label>
                                                <div class="col-lg-8">
                                                    <div class="ui-select">
                                                        <select id="user_time_zone" class="form-control">
                                                            <option value="Hawaii">(GMT-10:00) Hawaii
                                                            <option value="Alaska">(GMT-09:00) Alaska
                                                            <option value="Pacific Time (US &amp; Canada)">(GMT-08:00)
                                                                Pacific Time (US &amp; Canada)
                                                            <option value="Arizona">(GMT-07:00) Arizona
                                                            <option value="Mountain Time (US &amp; Canada)">(GMT-07:00)
                                                                Mountain Time (US &amp; Canada)
                                                            <option value="Central Time (US &amp; Canada)"
                                                                    selected="selected">(GMT-06:00) Central Time (US
                                                                &amp; Canada)
                                                            <option value="Eastern Time (US &amp; Canada)">(GMT-05:00)
                                                                Eastern Time (US &amp; Canada)
                                                            <option value="Indiana (East)">(GMT-05:00) Indiana (East)
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Username:</label>
                                                <div class="col-md-8">
                                                    <input class="form-control" value="janeuser" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Password:</label>
                                                <div class="col-md-8">
                                                    <input class="form-control" value="11111122333" type="password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Confirm password:</label>
                                                <div class="col-md-8">
                                                    <input class="form-control" value="11111122333" type="password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label"></label>
                                                <div class="col-md-8">
                                                    <input class="btn btn-primary" value="Save Changes" type="button">
                                                    <span></span>
                                                    <input class="btn btn-default" value="Cancel" type="reset">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END OF BLANK PAGE -->

                </div>
            </div>
            <!-- END OF PROFILE -->


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
</div>
</body>

</html>
