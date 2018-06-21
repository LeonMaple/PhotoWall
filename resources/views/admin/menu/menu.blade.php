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

                {{--<ul id="menu-showhide" class="topnav menu-left-nest">--}}
                    {{--<li>--}}
                        {{--<a href="#" style="border-left:0px solid!important;" class="title-menu-left">--}}
                            {{--<span class="component"></span>--}}
                            {{--<i data-toggle="tooltip" class="entypo-cog pull-right config-wrap"></i>--}}
                        {{--</a>--}}
                    {{--</li>--}}


                    {{--<li>--}}
                        {{--<a class="tooltip-tip" href="#" title="UI Element">--}}
                            {{--<i class="icon-monitor"></i>--}}
                            {{--<span>UI Element</span>--}}
                        {{--</a>--}}
                        {{--<ul>--}}
                            {{--<li><a class="tooltip-tip2 ajax-load" href="{{ url('admin/element') }}" title="Element"><i class="icon-attachment"></i><span>Element</span></a></li>--}}
                            {{--<li>--}}
                                {{--<a class="tooltip-tip2 ajax-load" href="{{ url('admin/button') }}" title="Button"><i class="icon-view-list-large"></i><span>Button</span>--}}
                                    {{--<div class="noft-blue-number">10</div>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a class="tooltip-tip2 ajax-load" href="{{ url('admin/wizard') }}" title="Tab & Accordion"><i class="icon-folder"></i><span>Wizard</span>--}}
                                    {{--<div class="noft-purple-number">3</div>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li><a class="tooltip-tip2 ajax-load" href="{{ url('admin/calendar') }}" title="Calender"><i class="icon-calendar"></i><span>Calendar</span></a></li>--}}
                            {{--<li><a class="tooltip-tip2 ajax-load" href="{{ url('admin/tree') }}" title="Tree View"><i class="icon-view-list"></i><span>Tree View</span></a></li>--}}
                            {{--<li><a class="tooltip-tip2 ajax-load" href="{{ url('admin/grids') }}" title="Grids"><i class="icon-menu"></i><span>Grids</span></a></li>--}}
                            {{--<li><a class="tooltip-tip2 ajax-load" href="{{ url('admin/chart') }}" title="Chart"><i class="icon-graph-pie"></i><span>Chart</span></a></li>--}}
                            {{--<li>--}}
                                {{--<a class="tooltip-tip ajax-load" href="{{ url('admin/typhography') }}" title="Typhoghrapy">--}}
                                    {{--<i class="icon-information"></i>--}}
                                    {{--<span>Typhoghrapy</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a class="tooltip-tip" href="#" title="Form">--}}
                            {{--<i class="icon-document"></i>--}}
                            {{--<span>Form</span>--}}
                        {{--</a>--}}
                        {{--<ul>--}}
                            {{--<li><a class="tooltip-tip2 ajax-load" href="{{ url('admin/formElement') }}" title="Form Elements"><i class="icon-document-edit"></i><span>Form Elements</span></a></li>--}}
                            {{--<li><a class="tooltip-tip2 ajax-load" href="{{ url('admin/andvanceForm') }}" title="Andvance Form"><i class="icon-map"></i><span>Andvance Form</span></a></li>--}}
                            {{--<li><a class="tooltip-tip2 ajax-load" href="{{ url('admin/textEditor') }}" title="Text Editor"><i class="icon-code"></i><span>Text Editor</span></a></li>--}}
                            {{--<li><a class="tooltip-tip2 ajax-load" href="{{ url('admin/fileUpload') }}" title="File Upload"><i class="icon-upload"></i><span>File Upload</span></a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a class="tooltip-tip" href="#" title="Tables">--}}
                            {{--<i class="icon-view-thumb"></i>--}}
                            {{--<span>Tables</span>--}}
                        {{--</a>--}}
                        {{--<ul>--}}
                            {{--<li><a class="tooltip-tip2 ajax-load" href="{{ url('admin/tableStatic') }}" title="Table Static"><i class="entypo-layout"></i><span>Table Static</span></a></li>--}}
                            {{--<li><a class="tooltip-tip2 ajax-load" href="{{ url('admin/tableDynamic') }}" title="Table Dynamic"><i class="entypo-menu"></i><span>Table Dynamic</span></a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}

                    {{--<li>--}}
                        {{--<a class="tooltip-tip ajax-load" href="{{ url('admin/map') }}" title="Map">--}}
                            {{--<i class="icon-location"></i>--}}
                            {{--<span>Map</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}


                {{--<div class="side-dash">--}}
                    {{--<h3><span>Device</span></h3>--}}
                    {{--<ul class="side-dashh-list">--}}
                        {{--<li>Avg. Traffic<span>25k<i style="color:#44BBC1;" class="fa fa-arrow-circle-up"></i></span></li>--}}
                        {{--<li>Visitors<span>80%<i style="color:#AB6DB0;" class="fa fa-arrow-circle-down"></i></span></li>--}}
                        {{--<li>Convertion Rate<span>13m<i style="color:#19A1F9;" class="fa fa-arrow-circle-up"></i></span></li>--}}
                    {{--</ul>--}}
                    {{--<h3>--}}
                        {{--<span>Traffic</span>--}}
                    {{--</h3>--}}
                    {{--<ul class="side-bar-list">--}}
                        {{--<li>Avg. Traffic<div class="linebar">5,7,8,9,3,5,3,8,5</div></li>--}}
                        {{--<li>Visitors<div class="linebar2">9,7,8,9,5,9,6,8,7</div></li>--}}
                        {{--<li>Convertion Rate<div class="linebar3">5,7,8,9,3,5,3,8,5</div></li>--}}
                    {{--</ul>--}}
                    {{--<h3>--}}
                        {{--<span>Visitors</span>--}}
                    {{--</h3>--}}
                    {{--<div id="g1" style="height:180px" class="gauge"></div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
</div>
