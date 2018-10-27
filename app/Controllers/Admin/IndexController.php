<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/18
 * Time: 13:58
 */

namespace App\Controllers\Admin;

use App\Models\Order;
use App\Http\Controllers\Common\ExpressController;
use App\Http\Controllers\Controller;



class IndexController extends Controller
{


    public function index(){

        $wait_count = Order::where('plat_order_state',2)->count();
        $count = Order::count();

        return view('admin.index',compact('wait_count','count'));
    }




}