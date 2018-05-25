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
    return view('welcome');
});

// 后台
Route::group([],function(){
    Route::get('admin/index','admin\IndexController@index');

    Route::resource('admin/cate','admin\CatesController');

    Route::resource('admin/user','admin\UserController');
    Route::get('admin/userajax','admin\UserAjaxController@uajax');
    Route::get('admin/unajax','admin\UserAjaxController@unajax');

    Route::resource('admin/links','admin\LinkController');
    Route::get('admin/linkajax','admin\LinkAjaxController@lajax');


});

// 前台
Route::group([],function(){
    Route::get('home/index','home\IndexController@index');
    Route::get('home/links','home\LinksController@links');

    //评论
    Route::get('home/ping','home\PingController@index');
    // Route::get('home/ping','home\PingLunController@insert');
    


});
