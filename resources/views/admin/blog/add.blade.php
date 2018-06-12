<?php
/**
 * Created by PhpStorm.
 * @author: helinfeng
 * @Date: 2018/6/12
 * @Time: 下午4:04
 * @File: add.blade.php
 */
?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>添加博客</title>
    @include('admin.menu.layouts')
    <link rel="stylesheet" href="{{ URL::asset('admin/js/button/ladda/ladda.min.css') }}">
</head>

<body>
<div id="awwwards" class="right black"><a href="" target="_blank">best websites of the world</a></div>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
{{--top--}}
@include('admin.menu.top')

{{--menu--}}
@include('admin.menu.menu')
<div class="wrap-fluid">
    <div class="container-fluid paper-wrap bevel tlbr">
        {{--title--}}
        @include('admin.menu.title')

        {{--breadcrumb--}}
        @include('admin.menu.breadcrumb')

        <div class="content-wrap">
            <div class="row">
                <div class="col-sm-12">
                    <div class="nest" id="Blank_PageClose">
                        <div class="title-alt">
                            <h6>
                                Blank Page</h6>
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
                            Content Goes Here
                        </div>
                    </div>
                </div>
            </div>
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
        </div>

    </div>

    {{--right--}}
    @include('admin.menu.right')

    {{--bottom--}}
    @include('admin.menu.bottom')
</div>
</body>

</html>

