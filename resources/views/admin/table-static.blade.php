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

    <link href="assets/js/stackable/stacktable.css" rel="stylesheet">
    <link href="assets/js/stackable/responsive-table.css" rel="stylesheet">


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

                    <div class="nest" id="tableStaticClose">
                        <div class="title-alt">
                            <h6>
                                Basic Responsive Tables</h6>
                            <div class="titleClose">
                                <a class="gone" href="#tableStaticClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#tableStatic">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="tableStatic">

                            <section id="flip-scroll">

                                <table class="table table-bordered table-striped cf">
                                    <thead class="cf">
                                    <tr>
                                        <th>Code</th>
                                        <th>Company</th>
                                        <th class="numeric">Price</th>
                                        <th class="numeric">Change</th>
                                        <th class="numeric">Change %</th>
                                        <th class="numeric">Open</th>
                                        <th class="numeric">High</th>
                                        <th class="numeric">Low</th>
                                        <th class="numeric">Volume</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>AAC</td>
                                        <td>AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>
                                        <td class="numeric">$1.38</td>
                                        <td class="numeric">-0.01</td>
                                        <td class="numeric">-0.36%</td>
                                        <td class="numeric">$1.39</td>
                                        <td class="numeric">$1.39</td>
                                        <td class="numeric">$1.38</td>
                                        <td class="numeric">9,395</td>
                                    </tr>
                                    <tr>
                                        <td>AAD</td>
                                        <td>ARDENT LEISURE GROUP</td>
                                        <td class="numeric">$1.15</td>
                                        <td class="numeric">+0.02</td>
                                        <td class="numeric">1.32%</td>
                                        <td class="numeric">$1.14</td>
                                        <td class="numeric">$1.15</td>
                                        <td class="numeric">$1.13</td>
                                        <td class="numeric">56,431</td>
                                    </tr>
                                    <tr>
                                        <td>AAX</td>
                                        <td>AUSENCO LIMITED</td>
                                        <td class="numeric">$4.00</td>
                                        <td class="numeric">-0.04</td>
                                        <td class="numeric">-0.99%</td>
                                        <td class="numeric">$4.01</td>
                                        <td class="numeric">$4.05</td>
                                        <td class="numeric">$4.00</td>
                                        <td class="numeric">90,641</td>
                                    </tr>
                                    <tr>
                                        <td>ABC</td>
                                        <td>ADELAIDE BRIGHTON LIMITED</td>
                                        <td class="numeric">$3.00</td>
                                        <td class="numeric">+0.06</td>
                                        <td class="numeric">2.04%</td>
                                        <td class="numeric">$2.98</td>
                                        <td class="numeric">$3.00</td>
                                        <td class="numeric">$2.96</td>
                                        <td class="numeric">862,518</td>
                                    </tr>
                                    <tr>
                                        <td>ABP</td>
                                        <td>ABACUS PROPERTY GROUP</td>
                                        <td class="numeric">$1.91</td>
                                        <td class="numeric">0.00</td>
                                        <td class="numeric">0.00%</td>
                                        <td class="numeric">$1.92</td>
                                        <td class="numeric">$1.93</td>
                                        <td class="numeric">$1.90</td>
                                        <td class="numeric">595,701</td>
                                    </tr>
                                    <tr>
                                        <td>ABY</td>
                                        <td>ADITYA BIRLA MINERALS LIMITED</td>
                                        <td class="numeric">$0.77</td>
                                        <td class="numeric">+0.02</td>
                                        <td class="numeric">2.00%</td>
                                        <td class="numeric">$0.76</td>
                                        <td class="numeric">$0.77</td>
                                        <td class="numeric">$0.76</td>
                                        <td class="numeric">54,567</td>
                                    </tr>
                                    <tr>
                                        <td>ACR</td>
                                        <td>ACRUX LIMITED</td>
                                        <td class="numeric">$3.71</td>
                                        <td class="numeric">+0.01</td>
                                        <td class="numeric">0.14%</td>
                                        <td class="numeric">$3.70</td>
                                        <td class="numeric">$3.72</td>
                                        <td class="numeric">$3.68</td>
                                        <td class="numeric">191,373</td>
                                    </tr>
                                    <tr>
                                        <td>ADU</td>
                                        <td>ADAMUS RESOURCES LIMITED</td>
                                        <td class="numeric">$0.72</td>
                                        <td class="numeric">0.00</td>
                                        <td class="numeric">0.00%</td>
                                        <td class="numeric">$0.73</td>
                                        <td class="numeric">$0.74</td>
                                        <td class="numeric">$0.72</td>
                                        <td class="numeric">8,602,291</td>
                                    </tr>
                                    <tr>
                                        <td>AGG</td>
                                        <td>ANGLOGOLD ASHANTI LIMITED</td>
                                        <td class="numeric">$7.81</td>
                                        <td class="numeric">-0.22</td>
                                        <td class="numeric">-2.74%</td>
                                        <td class="numeric">$7.82</td>
                                        <td class="numeric">$7.82</td>
                                        <td class="numeric">$7.81</td>
                                        <td class="numeric">148</td>
                                    </tr>
                                    <tr>
                                        <td>AGK</td>
                                        <td>AGL ENERGY LIMITED</td>
                                        <td class="numeric">$13.82</td>
                                        <td class="numeric">+0.02</td>
                                        <td class="numeric">0.14%</td>
                                        <td class="numeric">$13.83</td>
                                        <td class="numeric">$13.83</td>
                                        <td class="numeric">$13.67</td>
                                        <td class="numeric">846,403</td>
                                    </tr>
                                    <tr>
                                        <td>AGO</td>
                                        <td>ATLAS IRON LIMITED</td>
                                        <td class="numeric">$3.17</td>
                                        <td class="numeric">-0.02</td>
                                        <td class="numeric">-0.47%</td>
                                        <td class="numeric">$3.11</td>
                                        <td class="numeric">$3.22</td>
                                        <td class="numeric">$3.10</td>
                                        <td class="numeric">5,416,303</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </section>

                        </div>

                    </div>


                </div>

            </div>
        </div>

        <div class="content-wrap">
            <div class="row">


                <div class="col-sm-12">

                    <div class="nest" id="StackableClose">
                        <div class="title-alt">
                            <h6>
                                Responsive Stackable</h6>
                            <div class="titleClose">
                                <a class="gone" href="#tStackableClose">
                                    <span class="entypo-cancel"></span>
                                </a>
                            </div>
                            <div class="titleToggle">
                                <a class="nav-toggle-alt" href="#StackableStatic">
                                    <span class="entypo-up-open"></span>
                                </a>
                            </div>

                        </div>

                        <div class="body-nest" id="StackableStatic">

                            <table id="responsive-example-table" class="table large-only">
                                <tbody>
                                <tr class="text-right">
                                    <th style="width=30%;">Stuff</th>
                                    <th style="width=12%;">Rate</th>
                                    <th style="width=12%;">Amount</th>
                                    <th style="width=12%;">Points</th>
                                    <th style="width=12%;">Number</th>
                                    <th style="width=18%;">Type</th>
                                    <th style="width=12%;">Name</th>
                                </tr>
                                <tr>
                                    <td>Something</td>
                                    <td>3.375%</td>
                                    <td>$123.12</td>
                                    <td>1.125</td>
                                    <td>4,000</td>
                                    <td>Potato</td>
                                    <td>Paul</td>
                                </tr>
                                <tr>
                                    <td>Something Else</td>
                                    <td>2.750%</td>
                                    <td>$345.23</td>
                                    <td>5</td>
                                    <td>180</td>
                                    <td>Spaceship</td>
                                    <td>Skippy</td>
                                </tr>
                                <tr>
                                    <td colspan="7" class="sub">Subgroup Header</td>
                                </tr>
                                <tr>
                                    <td>Another Thing</td>
                                    <td>3.375%</td>
                                    <td>$563.12</td>
                                    <td>222</td>
                                    <td>60</td>
                                    <td>Gym Shoe</td>
                                    <td>George</td>
                                </tr>
                                <tr>
                                    <td>Thing w/Less Stuff</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Harmonica</td>
                                    <td>Helga</td>
                                </tr>
                                <tr>
                                    <td>Last Thing</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>4</td>
                                    <td>Meaning of Life</td>
                                    <td></td>
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
<script type="text/javascript" src="assets/js/stackable/stacktable.js"></script>


<script>
    $(document).on('click', '#run', function (e) {
        e.preventDefault();
        $('#simple-example-table').stacktable({
            hideOriginal: true
        });
        $(this).replaceWith('<span>ran</span>');
    });
    $('#responsive-example-table').stacktable({
        myClass: 'stacktable small-only'
    });
</script>


</body>

</html>
