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

// 控制器在 "App\Http\Controllers\Admin\User" 命名空间下
Route::group(['namespace' => 'User'], function()
{
    //访问登录地址 http://h.laravel.com/admin/user
    Route::get('admin/user', 'LoginController@login');

});