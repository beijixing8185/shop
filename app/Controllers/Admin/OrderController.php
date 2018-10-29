<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/18
 * Time: 13:58
 */

namespace App\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Article;
use App\Models\Invoice;
use App\Models\Link;
use App\Models\Order;
use Illuminate\Http\Request;



class OrderController extends Controller
{

    /**
     * 列表
     */
    public function orderList(){

        $order = Order::getList();
        //dd($order);
        return view('admin.orders.orderList',compact('order'));
    }

    /**
     * 发货
     */
    public function sendOrder($id){

    $order = Order::find($id);
    return view('admin.orders.sendOrder',compact('order'));
    }

    /**
     * @param
     * 修改状态
     */
    public function updateOrder(Request $request){
        $res = Order::whereId($request->id)->update(['plat_order_state'=>$request->status]);
        if($res)
            return redirect('/hx/admin/orderList');
    }

    /**
     * @param Request $request
     * @return
     * 发票信息
     */
    public function invoInfo(Request $request){
        $order = Invoice::find($request->id);

        return view('admin.orders.invoOrder',compact('order'));
    }
    /**
     * @param Request $request
     * @return
     * 发票信息
     */
    public function postInvo(Request $request){
        $order = Invoice::whereId($request->id)->update(['express_id'=>$request->express_id,'express_type'=>$request->express_type,'status'=>$request->status]);
        if($order){
            echo '<script>alert("发票信息修改成功");history.back(-1)</script>';
            return;
        }

    }














}