<?php
/**
 * Created by PhpStorm.
 * @author: helinfeng
 * @Date: 2018/6/8
 * @Time: 下午2:28
 * @File: route_home.php
 */

Route::get('/', function () { return view('home.two.index'); });

Route::get('about', function () { return view('home.two.about'); });
Route::get('services', function () { return view('home.two.services'); });
Route::get('gallery', function () { return view('home.two.gallery'); });
Route::get('shortcodes', function () { return view('home.two.shortcodes'); });
Route::get('contact', function () { return view('home.two.contact'); });


/*Route::group(['namespace' => 'Photo'], function() {
//    Route::resource('photo', 'PhotoController');
    Route::get('photo/index', 'PhotoController@index');
});*/

//Route::get('photo', 'PhotoController@index');
//Route::get('photo/single', function () { return view('home.photo.single'); });