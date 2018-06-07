<?php
/**
 * Created by PhpStorm.
 * @author: helinfeng
 * @Date: 2018/6/7
 * @Time: 下午4:19
 * @File: heade.blade.php
 * 公共模板头部
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Walk Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <link href="../css/two/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../css/two/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../css/two/component.css" rel="stylesheet" type="text/css"/>
    <script src="../js/two/jquery-1.11.1.min.js"></script>
    <link href="../css/two/stylesheet.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="../js/two/move-top.js"></script>
    <script type="text/javascript" src="../js/two/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
</head>