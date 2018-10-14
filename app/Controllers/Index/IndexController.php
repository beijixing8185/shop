<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/8
 * Time: 17:30
 */

namespace app\Controllers\Index;


use App\Controllers\Common\BaseController;
use App\Models\Banner;
use App\Models\Customer;

class IndexController extends BaseController
{

    public function index()
    {

        $banner = Banner::getList(1,1,4); //状态为1的，并且type值为1的。   //banner图

        $category = $this ->getTree();   //栏目,需要加商品加入此数组，然后遍历到前台

        $customer = Customer::getList('',1,5);//dd($customer);//客户案例
        $links = $this ->link;  //外链
        return view('index.index',compact('banner','category','customer','links'));
    }

}