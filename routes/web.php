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

//根目录
Route::get('/', function () {
    return view('welcome');
});

    Route::get('/test', 'TestController@index');



//首页
Route::group(['namespace' =>'Index','prefix' => 'index'], function () {

    Route::get('/index', 'IndexController@index');

});


//登陆
Route::group(['namespace' =>'Login','prefix' => 'login'], function () {

    Route::get('verify_img', 'LoginController@verify_img');     //验证码验证
    Route::get('captcha/{tmp}', 'LoginController@captcha');     //验证码路由
    Route::get('index', 'LoginController@index');           //登陆
    Route::post('login', 'LoginController@login');           //手机登陆逻辑
    Route::post('login_pwd', 'LoginController@login_pwd');   //密码登陆逻辑
    Route::get('register', 'LoginController@register');     //注册
    Route::post('register_login', 'LoginController@register_login');     //注册逻辑

});


//会员
Route::group(['namespace' =>'Member','prefix' => 'member'], function () {

    //Route::get('index', 'MemberController@index');

    Route::get('getMember', 'MemberController@getMember');  //获取会员信息

    Route::get('member_pwd', 'MemberController@memberPwd');  //会员密码修改

    Route::get('orderList', 'MemberController@orderList');  //会员订单

});

//商城
Route::group(['namespace' =>'Goods','prefix' => 'goods'], function () {

    Route::get('goodsDetail', 'GoodsController@goodsDetail');

    Route::get('/index', 'GoodsController@index');

});



//资讯
Route::group(['namespace' =>'News','prefix' => 'news'], function () {

    Route::get('list', 'NewsController@newsList');      //资讯栏目

    Route::get('index', 'NewsController@index');        //新闻栏目

    Route::get('detail', 'NewsController@detail');        //新闻详情


});



//留言
Route::group(['namespace' =>'Message','prefix' => 'message'], function () {

    Route::get('index', 'MessageController@index');        //留言首页

});



//支付
Route::group(['namespace' =>'Pay','prefix' => 'pay'], function () {

    Route::get('index', 'PayController@index');        //支付首页

    Route::get('pay', 'PayController@pay');        //支付选择

});

//快捷功能
Route::group(['namespace' =>'Common','prefix' => 'common'], function () {

    Route::get('lsmSms', 'CommonController@lsmSms');     //短信验证码验证


});