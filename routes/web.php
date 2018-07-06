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
Route::get('about', function () { return view('home.two.about'); });
Route::get('services', function () { return view('home.two.services'); });
Route::get('gallery', function () { return view('home.two.gallery'); });
Route::get('shortcodes', function () { return view('home.two.shortcodes'); });
Route::get('contact', function () { return view('home.two.contact'); });


//http://h.laravel.com/photo
Route::group(['namespace' => 'Home\Photo'], function()
{
//    Route::resource('photo', 'PhotoController');
    Route::get('photo', 'PhotoController@index');
    Route::get('photo/single', 'PhotoController@single');
    Route::get('photo/one', 'PhotoController@one');
});









Route::get('twoo', 'Home\IndexController@index');


Route::any('/index', 'WelcomeController@index');



Route::get('home/index', 'Home\IndexController@index');


Route::resource('articles', 'ArticlesController');
Route::any('/articles/create', 'ArticlesController@create');

