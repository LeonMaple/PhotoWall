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


    <link href="assets/js/footable/css/footable.core.css?v=2-0-1" rel="stylesheet" type="text/css">
    <link href="assets/js/footable/css/footable.standalone.css" rel="stylesheet" type="text/css">
    <link href="assets/js/footable/css/footable-demos.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="assets/js/dataTable/lib/jquery.dataTables/css/DT_bootstrap.css">
    <link rel="stylesheet" href="assets/js/dataTable/css/datatables.responsive.css">


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
                        <span class="entypo-menu"></span>
                        <span>Table Dynamic
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
            <li><a href="#" title="Sample page 1">Table</a>
            </li>
            <li><i class="fa fa-lg fa-angle-right"></i>
            </li>
            <li><a href="#" title="Sample page 1">Table Dynamic</a>
            </li>
            <li class="pull-right">
                <div class="input-group input-widget">

                    <input style="border-radius:15px" type="text" placeholder="Search..." class="form-control">
                </div>
            </li>
        </ul>

        <!-- END OF BREADCRUMB -->


        <div class="content-wrap">
            <div class="row">


                <div class="col-sm-12">

                    <div class="nest" id="FootableClose">
                        <div class="title-alt">
                            <h6>
                                Footable paginate</h6>
                            <div class="titleClose">
                                <a class="gone" href="#FootableClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#Footable">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="Footable">

                            <p class="lead well">FooTable is a jQuery plugin that aims to make HTML tables on smaller
                                devices look awesome - No matter how many columns of data you may have in them. And it's
                                responsive i think this better than DataTable in some way</p>

                            <table class="table-striped footable-res footable metro-blue" data-page-size="6">
                                <thead>
                                <tr>
                                    <th>
                                        First Name
                                    </th>
                                    <th>
                                        Last Name
                                    </th>
                                    <th data-hide="phone,tablet">
                                        Job Title
                                    </th>
                                    <th data-hide="phone,tablet">
                                        DOB
                                    </th>
                                    <th data-hide="phone">
                                        Status
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Isidra</td>
                                    <td><a href="#">Boudreaux</a>
                                    </td>
                                    <td>Traffic Court Referee</td>
                                    <td data-value="78025368997">22 Jun 1972</td>
                                    <td data-value="1">
                                        <span class="status-metro status-active" title="Active">Active</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Shona</td>
                                    <td>Woldt</td>
                                    <td><a href="#">Airline Transport Pilot</a>
                                    </td>
                                    <td data-value="370961043292">3 Oct 1981</td>
                                    <td data-value="2">
                                        <span class="status-metro status-disabled" title="Disabled">Disabled</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Granville</td>
                                    <td>Leonardo</td>
                                    <td>Business Services Sales Representative</td>
                                    <td data-value="-22133780420">19 Apr 1969</td>
                                    <td data-value="3">
                                        <span class="status-metro status-suspended" title="Suspended">Suspended</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Easer</td>
                                    <td>Dragoo</td>
                                    <td>Drywall Stripper</td>
                                    <td data-value="250833505574">13 Dec 1977</td>
                                    <td data-value="1">
                                        <span class="status-metro status-active" title="Active">Active</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Maple</td>
                                    <td>Halladay</td>
                                    <td>Aviation Tactical Readiness Officer</td>
                                    <td data-value="694116650726">30 Dec 1991</td>
                                    <td data-value="3">
                                        <span class="status-metro status-suspended" title="Suspended">Suspended</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Maxine</td>
                                    <td><a href="#">Woldt</a>
                                    </td>
                                    <td><a href="#">Business Services Sales Representative</a>
                                    </td>
                                    <td data-value="561440464855">17 Oct 1987</td>
                                    <td data-value="2">
                                        <span class="status-metro status-disabled" title="Disabled">Disabled</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lorraine</td>
                                    <td>Mcgaughy</td>
                                    <td>Hemodialysis Technician</td>
                                    <td data-value="437400551390">11 Nov 1983</td>
                                    <td data-value="2">
                                        <span class="status-metro status-disabled" title="Disabled">Disabled</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lizzee</td>
                                    <td><a href="#">Goodlow</a>
                                    </td>
                                    <td>Technical Services Librarian</td>
                                    <td data-value="-257733999319">1 Nov 1961</td>
                                    <td data-value="3">
                                        <span class="status-metro status-suspended" title="Suspended">Suspended</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Judi</td>
                                    <td>Badgett</td>
                                    <td>Electrical Lineworker</td>
                                    <td data-value="362134712000">23 Jun 1981</td>
                                    <td data-value="1">
                                        <span class="status-metro status-active" title="Active">Active</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lauri</td>
                                    <td>Hyland</td>
                                    <td>Blackjack Supervisor</td>
                                    <td data-value="500874333932">15 Nov 1985</td>
                                    <td data-value="3">
                                        <span class="status-metro status-suspended" title="Suspended">Suspended</span>
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="5">
                                        <div class="pagination pagination-centered"></div>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>

                        </div>

                    </div>


                </div>

            </div>
        </div>


        <div class="content-wrap">
            <div class="row">
                <div class="col-sm-12">
                    <div class="nest" id="FilteringClose">
                        <div class="title-alt">
                            <h6>
                                Footable Filtering</h6>
                            <div class="titleClose">
                                <a class="gone" href="#FilteringClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#Filtering">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="Filtering">

                            <div class="row" style="margin-bottom:10px;">
                                <div class="col-sm-4">
                                    <input class="form-control" id="filter" placeholder="Search..." type="text">
                                </div>
                                <div class="col-sm-2">
                                    <select class="filter-status form-control">
                                        <option value="active">Active
                                        <option value="disabled">Disabled
                                        <option value="suspended">Suspended
                                    </select>
                                </div>
                                <div class="col-sm-6">

                                    <a href="#clear" style="margin-left:10px;"
                                       class="pull-right btn btn-info clear-filter" title="clear filter">clear</a>
                                    <a href="#api" class="pull-right btn btn-info filter-api"
                                       title="Filter using the Filter API">filter API</a>


                                </div>

                            </div>

                            <table id="footable-res2" class="demo" data-filter="#filter" data-filter-text-only="true">
                                <thead>
                                <tr>
                                    <th data-toggle="true">
                                        First Name
                                    </th>
                                    <th>
                                        Last Name
                                    </th>
                                    <th data-hide="phone,tablet">
                                        Job Title
                                    </th>
                                    <th data-hide="phone,tablet">
                                        DOB
                                    </th>
                                    <th data-hide="phone">
                                        Status
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Isidra</td>
                                    <td><a href="#">Boudreaux</a>
                                    </td>
                                    <td>Traffic Court Referee</td>
                                    <td data-value="78025368997">22 Jun 1972</td>
                                    <td data-value="1">
                                        <span class="status-metro status-active" title="Active">Active</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Shona</td>
                                    <td>Woldt</td>
                                    <td><a href="#">Airline Transport Pilot</a>
                                    </td>
                                    <td data-value="370961043292">3 Oct 1981</td>
                                    <td data-value="2">
                                        <span class="status-metro status-disabled" title="Disabled">Disabled</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Granville</td>
                                    <td>Leonardo</td>
                                    <td>Business Services Sales Representative</td>
                                    <td data-value="-22133780420">19 Apr 1969</td>
                                    <td data-value="3">
                                        <span class="status-metro status-suspended" title="Suspended">Suspended</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Easer</td>
                                    <td>Dragoo</td>
                                    <td>Drywall Stripper</td>
                                    <td data-value="250833505574">13 Dec 1977</td>
                                    <td data-value="1">
                                        <span class="status-metro status-active" title="Active">Active</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Maple</td>
                                    <td>Halladay</td>
                                    <td>Aviation Tactical Readiness Officer</td>
                                    <td data-value="694116650726">30 Dec 1991</td>
                                    <td data-value="3">
                                        <span class="status-metro status-suspended" title="Suspended">Suspended</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Maxine</td>
                                    <td><a href="#">Woldt</a>
                                    </td>
                                    <td><a href="#">Business Services Sales Representative</a>
                                    </td>
                                    <td data-value="561440464855">17 Oct 1987</td>
                                    <td data-value="2">
                                        <span class="status-metro status-disabled" title="Disabled">Disabled</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lorraine</td>
                                    <td>Mcgaughy</td>
                                    <td>Hemodialysis Technician</td>
                                    <td data-value="437400551390">11 Nov 1983</td>
                                    <td data-value="2">
                                        <span class="status-metro status-disabled" title="Disabled">Disabled</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lizzee</td>
                                    <td><a href="#">Goodlow</a>
                                    </td>
                                    <td>Technical Services Librarian</td>
                                    <td data-value="-257733999319">1 Nov 1961</td>
                                    <td data-value="3">
                                        <span class="status-metro status-suspended" title="Suspended">Suspended</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Judi</td>
                                    <td>Badgett</td>
                                    <td>Electrical Lineworker</td>
                                    <td data-value="362134712000">23 Jun 1981</td>
                                    <td data-value="1">
                                        <span class="status-metro status-active" title="Active">Active</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lauri</td>
                                    <td>Hyland</td>
                                    <td>Blackjack Supervisor</td>
                                    <td data-value="500874333932">15 Nov 1985</td>
                                    <td data-value="3">
                                        <span class="status-metro status-suspended" title="Suspended">Suspended</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

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


<!-- /MAIN EFFECT -->
<!-- GAGE -->
<script type="text/javascript" src="assets/js/toggle_close.js"></script>
<script src="assets/js/footable/js/footable.js?v=2-0-1" type="text/javascript"></script>
<script src="assets/js/footable/js/footable.sort.js?v=2-0-1" type="text/javascript"></script>
<script src="assets/js/footable/js/footable.filter.js?v=2-0-1" type="text/javascript"></script>
<script src="assets/js/footable/js/footable.paginate.js?v=2-0-1" type="text/javascript"></script>
<script src="assets/js/footable/js/footable.paginate.js?v=2-0-1" type="text/javascript"></script>


<script type="text/javascript">
    $(function () {
        $('.footable-res').footable();
    });
</script>
<script type="text/javascript">
    $(function () {
        $('#footable-res2').footable().bind('footable_filtering', function (e) {
            var selected = $('.filter-status').find(':selected').text();
            if (selected && selected.length > 0) {
                e.filter += (e.filter && e.filter.length > 0) ? ' ' + selected : selected;
                e.clear = !e.filter;
            }
        });

        $('.clear-filter').click(function (e) {
            e.preventDefault();
            $('.filter-status').val('');
            $('table.demo').trigger('footable_clear_filter');
        });

        $('.filter-status').change(function (e) {
            e.preventDefault();
            $('table.demo').trigger('footable_filter', {
                filter: $('#filter').val()
            });
        });

        $('.filter-api').click(function (e) {
            e.preventDefault();

            //get the footable filter object
            var footableFilter = $('table').data('footable-filter');

            alert('about to filter table by "tech"');
            //filter by 'tech'
            footableFilter.filter('tech');

            //clear the filter
            if (confirm('clear filter now?')) {
                footableFilter.clearFilter();
            }
        });
    });
</script>

</body>

</html>
