<?php
/**
 * Created by PhpStorm.
 * User: 刘笑奇
 * Date: 2018/10/14
 * Time: 17:56
 */

namespace app\Controllers\Customer;


use App\Http\Controllers\Controller;
use App\Models\Customer;
use app\Models\GoodsSpu;

class CustomerController extends Controller{

    /**
     * 案例详情
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function detail($id)
    {
        $getdetail = Customer::getFind($id);    //  文章详情
        $getCustomerList = Customer::getList('',1,5);//dd($getCustomerList);//客户案例列表
        $commend = GoodsSpu::list(' and is_commend = 1 and status = 1',5);  //推荐商品 is_commend

        return view('customer.detail',compact('getdetail','getCustomerList','commend'));
    }
}