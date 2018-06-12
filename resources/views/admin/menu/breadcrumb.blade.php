<?php
/**
 * Created by PhpStorm.
 * @author: helinfeng
 * @Date: 2018/6/11
 * @Time: 下午5:48
 * @File: breadcrumb.blade.php
 */

?>


<ul id="breadcrumb">
    <li>
        <span class="entypo-home"></span>
    </li>
    <li><i class="fa fa-lg fa-angle-right"></i>
    </li>
    <li><a href="#" title="Sample page 1">{{ isset($one) ? $one : '标签一' }}</a>
    </li>
    <li><i class="fa fa-lg fa-angle-right"></i>
    </li>
        <li><a href="#" title="Sample page 1">{{ isset($title) ? $title : '标签二' }}</a>
    </li>
    <li class="pull-right">
        <div class="input-group input-widget">
            <input style="border-radius:15px" type="text" placeholder="Search..." class="form-control">
        </div>
    </li>
</ul>