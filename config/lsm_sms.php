<?php

return [
    //'api_key' => '8d99e9d6cbb8786cbaea2ab0cc8810fa', //yiyuanda
    'api_key' => '7e2981c9ffbdcad36f58777809cac99d',  //bisto
    'use_ssl' => true,
    'ssl_api_url' => [
        'send' => 'https://sms-api.luosimao.com/v1/send.json',
        'send_batch' => 'https://sms-api.luosimao.com/v1/send_batch.json',
        'status' => 'https://sms-api.luosimao.com/v1/status.json',
    ],
    'api_url' => [
        'send' => 'http://sms-api.luosimao.com/v1/send.json',
        'send_batch' => 'http://sms-api.luosimao.com/v1/send_batch.json',
        'status' => 'http://sms-api.luosimao.com/v1/status.json',
    ],
    'timeout' => 10,
    'header' => [
        'm86' => '欢迎您! 积分兑换商品成功。兑换码是: ',
    ],
    'middle' => [
        'm86' => '验证码是: ',
    ],
    'footer' => [
        'm86' => '【中商优选】',
    ],
    'login_msg' => '您正在登录中商优选平台，验证码是: ###（验证码告知他人将导致账号不安全，请勿泄露），有效期为###分钟。【中商优选】',
    'wait_send_goods_msg' => '（待发货提醒) 尊敬的店主，您好，用户###，已支付 ### 订单，订单金额为###元。请您尽快安排发货哦，祝生意兴隆~~~ 【中商优选】',
];
