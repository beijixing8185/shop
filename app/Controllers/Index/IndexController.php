<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/8
 * Time: 17:30
 */

namespace app\Controllers\Index;


use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleCate;
use App\Models\Banner;
use App\Models\Customer;

class IndexController extends Controller
{

    public function index()
    {
        $banner = Banner::getList(1,1,4); //状态为1的，并且type值为1的。   //banner图

        $customer = Customer::getList('',1);//dd($customer);//客户案例

        $newCategory = ArticleCate::getList(' and pid = 20',1,3);   //关于萤火虫新闻栏目
        foreach ($newCategory as $val){
            $val->child = Article::getList($val['id'],1,'',4)->toArray();
        }
        $newCategory = $newCategory->toArray();

        //站点新闻
        $newSite = ArticleCate::getList(' and pid = 1',1,6);   //关于萤火虫新闻栏目
        foreach ($newSite as $val){
            $val->child = Article::getList($val['id'],1,'',3)->toArray();
        }
        return view('index.index',compact('banner','customer','newCategory','newSite'));
    }

}