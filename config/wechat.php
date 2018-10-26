<?php

return [
    /*
     * Debug 模式，bool 值：true/false
     *
     * 当值为 false 时，所有的日志都不会记录
     */
    'debug'  => true,

    /*
     * 使用 Laravel 的缓存系统
     */
    'use_laravel_cache' => true,

    /*
     * 账号基本信息，请从微信公众平台/开放平台获取
     */
      'app_id'        => env('WECHAT_APPID'),         //  测试 AppID
      'secret'        => env('WECHAT_SECRET'),     //  测试 AppSecret
    //'app_id'        => 'wxe5a94d0c4444a6e1',         // 正式 AppID
    //'secret'        => 'fec45ff7e29348693ef3204eb29424c5',     // 正式 AppSecret
    //ddcce48ee5d6abc6d1d034291491d086     wx352610373e931fea
    //fec45ff7e29348693ef3204eb29424c5      wxe5a94d0c4444a6e1
    'token'         => env('WECHAT_TOKEN', 'zhipinglianmeng'),          // Token
    'aes_key'       => env('WECHAT_AES_KEY', ''),                    // EncodingAESKey
    'redirect_url'  => env('REDIRECT_URL'), //h5支付
    'refund_url'    => env('WECHAT_REFUNDURL'),


    /**
     * 开放平台第三方平台配置信息
     */
     'open_platform' => [
         'app_id'  => 'wx3016c4ca968452a5',
         'secret'  => '7187c8f457f35b21242b10465088d637',
         'token'   => env('WECHAT_OPEN_PLATFORM_TOKEN', 'zhipinglianmeng'),
         'redirect_uri' => urlencode("http://www.zhipinlianmeng.com"),
         'state'   => md5('zhipinlianmeng'),
    //     'aes_key' => env('WECHAT_OPEN_PLATFORM_AES_KEY', ''),
     ],

    /**
     * 小程序配置信息
     */
    // 'mini_program' => [
    //     'app_id'  => env('WECHAT_MINI_PROGRAM_APPID', ''),
    //     'secret'  => env('WECHAT_MINI_PROGRAM_SECRET', ''),
    //     'token'   => env('WECHAT_MINI_PROGRAM_TOKEN', ''),
    //     'aes_key' => env('WECHAT_MINI_PROGRAM_AES_KEY', ''),
    // ],

    /**
     * 路由配置
     */
    'route' => [
        'enabled' => true,         // 是否开启路由
        'attributes' => [           // 路由 group 参数
            'prefix' => null,
            'middleware' => null,
            'as' => 'easywechat::',
        ],
        'open_platform_serve_url' => 'open-platform-serve', // 开放平台服务URL
    ],

    /*
     * 日志配置
     *
     * level: 日志级别，可选为：
     *                 debug/info/notice/warning/error/critical/alert/emergency
     * file：日志文件位置(绝对路径!!!)，要求可写权限
     */
    'log' => [
        'level' => env('WECHAT_LOG_LEVEL', 'debug'),
        'file'  => env('WECHAT_LOG_FILE', storage_path('logs/wechat.log')),
    ],

    /*
     * OAuth 配置
     *
     * only_wechat_browser: 只在微信浏览器跳转
     * scopes：公众平台（snsapi_userinfo / snsapi_base），开放平台：snsapi_login
     * callback：OAuth授权完成后的回调页地址(如果使用中间件，则随便填写。。。)
     */
    // 'oauth' => [
    //     'only_wechat_browser' => false,
    //     'scopes'   => array_map('trim', explode(',', env('WECHAT_OAUTH_SCOPES', 'snsapi_userinfo'))),
    //     'callback' => env('WECHAT_OAUTH_CALLBACK', '/examples/oauth_callback.php'),
    // ],

    /*
     * 微信支付
     */
    'payment' => [
        //1493225092   2f16711d978be658011bd09f74b17ace 1489565992  907a55a2baa6211affea8e72f9e612ab
        'merchant_id'        => env('WECHAT_MERCHANT_ID'),
        'key'                => env('WECHAT_KEY'),
        'notifyUrl'          => env('WECHAT_NOTIFYURL'), // XXX: 绝对路径！！！！
        //'key_path'           => env('WECHAT_PAYMENT_KEY_PATH', 'path/to/your/key'),      // XXX: 绝对路径！！！！
        // 'device_info'     => env('WECHAT_PAYMENT_DEVICE_INFO', ''),
        // 'sub_app_id'      => env('WECHAT_PAYMENT_SUB_APP_ID', ''),
        // 'sub_merchant_id' => env('WECHAT_PAYMENT_SUB_MERCHANT_ID', ''),
        // ...
    ],

    /*
     * 开发模式下的免授权模拟授权用户资料
     *
     * 当 enable_mock 为 true 则会启用模拟微信授权，用于开发时使用，开发完成请删除或者改为 false 即可
     */
    'enable_mock' => env('WECHAT_ENABLE_MOCK', false),
    'mock_user' => [
        'openid' => 'odh7zsgI75iT8FRh0fGlSojc9PWM',
        // 以下字段为 scope 为 snsapi_userinfo 时需要
        'nickname' => 'overtrue',
        'sex' => '1',
        'province' => '北京',
        'city' => '北京',
        'country' => '中国',
        'headimgurl' => 'http://wx.qlogo.cn/mmopen/C2rEUskXQiblFYMUl9O0G05Q6pKibg7V1WpHX6CIQaic824apriabJw4r6EWxziaSt5BATrlbx1GVzwW2qjUCqtYpDvIJLjKgP1ug/0',
    ],

    /**
     * 模板消息
     */
    //竞买成功通知
    'auction_order_notice_template_id'  => env('AUCTION_ORDER_NOTICE_TEMPLATE_ID'),
    'auction_order_notice_template_data'    => [
        'first'     =>  '您好，您竞拍的商品竞价结果已揭晓。',
        'keyword1'  =>  '',
        'keyword2'  =>  '',
        'keyword3'  =>  '',
        'remark'    =>  '请点击详情进入拍中列表，提交订单并及时付款。'
    ],
    //待发货通知
    'not_delivery_template_id'  =>  env('NOT_DELIVERY_TEMPLATE_ID'),
    'not_delivery_template_data'    =>  [
        'first'     =>  '您有一个新的待发货的订单',
        'keyword1'  =>  '',
        'keyword2'  =>  '',
        'keyword3'  =>  '',
        'keyword4'  =>  '',
        'remark'    =>  '请点击详情查看，尽快发货吧'
    ],
    //订单发货通知
    'delivered_notice_template_id'  =>  env('DELIVERED_NOTICE_TEMPLATE_ID'),
    'delivered_notice_template_data'    =>  [
        'first'     =>  ['尊敬的藏友，您的宝贝已经寄出，请注意查收', '#c50504'],
        'keyword1'  =>  '',
        'keyword2'  =>  '',
        'keyword3'  =>  '',
        'remark'    =>  '点击详情查看竞买商城完整订单信息'
    ]
];
