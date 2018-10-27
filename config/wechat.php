<?php

return [
    'appid' => '', // APP APPID
    'app_id' => env('WECHAT_APPID'), // 公众号 APPID
    'miniapp_id' => '', // 小程序 APPID
    'mch_id' => env('WECHAT_MCHID'),
    'key' => 'kWEfjw4e54waSdfQWRrg4s68tweqrth4',
    'notify_url' => env('ALI_WX_URL').'/pay/wx/notify',
    // 客户端证书路径，退款时需要用到。请填写绝对路径，linux 请确保权限问题。pem 格式。
    'cert_client' => config_path('pay/wx/apiclient_cert.pem'),

    // 客户端秘钥路径，退款时需要用到。请填写绝对路径，linux 请确保权限问题。pem 格式。
    'cert_key' => config_path('pay/wx/apiclient_key.pem'),

    'log' => [ // optional
        'file' => storage_path('logs/wechat.log'),
        'level' => 'info', // 建议生产环境等级调整为 info，开发环境为 debug
        'type' => 'single', // optional, 可选 daily.
        'max_file' => 30, // optional, 当 type 为 daily 时有效，默认 30 天
    ],
    'http' => [ // optional
        'timeout' => 30.0,
        'connect_timeout' => 30.0,
        // 更多配置项请参考 [Guzzle](https://guzzle-cn.readthedocs.io/zh_CN/latest/request-options.html)
    ],
    //'mode' => 'dev', // optional, dev/hk;当为 `hk` 时，为香港 gateway。



];
