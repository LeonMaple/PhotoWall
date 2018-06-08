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



Route::any('/index', 'WelcomeController@index');


//http://h.laravel.com/photo
Route::resource('photo', 'PhotoController');

Route::get('home/index', 'Home\IndexController@index');


Route::resource('articles', 'ArticlesController');
Route::any('/articles/create', 'ArticlesController@create');


//Route::get('/Home', 'IndexController@index');
//
//Route::group(['prefix' => 'admin', 'namespace' => 'Admin\User'], function()
//{
//    Route::get('/', 'loginController@login');
//});
//
//Route::group(['prefix' => 'admin/dingdan', 'namespace' => 'Admin\Dingdan'], function()
//{
//    Route::get('/', 'DingController');
//});
//
//Route::resource('photos', 'PhotoController');

////http://h.laravel.com/hello
//Route::get('/hello',function(){
//    return "Hello Laravel[GET]!";
//});
//
////http://h.laravel.com/testPost
//Route::get('/testPost',function(){
//    $csrf_token = csrf_token();
//    $form = <<<FORM
//        <form action="/hello" method="POST">
//            <input type="hidden" name="_token" value="{$csrf_token}">
//            <input type="submit" value="Test"/>
//        </form>
//FORM;
//    return $form;
//});
//
//Route::post('/hello',function(){
//    return "Hello Laravel[POST]!";
//});

//还可以使用Route门面上的match方法匹配多种请求方式：
//Route::match(['get','post'],'/hello',function(){
//    return "Hello Laravel!";
//});
//
////当然还使用更方便的any方法匹配所有请求方式
//Route::any('/hello',function(){
//    return "Hello Laravel!";
//});


//Route::get('/hello/{name}',function($name){
//    return "Hello {$name}!";
//});

//Route::get('/hello/{name}/by/{user}',function($name,$user){
//    return "Hello {$name} by {$user}!";
//});


//Route::get('/hello/{name?}',function($name="Laravel"){
//    return "Hello {$name}!";
//});
//
//


//
//Route::get('/hello/{name?}',function($name="Laravel"){
//    return "Hello {$name}!";
//})->where('name','[A-Za-z]+');

//Route::get('/hello/laravelacademy',['as'=>'academy',function(){
//    return 'Hello LaravelAcademy！';
//}]);
//
//Route::get('/testNamedRoute',function(){
//    return redirect()->route('academy');
//});
//
//Route::get('/acb',function(){
//    //使用Test中间件
//});
//
//Route::group(['middleware'=>'test'],function(){
//    Route::get('/write',function(){
//        //使用Test中间件
//    });
//    Route::get('/update',function(){
//        //使用Test中间件
//    });
//});
//
//Route::get('/age/refuse',['as'=>'refuse',function(){
//    return "未成年人禁止入内！";
//}]);
//
//
//Route::group(['namespace' => 'LaravelAcademy'], function(){
//    // 控制器在 "App\Http\Controllers\LaravelAcademy" 命名空间下
//
//    Route::group(['namespace' => 'DOCS'], function()
//    {
//        // 控制器在 "App\Http\Controllers\LaravelAcademy\DOCS" 命名空间下
//    });
//});


//Route::group(['domain'=>'{service}.laravel.com'],function(){
//    Route::get('/write/laravelacademy',function($service){
//        return "Write FROM {$service}.laravel.com";
//    });
//    Route::get('/update/laravelacademy',function($service){
//        return "Update FROM {$service}.laravel.com";
//    });
//});


//Route::group(['prefix'=>'laravelacademy'],function(){
//    Route::get('write',function(){
//        return "Write LaravelAcademy";
//    });
//    Route::get('update',function(){
//        return "Update LaravelAcademy";
//    });
//});

//Route::namespace('Home')->group(function () {
//    var_dump('Hello World');
//    Route::get('/', 'HomeController@index');
//    // 在 "App\Http\Controllers\Admin" 命名空间下的控制器
//});


//Route::group(['namespace' => 'Home'], function(){
//    // 控制器在 "App\Http\Controllers\Admin" 命名空间下
////    Route::get('/', 'HomeController@index');
//    Route::get('Home/index','Home\IndexController@index');
//
//    Route::group(['namespace' => 'User'], function(){
//        // 控制器在 "App\Http\Controllers\Admin\User" 命名空间下
//    });
//});

//Route::resource('home' , 'IndexController');
//
//Route::group(['prefix' => 'member','namespace' => 'Home'], function () {
//    //测试地址 http://www.laravelstudy.com/laravel/public/member/name
//    Route::get('name', function () {
//        return 'name';
//
//    });
//    Route::get('index', 'IndexController@index');
//
//    Route::any('age', function () {
//        return 'age';
//    });
//});
//Route::group(['namespace' => 'Home'], function()
//{
//    // Controllers Within The "App\Http\Controllers\Admin" Namespace
//    Route::get('/', 'IndexController@index');
//    Route::group(['namespace' => 'User'], function()
//    {
//        // Controllers Within The "App\Http\Controllers\Admin\User" Namespace
//    });
//});
//
//Route::get('foo', 'Home\IndexController@index');
//
//Route::get('user/{id}', 'UserController@showProfile');