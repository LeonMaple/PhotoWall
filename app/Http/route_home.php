<?php
/**
 * Created by PhpStorm.
 * @author: helinfeng
 * @Date: 2018/6/8
 * @Time: 下午2:28
 * @File: route_home.php
 */

Route::get('/', function () {
//    return view('welcome');
    return view('home.one.index');
});

Route::get('/typography', function () { return view('home.one.typography'); });

Route::get('/blog', function () { return view('home.one.blog'); });

Route::get('/gallery', function () { return view('home.one.gallery'); });

Route::get('/contact', function () { return view('home.one.contact'); });

Route::get('two', function () { return view('home.two.index'); });
Route::get('two/about', function () { return view('home.two.about'); });
Route::get('two/services', function () { return view('home.two.services'); });
Route::get('two/gallery', function () { return view('home.two.gallery'); });
Route::get('two/shortcodes', function () { return view('home.two.shortcodes'); });
Route::get('two/contact', function () { return view('home.two.contact'); });


