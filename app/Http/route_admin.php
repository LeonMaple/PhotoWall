<?php
/**
 * Created by PhpStorm.
 * @author: helinfeng
 * @Date: 2018/6/8
 * @Time: 下午2:28
 * @File: route_admin.php
 */

//Admin 后台
// 控制器在 "App\Http\Controllers\Admin" 命名空间下
//Route::group(['namespace' => 'Admin'], function(){
//    // 控制器在 "App\Http\Controllers\Admin\User" 命名空间下
//    Route::group(['namespace' => 'User'], function()
//    {
//        //访问地址 http://h.laravel.com/admin/user
//        Route::get('admin/user', 'LoginController@login');
//
//        //首页
////        Route::get('admin/user', 'LoginController@login');
//
//    });
//});



//首页
Route::get('admin/index', 'IndexController@index');
//小图标
Route::get('admin/icon', 'IconController@index');

// 控制器在 "App\Http\Controllers\Admin\User" 命名空间下
Route::group(['namespace' => 'User'], function()
{
    //访问登录地址 http://h.laravel.com/admin/user
    Route::get('admin/user', 'LoginController@login');

});

//博客文章操作
Route::group(['namespace' => 'Blog'], function()
{
    Route::get('admin/blogList', 'BlogController@blogList');
    Route::get('admin/blogDetail', 'BlogController@blogDetail');
});

//媒体
Route::group(['namespace' => 'Media'], function()
{
    Route::get('admin/media', 'MediaController@index');
});


//email
Route::group(['namespace' => 'Mail'], function()
{
    Route::get('admin/mail', 'MailController@index');
});


//email
Route::group(['namespace' => 'Extra'], function()
{
    Route::get('admin/blank', 'BlankController@index');
    Route::get('admin/profile', 'ProfileController@index');
    Route::get('admin/invoice', 'InvoiceController@index');
    Route::get('admin/pricing', 'PricingController@index');
    Route::get('admin/time', 'TimelineController@index');
    Route::get('admin/lock', 'LockscreenController@index');

    Route::get('admin/error/server', 'ErrorController@server');
    Route::get('admin/error/notfound', 'ErrorController@notfound');

    //需要研究下，现在还不起作用
//    Route::get('error/{action}', function(App\Http\Controllers\Admin\Extra\ErrorController $index, $action){
//        return $index->$action();
//    });

});
