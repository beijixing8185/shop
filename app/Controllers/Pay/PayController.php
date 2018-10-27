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

use Yansongda\Pay\Gateways\Alipay\Support;
use Yansongda\Pay\Pay;
use Yansongda\Pay\Log;
use Symfony\Component\HttpFoundation\Request;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\LabelAlignment;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Response\QrCodeResponse;



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
    public function wxPay(Request $request)
    {
        $config = config('wechat');
        $orders = Order::getInfo($request->orderSn);
        $order = [
            'out_trade_no' => $orders->order_sn,
            'total_fee' => '1', // **单位：分**
            'body' => $orders->spu_name,
        ];
        $pay = Pay::wechat($config)->scan($order);//应该是返回二维码地址

        if($pay['return_code']=='SUCCESS'){
            $rand_img = 'pay/'.time().rand(100000,9999999).'.jpg';
            $qr = $this::makeQrcode($pay['code_url'],$rand_img);
            $inviate_url = '/'.$rand_img;
            $data = ['url'=> $inviate_url,'amounts'=>$orders->order_amounts];
            if($qr)
                return ['code'=>0,'msg'=>'微信下单成功','data'=>$data];
        }

    }


    /**
     * 扫码支付的回调请求【做轮询处理，忽略高并发，】
     * @param Request $request
     * @return string
     */
    public function wxPaySuccess(Request $request)//订单号
    {

        $orders = $orderInfo = Order::getInfo($request->orderSn);
        if($orders->plat_order_state ==2){
            return response()->json(['code'=>0,'msg'=>'支付成功','data'=>'']);
        }else{
            return response()->json(['code'=>1,'msg'=>'支付失败','data'=>'']);
        }
    }

    /**
     * @return string|\Symfony\Component\HttpFoundation\Response
     * @throws \Yansongda\Pay\Exceptions\InvalidArgumentException
     * @throws \Yansongda\Pay\Exceptions\InvalidSignException
     * 微信通知
     */
    public function wxNotify()
    {
        $pay = Pay::wechat(config('wechat'));

        try{
            $data = $pay->verify(); // 是的，验签就这么简单！
            $data = $data->all();
            Log::info('微信支付', $data);
            if(!empty($data)){
                if($data['result_code']== 'SUCCESS' && $data['return_code'] == 'SUCCESS'){
                    $order = Order::where('order_sn',$data['out_trade_no'])->first();
                    if($order && $order->plat_order_state == 2){
                        return $pay->success();
                    }
                    if($data['total_fee']/100 != $order->order_amounts){
                        return 'fail';
                    }

                    $order->pay_sn = $data['transaction_id'];
                    $order->payment = json_encode($data);
                    $order->pay_time = strtotime($data['time_end']);
                    $order->plat_order_state = 2;
                    if($order->save()){
                        return $pay->success();
                    }
                }
            }

        } catch (Exception $e) {

        }


        return $pay->success();// laravel 框架中请直接 `return $pay->success()`
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

    /**
     * @param $qrcode_content
     * @param $save_path
     * @param int $size
     * @param null $logopath
     * @param null $font
     * @return mixed
     * 生成二维码
     */

    public static function makeQrcode($qrcode_content,$save_path,$size=300,$logopath = null,$font=null){
        // Create a basic QR code
        $qrCode = new QrCode($qrcode_content);
        $qrCode->setSize($size);

        // Set advanced options
        $qrCode->setWriterByName('png');
        //$qrCode->setMargin(10);
        $qrCode->setEncoding('UTF-8');
        $qrCode->setErrorCorrectionLevel(ErrorCorrectionLevel::HIGH);
        $qrCode->setForegroundColor(['r' => 0, 'g' => 0, 'b' => 0, 'a' => 0]);
        $qrCode->setBackgroundColor(['r' => 255, 'g' => 255, 'b' => 255, 'a' => 0]);
        if($font)  $qrCode->setLabel($font, 16,base_path('public/fonts/YaHei.ttf'), LabelAlignment::CENTER);

        if($logopath){
            $qrCode->setLogoPath($logopath);
            $qrCode->setLogoWidth(30);
        }


        $qrCode->writeFile($save_path);

        $response = new QrCodeResponse($qrCode);

        return $response->isOk();

    }





}