<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/10
 * Time: 9:56
 */

namespace app\Controllers\Pay;
header("Content-type: text/html; charset=utf-8");

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Services\AliWxPay;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Yansongda\Pay\Gateways\Alipay\Support;
use Yansongda\Pay\Pay;
use Symfony\Component\HttpFoundation\Request;



class PayController extends Controller
{

    /**
     * 支付首页，暂时不用
     */
    public function index()
    {
        ///dd($request->all());
        /*$pay = new AliWxPay();
        $result = $pay->index();
        return $result;*/
    }

    //微信支付
    public function wxPay($order_sn)
    {
        //$param = $request -> all();
        $orders = Order::getInfo($order_sn);
        $order = [
            'out_trade_no' => time(),
            'total_fee' => '1', // **单位：分**
            'body' => 'test body - 测试',
            'openid' => 'onkVf1FjWS5SBIixxxxxxx',
        ];
        $pay = Pay::wechat(config('wechat'))->mp($order);//应该是返回二维码地址
        dd($pay);
        $url = '';
        return ['code'=>0,'url'=>$url];
    }


    /**
     * 扫码支付的回调请求【做轮询处理，忽略高并发，】
     * @param Request $request
     * @return string
     */
    public function wxPaySuccess($order_sn)//订单号
    {
        $pay = Pay::wechat(config('wechat'));
        try{
            $data = $pay->verify(); // 是的，验签就这么简单！

            Log::debug('Wechat notify', $data->all());
        } catch (\Exception $e) {
            // $e->getMessage();
        }

        return $pay->success()->send();// laravel 框架中请直接 `return $pay->success()`
    }

    //支付宝支付
    public function aliPay($order_sn)
    {
        $pay = new AliWxPay();
        $result = $pay->index($order_sn);
        return $result;
    }

    public function notify()
    {
        $config = config('alipay');
        $alipay = Pay::alipay($config);


        $request = Request::createFromGlobals();

        $data = $request->request->count() > 0 ? $request->request->all() : $request->query->all();
        $data = Support::encoding($data, 'utf-8', $data['charset'] ?? 'gb2312');
        Log::info('支付宝返回数据'.json_encode($data));

        try{
            if($data['trade_status'] == 'TRADE_SUCCESS'){
                $order = Order::where('order_sn',$data['out_trade_no'])->first();
                if($order && $order->plat_order_state == 2){
                    return $alipay->success();
                }
                if($data['buyer_pay_amount'] != $order->order_amounts){
                    return 'fail';
                }

                $order->pay_sn = $data['trade_no'];
                $order->payment = json_encode($data);
                $order->pay_time = strtotime($data['gmt_payment']);
                $order->plat_order_state = 2;
                if($order->save()){
                    return $alipay->success();
                }
            }

        } catch (Exception $e) {
            Log::info('Alipay notify错误', $e->getMessage());
            return 'fail';
        }

        return $alipay->success();
    }



}