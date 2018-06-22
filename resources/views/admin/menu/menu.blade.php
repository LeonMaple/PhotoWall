<?php
/**
 * Created by PhpStorm.
 * @author: helinfeng
 * @Date: 2018/6/11
 * @Time: 下午5:30
 * @File: menu.blade.php
 */
?>


<div id="skin-select">
    <div id="logo">
        <h1>HELINFENG<span>v1.0</span></h1>
    </div>

    <a id="toggle">
        <span class="entypo-menu"></span>
    </a>
    <!-- 搜索 -->
    <div class="dark">
        <form action="#">
            <span>
                <input type="text" name="search" value="" class="search rounded id_search" placeholder="Search Menu..." autofocus="">
            </span>
        </form>
    </div>

    <div class="search-hover">
        <form id="demo-2">
            <input type="search" placeholder="Search Menu..." class="id_search">
        </form>
    </div>

    <div class="skin-part">
        <div id="tree-wrap">
            <div class="side-bar">
                <ul class="topnav menu-left-nest">
                    <li>
                        <a href="#" style="border-left:0px solid!important;" class="title-menu-left">
                            <span class="widget-menu"></span>
                            <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>
                        </a>
                    </li>

                    <li>
                        <a class="tooltip-tip ajax-load" href="#" title="blog">
                            <i class="icon-document-edit"></i>
                            <span>博客</span>
                        </a>
                        <ul>
                            <li><a class="tooltip-tip2 ajax-load" href="{{ url('admin/list') }}" title="list"><i class="entypo-doc-text"></i><span>博客列表</span></a></li>
                            <li><a class="tooltip-tip2 ajax-load" href="{{ url('admin/detail') }}" title="detail"><i class="entypo-newspaper"></i><span>博客详情</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="tooltip-tip ajax-load" href="#" title="photo">
                            <i class="icon-camera"></i>
                            <span>图片</span>
                        </a>
                        <ul>
                            <li><a class="tooltip-tip2 ajax-load" href="{{ url('admin/photo') }}" title="list"><i class="entypo-doc-text"></i><span>图片列表</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="tooltip-tip ajax-load" href="{{ url('admin/social') }}" title="Social">
                            <i class="icon-feed"></i>
                            <span>社交</span>
                        </a>
                    </li>
                    <li>
                        <a class="tooltip-tip ajax-load" href="{{ url('admin/media') }}" title="Media">
                            <i class="icon-camera"></i>
                            <span>媒体</span>
                        </a>
                    </li>
                </ul>

                <ul class="topnav menu-left-nest">
                    <li>
                        <a href="#" style="border-left:0px solid!important;" class="title-menu-left">
                            <span class="design-kit"></span>
                            <i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>
                        </a>
                    </li>

                    <li>
                        <a class="tooltip-tip ajax-load" href="{{ url('admin/index') }}" title="Dashboard">
                            <i class="icon-window"></i>
                            <span>仪表板</span>
                        </a>
                    </li>
                    <li>
                        <a class="tooltip-tip ajax-load" href="mail" title="Mail">
                            <i class="icon-mail"></i>
                            <span>邮件</span>
                            <div class="noft-blue">289</div>
                        </a>
                    </li>

                    <li>
                        <a class="tooltip-tip ajax-load" href="{{ url('admin/icon') }}" title="Icons">
                            <i class="icon-preview"></i>
                            <span>小图标</span>
                            <div class="noft-blue" style="display: inline-block; float: none;">New</div>
                        </a>
                    </li>

                    <li>
                        <a class="tooltip-tip" href="#" title="Extra Pages">
                            <i class="icon-document-new"></i>
                            <span>其他页面</span>
                        </a>
                        <ul>
                            <li><a class="tooltip-tip2 ajax-load" href="{{ url('admin/blank') }}" title="Blank Page"><i class="icon-media-record"></i><span>空白页面</span></a></li>
                            <li><a class="tooltip-tip2 ajax-load" href="{{ url('admin/profile') }}" title="Profile Page"><i class="icon-user"></i><span>个人详情</span></a></li>
                            <li><a class="tooltip-tip2 ajax-load" href="{{ url('admin/invoice') }}" title="Invoice"><i class="entypo-newspaper"></i><span>表格</span></a></li>
                            <li><a class="tooltip-tip2 ajax-load" href="{{ url('admin/pricing') }}" title="Pricing Table"><i class="fontawesome-money"></i><span>Pricing Table</span></a></li>
                            <li><a class="tooltip-tip2 ajax-load" href="{{ url('admin/time') }}" title="Time Line"><i class="entypo-clock"></i><span>历史时间</span></a></li>
                            <li><a class="tooltip-tip2" href="{{ url('admin/error/notfound') }}" title="404 Error Page"><i class="icon-thumbs-down"></i><span>404</span></a></li>
                            <li><a class="tooltip-tip2" href="{{ url('admin/error/server') }}" title="500 Error Page"><i class="icon-thumbs-down"></i><span>500</span></a></li>
                            <li><a class="tooltip-tip2" href="{{ url('admin/lock') }}" title="Lock Screen"><i class="icon-lock"></i><span>锁屏</span></a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="tooltip-tip " href="{{ url('admin/user') }}" title="login">
                            <i class="icon-download"></i>
                            <span>登录</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
