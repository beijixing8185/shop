<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/25
 * Time: 13:48
 */

namespace App\Services;
header("Content-type: text/html; charset=utf-8");


use App\Models\Order;
use Yansongda\Pay\Pay;


class AliWxPay
{
    /**
     * 支付宝支付
     */
    public function index($order_sn){

        $orderInfo = Order::getInfo($order_sn);
        $order = [
            'out_trade_no' => $orderInfo->order_sn,
            'total_amount' => '0.01',
            'subject' => $orderInfo->spu_name,
        ];
        $config = config('alipay');

        $alipay = Pay::alipay($config)->web($order);

        return $alipay;// laravel 框架中请直接 `return $alipay`
    }

    /**
     * 支付
     * @param Request $request
     * @return mixed
     */
    public function goPay($request)
    {
        $orderInfo = Order::find(20);
        //商户订单号，商户网站订单系统中唯一订单号，必填
        $out_trade_no =  $orderInfo->order_sn;
        //订单名称，必填
        $subject = $orderInfo->spu_name;
        //付款金额，必填
        $total_amount = 0.01;
        //商品描述，可空
        $body = '测试';
        $config = config('alipay-web');
        //$a = new AlipaySdk($config)
        $customData = json_encode(['id' => $orderInfo->id]);//自定义参数
        $response = Alipay::tradePagePay($subject, $body, $out_trade_no, $total_amount, $customData);
        //输出表单
        //return $response['redirect_url'];
        return redirect($response['redirect_url']);
    }

}