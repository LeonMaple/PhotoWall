<?php
/**
 * Created by PhpStorm.
 * @author: helinfeng
 * @Date: 2018/6/22
 * @Time: 下午5:09
 * @File: banner.blade.php
 */
?>

<div class="banner1">
    <div class="container">
        <div class="header">
            <div class="header-left"></div>
            <div class="header-left1">
                <h1><a href="/two">Walk<span>Where To Go This Summer?</span></a></h1>
            </div>
            <div class="top-nav">
                <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
                    <ul>
                        <li><a href="/two">Home</a></li>
                        <li><a href="about">About</a></li>
                        <li><a href="services">Services</a></li>
                        <li class="active"><a href="gallery">Gallery</a></li>
                        <li><a href="shortcodes">Short Codes</a></li>
                        <li><a href="contact">Contact</a></li>
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
    </div>
</div>

