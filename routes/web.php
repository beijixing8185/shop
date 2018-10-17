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

Route::get('/test', 'TestController@index');    //测试

//快捷功能
Route::group(['namespace' =>'Common','prefix' => 'common'], function () {

    Route::get('lsmSms', 'CommonController@lsmSms');     //短信验证码验证

});

//留言
Route::group(['namespace' =>'Message','prefix' => 'message'], function () {

    Route::post('index', 'MessageController@addMessage');        //留言添加，适用多页面

    Route::post('indexCode', 'MessageController@addCodeMessage');        //留言添加，适用与有短信验证码的

});

//前台路由
Route::group(['middleware' => 'App\Http\Middleware\CommonMiddleware'], function () {

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

        Route::get('getMember', 'MemberController@getMember');  //获取会员信息

        Route::get('member_pwd', 'MemberController@memberPwd');  //会员密码修改

        Route::get('orderList', 'MemberController@orderList');  //会员订单
    });



//资讯
    Route::group(['namespace' =>'News','prefix' => 'news'], function () {

        Route::get('list', 'NewsController@newsList');      //资讯栏目

        Route::get('index/{statusId?}', 'NewsController@index');        //新闻栏目

        Route::get('detail/{id}', 'NewsController@detail');        //新闻详情
    });

//案例
    Route::group(['namespace' =>'Customer','prefix' => 'customer'], function () {

        Route::get('detail/{id}', 'CustomerController@detail');      //案例详情

    });

//关于我们
    Route::group(['namespace' =>'About','prefix' => 'about'], function () {

        Route::get('index/{id}', 'AboutController@index');      //案例详情
    });

    //搜索
    Route::group(['namespace' =>'Search','prefix' => 'search'], function () {

        Route::get('index/{search?}', 'SearchController@index');
    });



//支付
    Route::group(['namespace' =>'Pay','prefix' => 'pay'], function () {

        Route::get('index', 'PayController@index');        //支付首页

        Route::get('pay', 'PayController@pay');        //支付选择
    });


});


Route::group(['namespace' =>'Goods','prefix' => 'goods'], function () {

    Route::get('goodsDetail', 'GoodsController@goodsDetail');

    Route::get('/index', 'GoodsController@index');
    Route::get('/cate', 'GoodsController@getGoodsCate');
});

Route::group(['prefix'=>'hx/admin','namespace'=>'Admin'], function () {
    Route::get('login', 'AuthController@login');       // 登录
    Route::post('login', 'AuthController@postLogin');       //登录
    Route::get('logout', 'AuthController@logout');       //退出登录

    Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function () {
        Route::get('/index', 'IndexController@index');       // 后台首页
        Route::get('orderList', 'IndexController@platOrderList');       // 平台订单
        Route::get('getAdminUserList', 'AuthController@getAdminUserList');    // 后台用户

    });
    Route::get('serviceList', 'ServiceController@serviceList');    // 服务列表
    Route::get('addService/{id?}', 'ServiceController@addService');    // 添加编辑服务
    Route::post('serviceForm', 'ServiceController@postAddService');    // 提交服务

    Route::get('specList', 'ServiceController@specList');    // 服务列表
    Route::get('serviceSpecForm/{id?}', 'ServiceController@serviceSpecForm');    // 添加规格
    Route::post('serviceSpecForm', 'ServiceController@postServiceSpecForm');    // 提交规格

    Route::get('addCates', 'ServiceController@addCates');    //添加栏目
    Route::get('cateList', 'ServiceController@cateList');    //栏目列表
    Route::post('addCates', 'ServiceController@postAddCates');    //提交栏目





});
Route::post('/upload', 'Common\UploadController@uploadImage');    // 上传图片