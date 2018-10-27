<?php

return [



    'app_id' => env('WECHAT_APPID'),         //  测试 AppID

    // 小程序APPID
    'miniapp_id' => '',

    // APP 引用的 appid
    'appid' => env('WECHAT_APPID'),

    // 微信支付分配的微信商户号
    'mch_id' => env('WECHAT_MCHID'),

    // 微信支付异步通知地址
    'notify_url' => env('WECHAT_NOTIFY'),

    // 微信支付签名秘钥
    'key' => 'kWEfjw4e54waSdfQWRrg4s68tweqrth4',

    // 客户端证书路径，退款时需要用到。请填写绝对路径，linux 请确保权限问题。pem 格式。
    'cert_client' => config_path('pay/wx/apiclient_cert.pem'),

    // 客户端秘钥路径，退款时需要用到。请填写绝对路径，linux 请确保权限问题。pem 格式。
    'cert_key' => config_path('pay/wx/apiclient_key.pem'),

    'log' => [ // optional
        'file' => '/storage/logs/wechat.log',
        'level' => 'debug', // 建议生产环境等级调整为 info，开发环境为 debug
        'type' => 'single', // optional, 可选 daily.
        'max_file' => 30, // optional, 当 type 为 daily 时有效，默认 30 天
    ],
];
