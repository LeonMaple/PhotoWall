<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//不重要的模板
//Route::get('/', function () {return view('home.one.index');});
//Route::get('/typography', function () { return view('home.one.typography'); });
//Route::get('/blog', function () { return view('home.one.blog'); });
//Route::get('/gallery', function () { return view('home.one.gallery'); });
//Route::get('/contact', function () { return view('home.one.contact'); });

Route::get('/', function () {return view('home.two.index');});
//主要使用这套模板
Route::get('two', function () {
    return view('home.two.index');
});
Route::get('two/about', function () { return view('home.two.about'); });
Route::get('two/services', function () { return view('home.two.services'); });
Route::get('two/gallery', function () { return view('home.two.gallery'); });
Route::get('two/shortcodes', function () { return view('home.two.shortcodes'); });
Route::get('two/contact', function () { return view('home.two.contact'); });

Route::get('twoo', 'Home\IndexController@index');


Route::any('/index', 'WelcomeController@index');


//http://h.laravel.com/photo
Route::resource('photo', 'PhotoController');

Route::get('home/index', 'Home\IndexController@index');


Route::resource('articles', 'ArticlesController');
Route::any('/articles/create', 'ArticlesController@create');


// 控制器在 "App\Http\Controllers\Admin" 命名空间下
Route::group(['namespace' => 'Admin'], function(){
    // 控制器在 "App\Http\Controllers\Admin\User" 命名空间下
    Route::group(['namespace' => 'User'], function()
    {
        //访问地址 http://h.laravel.com/admin/user
        Route::get('admin/user', 'LoginController@login');
    });
});