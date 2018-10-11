<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/10
 * Time: 9:56
 */

namespace app\Controllers\Pay;


use App\Http\Controllers\Controller;

class PayController extends Controller
{

    /**
     * 支付首页
     */
    public function index()
    {
        return view('pay.index');
    }


    /**
     * 支付类型选择
     */
    public function pay()
    {
        return view('pay.pay');
    }
}