<?php

return [
    'app_id' => '2018102461806418',
    'notify_url' => 'http://t13.w.yininet.cn/pay/notify',
    'return_url' => 'http://t13.w.yininet.cn/index/index',
    'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA5ArbI3ZTKdSchr7gM9fkJqncLUu4ySwGTwpd0OvureOdxR1BuzwRiFZMyWDVLQRUNFZQC5KQnryCDo8MhsLa7r4jaLEyK4Qi2DmBFgoRaFsRL6Xp8Iyjd6X16n5i3JHH5z1I6m5bB/rgEGlsH0V3OrTv8kvYGCXiH8IKdYlUHf8v0tQnvuAwS7xLrnSkf2uCRwnb9Y0Ggv3eeD8plUsF6v7xSbnBKyE3CE5+fjCRzPjhrhT8PDao4Wnp2t9dsP0DFJZ+fhXniGhJBPWN6hxtVfg8/GI/y+KoE82PHtdvzRQ5q1qJYDCPf01eF5ZNbOyGM0Fe71tVtS+5A8+n81OJ0wIDAQAB',
    // 加密方式： **RSA2**
    'private_key' =>'MIIEpAIBAAKCAQEA5ArbI3ZTKdSchr7gM9fkJqncLUu4ySwGTwpd0OvureOdxR1BuzwRiFZMyWDVLQRUNFZQC5KQnryCDo8MhsLa7r4jaLEyK4Qi2DmBFgoRaFsRL6Xp8Iyjd6X16n5i3JHH5z1I6m5bB/rgEGlsH0V3OrTv8kvYGCXiH8IKdYlUHf8v0tQnvuAwS7xLrnSkf2uCRwnb9Y0Ggv3eeD8plUsF6v7xSbnBKyE3CE5+fjCRzPjhrhT8PDao4Wnp2t9dsP0DFJZ+fhXniGhJBPWN6hxtVfg8/GI/y+KoE82PHtdvzRQ5q1qJYDCPf01eF5ZNbOyGM0Fe71tVtS+5A8+n81OJ0wIDAQABAoIBAH1DFVJqaY4dsok1ifQQT8uJHF9pK6ydWS3LlPLw1h+AWyZuRq/xc/P+65jmbtKWgSZqjvd8X6JCC/KxUwEnQZlIqiyUwOk0YOuC0sxnZV58P3l72n/+0MAlUmqnV+iuzy7O9CGJ0skUXkXFktWuk6qUvwTJ8n55OLeXH6WmdKUwgN69/O3Fmu/Gbo4UwNWq+wijzDWHTHI8XT7NXFMeKBVTB4hT1LYXxUXybKWZMVQ2JSZbi0ZLyKezbUhOF/nE/5WB6m7/3UmSaKMVnKQzg3GXHp9mfVYUVtIFJ/b6IIjTwpQ4E9fibzmMTNqni2X914qrw2Ayc3wKw9d23Uw9dRECgYEA+dAv5ElDJemfnpzercs029L5vre9IbY7QYK3YM6D1F7/2UODllBCjM0Yne7XGJN2xJOLiY6XXuOa8w9Z88diZMIYlmUyyNc6Ng2n18wncC5LvgFTdKaiiDbsiqgcHlFWzyUMJksPZi5PB5gwuvcTB9ZIJjwS9ry5B5RaPVj1icsCgYEA6bCkZNPQKnPaI+qVzs54QRAi0z0lqdYQKmbfjRhQHP3j79B7qntuvp1DabON593atf5Dt5Leev/HF4mRdVHtU9sq6TUJ6sppvlv6AZG/08fYTNefEAHjZMpIdzt1Uz18RDr6gjr3gnpkTdfv1G2bGjCMCLwdva69KsCvpT/MnxkCgYEAol3yAsqrXiTunkUPZp5BCO+ja5Y404SCFx5C2iTgAlSMrkX3bOdVmfZkHaJzI4IVG8daVlnbgM0mlPxRVuUsyphtKrMzwt5A84kEonoK2Br/F8v81kDIOwiXzbdeL0ZmydQmhW0b4SoQK7t7UMnuEJXx5wf8u2oGSSrfTChZzukCgYEAhge+AeZKOk8ACiF9koNxDUAH+UfU1jfkRa2DAhWzvS0REnZstzbcKY9hHrrQ5O+lhUQz6pHd8IXK1oEcYEGA8Nt/HQpCidtWEswF8+h4MSspr8jrfe7XUPOD5H7Bp+BX6Xo6O38+fiNcbBkxgJDsqHS3nDrog+Y4sNCa7RhOb+ECgYA51tcd7sYGbMdzF8lPsdUmDi+eZM3ro1ECNKRHW3/Ks5I//Po46VBW+hH0fs+bKUw6wzCpH3wqljSmdbS/6PuZhiMUL4f0A70PALfMOizm7g3UVSMItBP5huj2c/lfmPpJ0OvalgFnJijWwBX9oTjjlUBzGaodv2pT+Iy4EhiHeA==',
    'log' => [ // optional
        'file' => storage_path('logs/alipay.log'),
        'level' => 'info', // 建议生产环境等级调整为 info，开发环境为 debug
        'type' => 'single', // optional, 可选 daily.
        'max_file' => 30, // optional, 当 type 为 daily 时有效，默认 30 天
    ],
    'http' => [ // optional
        'timeout' => 5.0,
        'connect_timeout' => 5.0,
        // 更多配置项请参考 [Guzzle](https://guzzle-cn.readthedocs.io/zh_CN/latest/request-options.html)
    ],
    //'mode' => 'dev', // optional,设置此参数，将进入沙箱模式


];
