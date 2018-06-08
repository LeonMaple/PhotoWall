<!DOCTYPE html>
<html>
<head>
    <title>Services</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Walk Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <link href="{{ URL::asset('css/two/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ URL::asset('css/two/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ URL::asset('css/two/component.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('css/two/stylesheet.css') }}" rel="stylesheet" type="text/css"/>
    <script src="{{ URL::asset('js/two/jquery-1.11.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/two/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/two/easing.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
</head>

<body class="cbp-spmenu-push">
<!-- banner -->
<div class="banner1">
    <div class="container">
        <div class="header">
            <div class="header-left">

            </div>
            <div class="header-left1">
                <h1><a href="/two">Walk<span>Where To Go This Summer?</span></a></h1>
            </div>
            <!-- #push_sidebar -->
            <div class="top-nav">
                <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
                    <ul>
                        <li><a href="/two">Home</a></li>
                        <li><a href="about">About</a></li>
                        <li class="active"><a href="services">Services</a></li>
                        <li><a href="gallery">Gallery</a></li>
                        <li><a href="shortcodes">Short Codes</a></li>
                        <li><a href="contact">Contact</a></li>
                    </ul>
                </nav>
                <div class="main buttonset">
                    <!-- Class "cbp-spmenu-open" gets applied to menu and "cbp-spmenu-push-toleft" or "cbp-spmenu-push-toright" to the body -->
                    <button id="showRightPush"><img src="../images/two/menu.png" alt=""/></button>
                </div>
                <!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
                <script src="../js/two/classie.js"></script>
                <script>
                    var menuRight = document.getElementById('cbp-spmenu-s2'),
                        showRightPush = document.getElementById('showRightPush'),
                        body = document.body;

                    showRightPush.onclick = function () {
                        classie.toggle(this, 'active');
                        classie.toggle(body, 'cbp-spmenu-push-toleft');
                        classie.toggle(menuRight, 'cbp-spmenu-open');
                        disableOther('showRightPush');
                    };

                    function disableOther(button) {
                        if (button !== 'showRightPush') {
                            classie.toggle(showRightPush, 'disabled');
                        }
                    }
                </script>
                <!-- /script-for-menu -->
            </div>
            <!-- /#push_sidebar -->
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //banner -->
<!-- services -->
<div class="services">
    <div class="container">
        <h3>Services</h3>
        <p class="dummy-text">travel brings power and love back to your life.</p>
        <div class="services-grids">
            <div class="col-md-4 services-grid">
                <figure class="blog-figure">
                    <img src="../images/two/14.jpg" alt=" " class="img-responsive"/>
                    <div class="blog-discription">
                        <div class="theme-border">
                            <div class="tg-display-table">
                                <div class="tg-display-table-cell">
                                    <div class="blog-title">
                                        <h4><a href="index.blade.php">Walk</a></h4>
                                        <ul class="blod-meta">
                                            <li>Posted By: <a href="#">Admin</a></li>
                                            <li>Dated: March 20, 2016</li>
                                            <div class="clearfix"></div>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </figure>
                <h5><a href="single.blade.php">At vero eos et accusamus et iusto odio dignissimos ducimus
                        adipisicing.</a></h5>
                <div class="more more1">
                    <a href="single.blade.php" class="type-4 type-41">
                        <span> Read More... </span>
                        <span> Read More... </span>
                        <span> Read More... </span>
                        <span> Read More... </span>
                        <span> Read More... </span>
                        <span> Read More... </span>
                    </a>
                </div>
            </div>
            <div class="col-md-4 services-grid">
                <figure class="blog-figure">
                    <img src="../images/two/6.jpg" alt=" " class="img-responsive"/>
                    <div class="blog-discription">
                        <div class="theme-border">
                            <div class="tg-display-table">
                                <div class="tg-display-table-cell">
                                    <div class="blog-title">
                                        <h4><a href="index.blade.php">Walk</a></h4>
                                        <ul class="blod-meta">
                                            <li>Posted By: <a href="#">Admin</a></li>
                                            <li>Dated: March 20, 2016</li>
                                            <div class="clearfix"></div>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </figure>
                <h5><a href="single.blade.php">Sed ut perspiciatis unde omnis iste natus error sit dolore.</a></h5>
                <div class="more more1">
                    <a href="single.blade.php" class="type-4 type-41">
                        <span> Read More... </span>
                        <span> Read More... </span>
                        <span> Read More... </span>
                        <span> Read More... </span>
                        <span> Read More... </span>
                        <span> Read More... </span>
                    </a>
                </div>
            </div>
            <div class="col-md-4 services-grid">
                <figure class="blog-figure">
                    <img src="../images/two/5.jpg" alt=" " class="img-responsive"/>
                    <div class="blog-discription">
                        <div class="theme-border">
                            <div class="tg-display-table">
                                <div class="tg-display-table-cell">
                                    <div class="blog-title">
                                        <h4><a href="index.blade.php">Walk</a></h4>
                                        <ul class="blod-meta">
                                            <li>Posted By: <a href="#">Admin</a></li>
                                            <li>Dated: March 20, 2016</li>
                                            <div class="clearfix"></div>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </figure>
                <h5><a href="single.blade.php">Duis aute irure dolor in reprehenderit in voluptate velit.</a></h5>
                <div class="more more1">
                    <a href="single.blade.php" class="type-4 type-41">
                        <span> Read More... </span>
                        <span> Read More... </span>
                        <span> Read More... </span>
                        <span> Read More... </span>
                        <span> Read More... </span>
                        <span> Read More... </span>
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="offered-services">
    <div class="container">
        <h3>Offered Services</h3>
        <p class="dummy-text">travel brings power and love back to your life.</p>
        <div class="offered-services-grids">
            <div class="col-md-4 offered-services-grid">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                   aria-expanded="true" aria-controls="collapseOne">
                                    Produces no resultant pleasure
                                </a>
                            </h4>
                            <p>"But I must explain to you how all this mistaken idea of denouncing
                                pleasure.</p>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingOne">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Fugiat quo voluptas nulla par
                                </a>
                            </h4>
                            <p>"But I must explain to you how all this mistaken idea of denouncing
                                pleasure.</p>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingTwo">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Perferendis doloribus asperiores
                                </a>
                            </h4>
                            <p>"But I must explain to you how all this mistaken idea of denouncing
                                pleasure.</p>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingThree">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 offered-services-grid">
                <img src="../images/two/15.jpg" alt=" " class="img-responsive"/>
            </div>
            <div class="col-md-4 offered-services-grid1">
                <div class="panel-group1" id="accordion1" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default panel1">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title panel-title1">
                                <a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour"
                                   aria-expanded="true" aria-controls="collapseFour">
                                    Produces no resultant pleasure
                                </a>
                            </h4>
                            <p>"But I must explain to you how all this mistaken idea of denouncing
                                pleasure.</p>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingFour">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default panel1">
                        <div class="panel-heading" role="tab" id="headingFive">
                            <h4 class="panel-title panel-title1">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1"
                                   href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Fugiat quo voluptas nulla par
                                </a>
                            </h4>
                            <p>"But I must explain to you how all this mistaken idea of denouncing
                                pleasure.</p>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingFive">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default panel1">
                        <div class="panel-heading" role="tab" id="headingSix">
                            <h4 class="panel-title panel-title1">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1"
                                   href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Perferendis doloribus asperiores
                                </a>
                            </h4>
                            <p>"But I must explain to you how all this mistaken idea of denouncing
                                pleasure.</p>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingSix">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- for bootstrap working -->
        <script src="../js/two/bootstrap.js"></script>
        <!-- //for bootstrap working -->
    </div>
</div>
<!-- //services -->
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="col-md-3 footer-grid">
            <img src="../images/two/8.jpg" alt=" " class="img-responsive"/>
        </div>
        <div class="col-md-3 footer-grid">
            <h2><a href="index.blade.php">Walk<span>Where To Go This Summer?</span></a></h2>
            <p>But I must explain to you how all this mistaken idea of denouncing pleasure
                and praising pain was born.</p>
            <ul>
                <li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 738 Diamond Road, New York City,
                    USA.
                </li>
                <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a
                            href="mailto:info@example.com">info@example.com</a></li>
                <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +7683 928 829</li>
            </ul>
        </div>
        <div class="col-md-3 footer-grid">
            <h4>Flickr Photos</h4>
            <div class="footer-grid1">
                <a href="single.blade.php"><img src="../images/two/5.jpg" alt=" " class="img-responsive"/></a>
            </div>
            <div class="footer-grid1">
                <a href="single.blade.php"><img src="../images/two/6.jpg" alt=" " class="img-responsive"/></a>
            </div>
            <div class="footer-grid1">
                <a href="single.blade.php"><img src="../images/two/7.jpg" alt=" " class="img-responsive"/></a>
            </div>
            <div class="footer-grid1">
                <a href="single.blade.php"><img src="../images/two/6.jpg" alt=" " class="img-responsive"/></a>
            </div>
            <div class="footer-grid1">
                <a href="single.blade.php"><img src="../images/two/7.jpg" alt=" " class="img-responsive"/></a>
            </div>
            <div class="footer-grid1">
                <a href="single.blade.php"><img src="../images/two/5.jpg" alt=" " class="img-responsive"/></a>
            </div>
            <div class="footer-grid1">
                <a href="single.blade.php"><img src="../images/two/7.jpg" alt=" " class="img-responsive"/></a>
            </div>
            <div class="footer-grid1">
                <a href="single.blade.php"><img src="../images/two/5.jpg" alt=" " class="img-responsive"/></a>
            </div>
            <div class="footer-grid1">
                <a href="single.blade.php"><img src="../images/two/6.jpg" alt=" " class="img-responsive"/></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-3 footer-grid">
            <h4>Booking Hours</h4>
            <div class="footer-grid2">
                <ul class="timings">
                    <li>Monday <i>.....</i> 10AM to 7PM</li>
                    <li>Friday <i>.....</i> 9AM to 5PM</li>
                    <li>Sunday <i>.....</i> 10AM to 2PM</li>
                </ul>
                <div class="social-icons social-icons1">
                    <ul>
                        <li><a href="#" class="twitter"></a></li>
                        <li><a href="#" class="facebook"></a></li>
                        <li><a href="#" class="google"></a></li>
                        <li><a href="#" class="p"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="footer-copy">
    <div class="container">
        <p>Copyright &copy; 2016.Company name All rights reserved.More Templates </p>
    </div>
</div>
<!-- //footer -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<!-- //here ends scrolling icon -->
</body>
</html>