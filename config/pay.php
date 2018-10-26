<?php

return [
    //应用ID,您的APPID。
    'app_id' => "2018102461806418",

    //商户私钥 不能用pkcs8.pem中的密钥！！！！！
    'merchant_private_key' => "MIIEpAIBAAKCAQEA5ArbI3ZTKdSchr7gM9fkJqncLUu4ySwGTwpd0OvureOdxR1BuzwRiFZMyWDVLQRUNFZQC5KQnryCDo8MhsLa7r4jaLEyK4Qi2DmBFgoRaFsRL6Xp8Iyjd6X16n5i3JHH5z1I6m5bB/rgEGlsH0V3OrTv8kvYGCXiH8IKdYlUHf8v0tQnvuAwS7xLrnSkf2uCRwnb9Y0Ggv3eeD8plUsF6v7xSbnBKyE3CE5+fjCRzPjhrhT8PDao4Wnp2t9dsP0DFJZ+fhXniGhJBPWN6hxtVfg8/GI/y+KoE82PHtdvzRQ5q1qJYDCPf01eF5ZNbOyGM0Fe71tVtS+5A8+n81OJ0wIDAQABAoIBAH1DFVJqaY4dsok1ifQQT8uJHF9pK6ydWS3LlPLw1h+AWyZuRq/xc/P+65jmbtKWgSZqjvd8X6JCC/KxUwEnQZlIqiyUwOk0YOuC0sxnZV58P3l72n/+0MAlUmqnV+iuzy7O9CGJ0skUXkXFktWuk6qUvwTJ8n55OLeXH6WmdKUwgN69/O3Fmu/Gbo4UwNWq+wijzDWHTHI8XT7NXFMeKBVTB4hT1LYXxUXybKWZMVQ2JSZbi0ZLyKezbUhOF/nE/5WB6m7/3UmSaKMVnKQzg3GXHp9mfVYUVtIFJ/b6IIjTwpQ4E9fibzmMTNqni2X914qrw2Ayc3wKw9d23Uw9dRECgYEA+dAv5ElDJemfnpzercs029L5vre9IbY7QYK3YM6D1F7/2UODllBCjM0Yne7XGJN2xJOLiY6XXuOa8w9Z88diZMIYlmUyyNc6Ng2n18wncC5LvgFTdKaiiDbsiqgcHlFWzyUMJksPZi5PB5gwuvcTB9ZIJjwS9ry5B5RaPVj1icsCgYEA6bCkZNPQKnPaI+qVzs54QRAi0z0lqdYQKmbfjRhQHP3j79B7qntuvp1DabON593atf5Dt5Leev/HF4mRdVHtU9sq6TUJ6sppvlv6AZG/08fYTNefEAHjZMpIdzt1Uz18RDr6gjr3gnpkTdfv1G2bGjCMCLwdva69KsCvpT/MnxkCgYEAol3yAsqrXiTunkUPZp5BCO+ja5Y404SCFx5C2iTgAlSMrkX3bOdVmfZkHaJzI4IVG8daVlnbgM0mlPxRVuUsyphtKrMzwt5A84kEonoK2Br/F8v81kDIOwiXzbdeL0ZmydQmhW0b4SoQK7t7UMnuEJXx5wf8u2oGSSrfTChZzukCgYEAhge+AeZKOk8ACiF9koNxDUAH+UfU1jfkRa2DAhWzvS0REnZstzbcKY9hHrrQ5O+lhUQz6pHd8IXK1oEcYEGA8Nt/HQpCidtWEswF8+h4MSspr8jrfe7XUPOD5H7Bp+BX6Xo6O38+fiNcbBkxgJDsqHS3nDrog+Y4sNCa7RhOb+ECgYA51tcd7sYGbMdzF8lPsdUmDi+eZM3ro1ECNKRHW3/Ks5I//Po46VBW+hH0fs+bKUw6wzCpH3wqljSmdbS/6PuZhiMUL4f0A70PALfMOizm7g3UVSMItBP5huj2c/lfmPpJ0OvalgFnJijWwBX9oTjjlUBzGaodv2pT+Iy4EhiHeA==",

    //异步通知地址
    'notify_url' => "http://t13.w.yininet.cn/pay/notify",

    //同步跳转
    'return_url' => "http://t13.w.yininet.cn/index/index",

    //编码格式
    'charset' => "UTF-8",

    //签名方式
    'sign_type' => "RSA2",

    //支付宝网关
    'gatewayUrl' => "https://openapi.alipay.com/gateway.do",

    //支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
    'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA5ArbI3ZTKdSchr7gM9fkJqncLUu4ySwGTwpd0OvureOdxR1BuzwRiFZMyWDVLQRUNFZQC5KQnryCDo8MhsLa7r4jaLEyK4Qi2DmBFgoRaFsRL6Xp8Iyjd6X16n5i3JHH5z1I6m5bB/rgEGlsH0V3OrTv8kvYGCXiH8IKdYlUHf8v0tQnvuAwS7xLrnSkf2uCRwnb9Y0Ggv3eeD8plUsF6v7xSbnBKyE3CE5+fjCRzPjhrhT8PDao4Wnp2t9dsP0DFJZ+fhXniGhJBPWN6hxtVfg8/GI/y+KoE82PHtdvzRQ5q1qJYDCPf01eF5ZNbOyGM0Fe71tVtS+5A8+n81OJ0wIDAQAB",

    //支付时提交方式 true 为表单提交方式成功后跳转到return_url,
    //false 时为Curl方式 返回支付宝支付页面址址 自己跳转上去 支付成功不会跳转到return_url上， 我也不知道为什么，有人发现可以跳转请告诉 我一下 谢谢
    // email: 40281612@qq.com
    'trade_pay_type' => true,
];
