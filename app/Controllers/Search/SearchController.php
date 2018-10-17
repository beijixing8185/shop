<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/17
 * Time: 14:39
 */

namespace app\Controllers\Search;


use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Customer;

class SearchController extends Controller
{
    public function index($search=' ')
    {

        if(!empty($search)){
            $customer = Customer::getList('',1,'',$search); //案例搜索
            //产品搜索
        }

        return view('search.index',compact('article','customer','search'));
    }

}