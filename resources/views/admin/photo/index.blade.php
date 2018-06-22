<?php
/**
 * Created by PhpStorm.
 * @author: helinfeng
 * @Date: 2018/6/21
 * @Time: 下午3:01
 * @File: index.blade.php
 * 图片列表
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.menu.layouts')
    <style>
        /*图片高度定义*/
        .img-responsive-media { height: 200px; }
        .doc { height: 150px; }
    </style>
</head>

<body>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
@include('admin.menu.top')

@include('admin.menu.menu')
<div class="wrap-fluid">
    <div class="container-fluid paper-wrap bevel tlbr">
        @include('admin.menu.title')
        @include('admin.menu.breadcrumb')
        <div class="row" style="margin-top:30px;padding:0 15px;">

            @foreach($photo as $value)
            <div class="col-sm-4">
                <div class="blogList-nest">
                    {{--TODO 定义一个标准的高度--}}
                    <div class="vendor">
                        <img class="img-responsive-media" src="{{ $value->url }}" alt="">
                    </div>
                    <div class="blogList-content">
                        {{--TODO 定义文字内容长度，超出部分用。。表示--}}
                        <h2>{{ $value->name }}</h2>
                        <p>{{ $value->doc }}</p>
                        <p>器材：</p>
                        <p>光圈：</p>
                        <p>快门：</p>
                        <p>iso：</p>
                        <p>焦距：</p>
                        <p>色彩：</p>
                        <p>色彩：</p>
                        <p>图像尺寸：</p>
                        <p>时间：{{ $value->time }}</p>
                        <p class="pull-right">
                            <span class="label label-default">分类</span>
                            <span class="label label-default">标签</span>
                            <span class="label label-default">post</span>
                        </p>
                        <ul class="list-inline">
                            <li><a href="#"><span class="entypo-chat"></span>&nbsp;2 评论</a></li>
                            <li><a href="#"><span class="entypo-share"></span>&nbsp;14 喜欢</a></li>
                        </ul>
                        <hr>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@include('admin.menu.bottom')

<script>
    $(".blogList-nest").fitVids();
    $(".blogList-nest").fitVids();
</script>

</body>

</html>
