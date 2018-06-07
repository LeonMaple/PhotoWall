<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
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
                        <li><a href="/two"></span>Home</a></li>
                        <li><a href="about"></span>About</a></li>
                        <li><a href="services">Services</a></li>
                        <li><a href="gallery"></span>Gallery</a></li>
                        <li><a href="shortcodes"></span>Short Codes</a></li>
                        <li class="active"><a href="contact">Contact</a></li>
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
<!-- contact -->
<div class="contact">
    <div class="container">
        <div class="col-md-8 contact-left">
            <div class="col-md-8 contact-left1">
                <h3>View On Map</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3018.968159538635!2d-74.10367368464232!3d40.82866303840723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f8bfccce9f9b%3A0x6feca65d6e89eff7!2sService+Plus+Travel+Inc!5e0!3m2!1sen!2sin!4v1455341290029"
                        frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-md-4 contact-left2">
                <h4>Location Details</h4>
                <ul>
                    <li><span>Address:</span> 738 Diamond Road, New York City, USA.</li>
                    <li><span>Mail:</span><a href="mailto:info@example.com">info@example.com</a></li>
                    <li><span>Phone:</span> +7683 928 829</li>
                </ul>
            </div>
            <div class="clearfix"></div>
            <div class="mail">
                <h3>Post a comment</h3>
                <form>
                    <input type="text" value="Name..." onfocus="this.value = '';"
                           onblur="if (this.value == '') {this.value = 'Name...';}" required="">
                    <input type="email" value="Email..." onfocus="this.value = '';"
                           onblur="if (this.value == '') {this.value = 'Email...';}" required="">
                    <input type="text" value="Subject..." onfocus="this.value = '';"
                           onblur="if (this.value == '') {this.value = 'Subject...';}" required="">
                    <textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}"
                              required="">Message...</textarea>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
        <div class="col-md-4 contact-right">
            <h3>Temporibus autem</h3>
            <p>To take a trivial example, which of us ever undertakes laborious physical
                exercise, except to obtain some advantage from it?</p>
            <div class="contact-right1">
                <img src="../images/two/17.jpg" alt=" " class="img-responsive"/>
                <div class="contact-right1-pos">
                    <div class="contact-right1-pos1">
                        <p><span>All Journeys</span> have secret destinations of which
                            the traveller <span>is unaware</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //contact -->
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
        <p>Copyright &copy; 2016.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/"
                                                                                    target="_blank"
                                                                                    title="模板之家">模板之家</a> - Collect from
            <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
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