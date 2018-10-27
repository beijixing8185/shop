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

Route::any('pay/notify', 'Pay\PayController@notify');        //支付选择
Route::any('pay/wx/notify', 'Pay\PayController@wxNotify');        //支付选择


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

        Route::get('order', 'MemberController@orderList');  //会员订单
        Route::get('showOrder', 'MemberController@showOrder');  //预支付下单
        Route::get('addOrder', 'MemberController@addOrder');  //会员下单
        Route::get('payOrder/{orderSn}/{price}/{name}', 'MemberController@payOrder');  //会员下单

        Route::post('updateMemberInfo', 'MemberController@updateMemberInfo');  //修改会员信息逻辑
        Route::post('updateMemberPwd', 'MemberController@updateMemberPwd');  //修改会员密码逻辑

        Route::post('invoice_a', 'MemberController@invoice_a');  //普通发票提交
        Route::post('invoice_b', 'MemberController@invoice_b');  //增值税发票提交



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

        Route::get('wxpay/{order_sn?}', 'PayController@wxPay');        //微信支付

        Route::get('wxPaySuccess/{order_sn?}', 'PayController@wxPaySuccess');        //微信支付轮询

        Route::get('alipay/{order_sn}', 'PayController@aliPay');        //支付宝支付


    });


//商品
    Route::group(['namespace' =>'Goods','prefix' => 'goods'], function () {

        Route::get('goodsDetail/{id}', 'GoodsController@goodsDetail');

        Route::get('/index', 'GoodsController@index');
        Route::get('/cate', 'GoodsController@getGoodsCate');
    });

});


Route::group(['prefix'=>'hx/admin','namespace'=>'Admin'], function () {
    Route::get('login', 'AuthController@login');       // 登录
    Route::post('login', 'AuthController@postLogin');       //登录
    Route::get('logout', 'AuthController@logout');       //退出登录
    Route::get('cacheOut', 'AuthController@cacheOut');   //清除前台缓存

    Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function () {
        Route::get('/index', 'IndexController@index');       // 后台首页
        Route::get('updatePass/{id}', 'AuthController@updatePass');       // 后台首页
        Route::post('updatePass', 'AuthController@postUpdatePass');       // 后台首页


        Route::get('orderList', 'IndexController@platOrderList');       // 平台订单
        Route::get('getAdminUserList', 'AuthController@getAdminUserList');    // 后台用户
        Route::get('getUserList', 'AuthController@getUserList');    // 前台用户
        Route::get('delUser', 'AuthController@delUser');    // 前台用户



        Route::get('serviceList', 'ServiceController@serviceList');    // 服务列表
        Route::get('addService/{id?}', 'ServiceController@addService');    // 添加编辑服务
        Route::post('serviceForm', 'ServiceController@postAddService');    // 提交服务
        Route::get('delService', 'ServiceController@delService');    // 删除服务

        Route::get('specList', 'ServiceController@specList');    // 服务列表
        Route::get('serviceSpecForm/{id?}', 'ServiceController@serviceSpecForm');    // 添加规格
        Route::post('serviceSpecForm', 'ServiceController@postServiceSpecForm');    // 提交规格
        Route::get('delSpec', 'ServiceController@delSpec');    // 删除规格

        Route::get('addCates', 'ServiceController@addCates');    //添加栏目
        Route::get('cateList', 'ServiceController@cateList');    //栏目列表
        Route::post('addCates', 'ServiceController@postAddCates');    //提交栏目
        Route::post('updateCate', 'ServiceController@updateCate');    //修改栏目
        Route::get('delCate', 'ServiceController@delCate');    //删除栏目

        Route::get('articleList', 'ArticleController@articleList');    // 文章列表
        Route::get('addArticle/{id?}', 'ArticleController@addArticle');    // 添加编辑文章
        Route::post('articleForm', 'ArticleController@postArticleForm');    // 提交文章
        Route::get('delArticle', 'ArticleController@delArticle');    // 删除文章

        Route::get('articles/cate', 'ArticleController@getArticlesCate');
        Route::get('addArticleCates', 'ArticleController@addArticleCates');    //添加文章分类
        Route::get('cateArticleList', 'ArticleController@cateArticleList');    //分类列表
        Route::post('addArticleCates', 'ArticleController@postAddArticleCates');    //提交分类
        Route::post('updateArticleCate', 'ArticleController@updateArticleCate');    //修改分类
        Route::get('delArticleCate', 'ArticleController@delArticlelCate');    //删除分类

        Route::get('addBanner/{id?}', 'BannerController@addBanner');    //添加banner
        Route::get('bannerList', 'BannerController@bannerList');    //列表
        Route::post('addBanner', 'BannerController@postAddBanner');    //提交
        Route::post('updateBanner', 'BannerController@updateBanner');    //修改
        Route::get('delBanner', 'BannerController@delBanner');    //删除banner

        Route::get('addCase/{id?}', 'CaseController@addCase');    //添加案例
        Route::get('caseList', 'CaseController@caseList');    //案例列表
        Route::post('addCase', 'CaseController@postAddCase');    //提交
        Route::post('updateCase', 'CaseController@updateCase');    //修改
        Route::get('delCase', 'CaseController@delCase');    //删除案例

        Route::get('addAbout/{id?}', 'AboutController@addAbout');    //关于我们
        Route::get('aboutList', 'AboutController@aboutList');
        Route::post('addAbout', 'AboutController@postAddAbout');
        Route::post('updateAbout', 'AboutController@updateAbout');
        Route::get('delAbout', 'AboutController@delAbout');

        Route::get('addLink/{id?}', 'AboutController@addLink');    //链接
        Route::get('linkList', 'AboutController@linkList');
        Route::post('addLink', 'AboutController@postAddlink');
        Route::post('updateLink', 'AboutController@updateLink');

        Route::get('orderList', 'OrderController@orderList'); //订单
        Route::get('sendOrder/{id}', 'OrderController@sendOrder'); //订单
        Route::post('updateOrder', 'OrderController@updateOrder'); //订单

    });







});
Route::any('/upload', 'Common\UploadController@uploadImage');    // 上传图片