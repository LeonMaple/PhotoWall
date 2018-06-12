<?php
/**
 * Created by PhpStorm.
 * @author: helinfeng
 * @Date: 2018/6/11
 * @Time: 下午3:23
 * @File: layouts.blade.php
 */
?>

<meta charset="utf-8">
<title>{{ isset($title) ? $title : 'index' }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Le styles -->
<script type="text/javascript" src="{{ URL::asset('admin/js/jquery.js') }}"></script>

<link rel="stylesheet" href="{{ URL::asset('admin/css/style.css') }}">
<link rel="stylesheet" href="{{ URL::asset('admin/css/loader-style.css') }}">
<link rel="stylesheet" href="{{ URL::asset('admin/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ URL::asset('admin/css/media.css') }}">
<link rel="stylesheet" href="{{ URL::asset('admin/css/social.css') }}">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<!--<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- Fav and touch icons -->
<link rel="shortcut icon" href="{{ URL::asset('admin/ico/minus.png') }}">
