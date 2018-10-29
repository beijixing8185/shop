<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/17
 * Time: 14:39
 */

namespace app\Controllers\Search;


use App\Http\Controllers\Controller;
use App\Models\Customer;
use app\Models\GoodsSpu;

class SearchController extends Controller
{
    public function index($search=' ')
    {
        $customer ='';  //案例搜索
        $article ='';   //产品搜索
        if(!empty($search)){
            $customer = Customer::getList('',1,'',$search); //案例搜索
            $article = GoodsSpu::list(' and status = 1 and spu_name like  "%'.$search.'%"');//产品搜索
        }
        dd($article);
        return view('search.index',compact('article','customer','search'));
    }

}