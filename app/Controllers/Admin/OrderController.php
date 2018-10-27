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














}