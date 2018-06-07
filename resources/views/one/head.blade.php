<?php
/**
 * Created by PhpStorm.
 * @author: helinfeng
 * @Date: 2018/6/7
 * @Time: 下午2:38
 * @File: head.blade.php
 */

?>

        <!DOCTYPE HTML>
<html>
<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content=""/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <link href="css/one/bootstrap.css" rel='stylesheet' type='text/css'/>
    <link href='https://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic'
          rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic' rel='stylesheet'
          type='text/css'>
    <!--Custom-Theme-files-->
    <link href="css/one/style.css" rel='stylesheet' type='text/css'/>
    <link href="css/one/component.css" rel='stylesheet' type='text/css'/>
    <link href="css/one/nav.css" rel='stylesheet' type='text/css'/>

    <script src="js/one/jquery.min.js"></script>
    <!--/script-->
    <script src="js/one/modernizr.custom.js"></script>
    <script type="text/javascript" src="js/one/move-top.js"></script>
    <script type="text/javascript" src="js/one/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 900);
            });
        });
    </script>
    <!-- Add fancyBox main JS and CSS files -->
    <script src="js/one/jquery.magnific-popup.js" type="text/javascript"></script>
    <link href="css/one/magnific-popup.css" rel="stylesheet" type="text/css">
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });
        });
    </script>
    <!---->
    <!--animate-->
    <link href="css/one/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/one/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->

</head>
<body>
<div class="container demo-2" id="home">
    <header>
        <nav class="cd-stretchy-nav">
            <a class="cd-nav-trigger" href="#0">
                <h6>Menu</h6>
                <span aria-hidden="true"></span>
            </a>

            <ul class="side_nav">
                <li><a href="/" class="active"><span>Home</span></a></li>
                <li><a href="typography"><span>Services</span></a></li>
                <li><a href="blog"><span>Blog</span></a></li>
                <li><a href="gallery"><span>Gallery</span></a></li>
                <li><a href="contact"><span>Contact</span></a></li>
            </ul>

            <span aria-hidden="true" class="stretchy-nav-bg"></span>
        </nav>
    </header>
    <!--#carbonads-container-->
    <div class="content">
        <div id="large-header" class="large-header">
            <canvas id="demo-canvas"></canvas>
            <h1 class="main-title">
                <a class="link link--takiri" href="index">
                    Go Easy On
                    <span class="wow fadeInUp animated animated" data-wow-delay=".5s">Where do you want to be?</span>
                </a>
            </h1>

        </div>

    </div>
</div>