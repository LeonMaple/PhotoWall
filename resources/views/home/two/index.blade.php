<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
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
<div class="banner">
    <div class="container">
        <div class="header">
            <div class="header-left"></div>
            <div class="header-left1">
                <h1><a href="/two">Walk<span>Where To Go This Summer?</span></a></h1>
            </div>
            <div class="top-nav">
                <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
                    <ul>
                        <li class="active"><a href="/two">首页</a></li>
                        <li><a href="two/about">关于</a></li>
                        <li><a href="two/services">Services</a></li>
                        <li><a href="two/gallery">画廊</a></li>
                        <li><a href="two/shortcodes">Short Codes</a></li>
                        <li><a href="two/contact">Contact</a></li>
                    </ul>
                </nav>

                <div class="main buttonset">
                    <button id="showRightPush"><img src="{{ URL::asset('images/two/menu.png') }}" alt=""/></button>
                </div>
                <script src="{{ URL::asset('js/two/classie.js') }}"></script>
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
            </div>
            <div class="clearfix"></div>
        </div>
        {{--<div class="banner-info">--}}
            {{--<h3>Discover The Most Beautiful Places</h3>--}}
            {{--<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore--}}
                {{--eu fugiat nulla pariatur.</p>--}}
            {{--<div class="more">--}}
                {{--<a href="two/single" class="type-4">--}}
                    {{--<span> Read More... </span>--}}
                    {{--<span> Read More... </span>--}}
                    {{--<span> Read More... </span>--}}
                    {{--<span> Read More... </span>--}}
                    {{--<span> Read More... </span>--}}
                    {{--<span> Read More... </span>--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="social-icons">--}}
                {{--<ul>--}}
                    {{--<li><a href="#" class="twitter"></a></li>--}}
                    {{--<li><a href="#" class="facebook"></a></li>--}}
                    {{--<li><a href="#" class="google"></a></li>--}}
                    {{--<li><a href="#" class="p"></a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
</div>
<div class="copyrights">Collect from </div>
<div class="banner-bottom">
    <div class="col-md-2 banner-bottom-left">

    </div>
    <div class="col-md-3 banner-bottom-left1">
        <div class="banner-bottom-left1-grid">
            <div class="globe">
                <span></span>
            </div>
            <h3><span>We will turn </span>your dreams to reality</h3>
            <div class="progress progress1">
                <div class="progress-bar progress-bar1" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                     aria-valuemax="100" style="width:40%;">
                    <span class="sr-only">40% Complete</span>
                </div>
            </div>
            <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and
                praising pain was born and I will give you a complete account of the system.</p>
            <div class="more m1">
                <a href="single" class="type-4">
                    <span> Read More... </span>
                    <span> Read More... </span>
                    <span> Read More... </span>
                    <span> Read More... </span>
                    <span> Read More... </span>
                    <span> Read More... </span>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-7 banner-bottom-left2">
        <div class="grid">
            <figure class="effect-lexi effect-lexi1">
                <img src="{{ URL::asset('images/two/3.jpg') }}" alt="" class="img-responsive"/>
                <figcaption class="lexifig">
                    <h4>Life is an adventure take <span>Risks</span></h4>
                    <p>To take a trivial example, which of us ever undertakes laborious physical exercise, except to
                        obtain some advantage from it.</p>
                </figcaption>
            </figure>
        </div>
        <h3>Certainly, travel is more than the seeing of sights; it is a change that goes on,
            deep and permanent, in the ideas of living.</h3>
    </div>
    <div class="clearfix"></div>
</div>
<div class="banner-bottom1">
    <div class="col-md-6 banner-bottom-left2 banner-bottom1-left2">
        <div class="grid">
            <figure class="effect-lexi">
                <img src="{{ URL::asset('images/two/2.jpg') }}" alt="" class="img-responsive"/>
                <figcaption>
                    <h4>Collect moments not <span>things</span></h4>
                    <p>To take a trivial example, which of us ever undertakes laborious physical exercise, except to
                        obtain some advantage from it.</p>
                </figcaption>
            </figure>
        </div>
    </div>
    <div class="col-md-4 banner-bottom-lft1">
        <h3>01 .</h3>
        <h4>Its better to see something once than to hear about it a thousand times...</h4>
        <div class="progress progress1 progress2">
            <div class="progress-bar progress-bar1" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                 aria-valuemax="100" style="width:40%;">
                <span class="sr-only">40% Complete</span>
            </div>
        </div>
        <p>To take a trivial example, which of us ever undertakes laborious physical exercise,
            except to obtain some advantage from it? But who has any right to find fault with a man.</p>
    </div>
    <div class="col-md-2 banner-bottom-left">

    </div>
    <div class="clearfix"></div>
    <div class="col-md-2 banner-bottom-left">

    </div>
    <div class="col-md-4 banner-bottom-lft1">
        <h3>02 .</h3>
        <h4 class="with">The world is a book and those who do not travel read only a page...</h4>
        <div class="progress progress1 progress2">
            <div class="progress-bar progress-bar1" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                 aria-valuemax="100" style="width:40%;">
                <span class="sr-only">40% Complete</span>
            </div>
        </div>
        <p class="exercise">To take a trivial example, which of us ever undertakes laborious physical exercise,
            except to obtain some advantage from it? But who has any right to find fault with a man.</p>
    </div>
    <div class="col-md-6 banner-bottom-left2 banner-bottom1-left2">
        <div class="grid">
            <figure class="effect-lexi effect-lexi1">
                <img src="{{ URL::asset('images/two/4.jpg') }}" alt="" class="img-responsive"/>
                <figcaption class="lexifig">
                    <h4>Courage is found in unlikely <span>places</span></h4>
                    <p>To take a trivial example, which of us ever undertakes laborious physical exercise, except to
                        obtain some advantage from it.</p>
                </figcaption>
            </figure>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<div class="banner-bottom-slider">
    <div class="container">
        <div class="col-md-4 banner-bottom-slider-left">
            <h3>Let's go on an <span>Adventurous Travel</span></h3>
            <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</p>
        </div>
        <div class="col-md-8 banner-bottom-slider-right">
            <ul id="flexiselDemo1">
                <li>
                    <div class="banner-bottom-slider-right1">
                        <img src="{{ URL::asset('images/two/5.jpg') }}" alt=" " class="img-responsive"/>
                        <ul>
                            <li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> 8</a>
                            </li>
                            <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Admin</a>
                            </li>
                            <li><a href="#"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span> 8</a></li>
                        </ul>
                        <p><i>" travel <span>becomes</span> a strategy for accumulating <span>Photographs</span>."</i>
                        </p>
                    </div>
                </li>
                <li>
                    <div class="banner-bottom-slider-right1">
                        <img src="{{ URL::asset('images/two/7.jpg') }}" alt=" " class="img-responsive"/>
                        <ul>
                            <li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> 8</a>
                            </li>
                            <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Admin</a>
                            </li>
                            <li><a href="#"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span> 8</a></li>
                        </ul>
                        <p><i>" <span>journey</span> is best measured in friends, rather than <span>miles</span>."</i>
                        </p>
                    </div>
                </li>
                <li>
                    <div class="banner-bottom-slider-right1">
                        <img src="{{ URL::asset('images/two/6.jpg') }}" alt=" " class="img-responsive"/>
                        <ul>
                            <li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> 8</a>
                            </li>
                            <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Admin</a>
                            </li>
                            <li><a href="#"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span> 8</a></li>
                        </ul>
                        <p><i>" <span>nature</span> is one our greatest <span>teachers</span>."</i></p>
                    </div>
                </li>
            </ul>
            <script type="text/javascript">
                $(window).load(function () {
                    $("#flexiselDemo1").flexisel({
                        visibleItems: 3,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint: 480,
                                visibleItems: 1
                            },
                            landscape: {
                                changePoint: 640,
                                visibleItems: 2
                            },
                            tablet: {
                                changePoint: 768,
                                visibleItems: 3
                            }
                        }
                    });

                });
            </script>
            <script type="text/javascript" src="{{ URL::asset('js/two/jquery.flexisel.js') }}"></script>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="col-md-3 footer-grid">
            <img src="{{ URL::asset('images/two/8.jpg') }}" alt=" " class="img-responsive"/>
        </div>
        <div class="col-md-3 footer-grid">
            <h2><a href="index">Walk<span>Where To Go This Summer?</span></a></h2>
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
                <a href="single"><img src="images/two/5.jpg" alt=" " class="img-responsive"/></a>
            </div>
            <div class="footer-grid1">
                <a href="single"><img src="images/two/6.jpg" alt=" " class="img-responsive"/></a>
            </div>
            <div class="footer-grid1">
                <a href="single"><img src="images/two/7.jpg" alt=" " class="img-responsive"/></a>
            </div>
            <div class="footer-grid1">
                <a href="single"><img src="images/two/6.jpg" alt=" " class="img-responsive"/></a>
            </div>
            <div class="footer-grid1">
                <a href="single"><img src="images/two/7.jpg" alt=" " class="img-responsive"/></a>
            </div>
            <div class="footer-grid1">
                <a href="single"><img src="images/two/5.jpg" alt=" " class="img-responsive"/></a>
            </div>
            <div class="footer-grid1">
                <a href="single"><img src="images/two/7.jpg" alt=" " class="img-responsive"/></a>
            </div>
            <div class="footer-grid1">
                <a href="single"><img src="images/two/5.jpg" alt=" " class="img-responsive"/></a>
            </div>
            <div class="footer-grid1">
                <a href="single"><img src="images/two/6.jpg" alt=" " class="img-responsive"/></a>
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
        <p>Copyright &copy; 2016.Company name All rights reserved.More Templates - Collect from</p>
    </div>
</div>
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
</body>
</html>