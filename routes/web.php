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

Route::get('/',function(){


    return redirect('/home/index');
});
// 后台
Route::group([],function(){
    // 首页
    Route::get('admin/index','admin\IndexController@index');
    // 用户
    Route::resource('admin/user','admin\UserController');
    Route::get('admin/userajax','admin\UserAjaxController@uajax');
    Route::get('admin/unajax','admin\UserAjaxController@unajax');
    // 分类
    Route::resource('admin/cate','admin\CatesController');
    // 商品
    Route::resource('admin/good','admin\GoodsController');
    Route::get('admin/goodAjax','admin\GoodsAjaxController@GoodsAjax');
    Route::post('admin/good/delete','admin\GoodsAjaxController@delete');
    // 广告
    Route::resource('admin/adver','admin\adverController');
    Route::post('admin/adver/ajax','admin\adverAjaxController@ajax');
    Route::post('admin/adver/delete','admin\adverAjaxController@delete');
    // 评论管理
    Route::get('admin/eval','admin\evalController@index');
    Route::get('admin/evalajax','admin\evalController@ajax');
    Route::get('admin/pinglun/{id}/{gid}','admin\evalController@pinglun');
    // 友情链接
    Route::resource('admin/links','admin\LinkController');
    Route::get('admin/linkajax','admin\LinkAjaxController@lajax');
    // 轮播
    Route::resource('admin/carouses','admin\CarousesController');
    Route::get('admin/carousesajax','admin\CarousesAjaxController@cajax');

     
});

// 前台
Route::group([],function(){

    // 首页
    Route::get('home/index','home\IndexController@index');
    Route::get('home/show','home\IndexController@show');

    Route::get('home/user','home\IndexController@user');
    // 列表页
    // Route::get('home/list','home\IndexController@list');
    Route::get('home/list/{cid}','home\GoodsController@list');
    Route::get('home/cuxiao/{cid}','home\GoodsController@cuxiao');
    // Route::get('home/prices/{price}','home\GoodsController@prices');

    // 详情页
    Route::get('home/detail/{gid}','home\GoodsController@detail');
    Route::get('home/carts','home\IndexController@carts');
    Route::get('home/order','home\IndexController@order');
    Route::get('home/paysce','home\IndexController@paysce');
    Route::get('home/address','home\IndexController@address');
    Route::get('home/login','home\IndexController@login');
    Route::get('home/signup','home\IndexController@signup');
    Route::get('home/shoucang','home\IndexController@shoucang');
    Route::get('home/shoucang','home\IndexController@shoucang');
    // Route::get('home/cate','home\CatesController@show');

});
