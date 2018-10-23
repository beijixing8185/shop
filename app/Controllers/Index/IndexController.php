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
use App\Models\GoodsCate;
use App\Models\GoodsSpu;

class IndexController extends Controller
{

    public function index()
    {
        $banner = Banner::getList(1,1,4); //状态为1的，并且type值为1的。   //banner图

        $new_hot = Article::getList('',1,1,5)->toArray();   //banner图下的最新推荐 新闻

        $customer = Customer::getList('',1);//dd($customer);//客户案例

        //关于萤火虫新闻栏目
        $newCategory = ArticleCate::getList(' and pid = 20',1,3);
        foreach ($newCategory as $val){
            $val->child = Article::getList($val['id'],1,'',4)->toArray();
        }
        $newCategory = $newCategory->toArray();


        //站点新闻
        $newSite = ArticleCate::getList(' and pid = 1',1,6);
        foreach ($newSite as $val){
            $val->child = Article::getList($val['id'],1,'',3)->toArray();
        }

        //首页的商品展示模块上【2块】,推荐
        $goods = GoodsCate::getList(' and pid = 0 ',1);
        foreach ($goods as $val){
            $val->child = GoodsSpu::list(' and gc_id_1 = '.$val['id'].' and status = 1 and is_commend = 1',4)->toArray();

        }


        /*$goods_catrgory = GoodsCate::getList(' and level = 2 ',6);//首页的商品展示模块下【2块】，暂时屏蔽
        foreach ($goods_catrgory as $val){
            $val->child = GoodsSpu::list(' and gc_id_2 = '.$val['id'].' and status = 1 ',4)->toArray();
        }*/
        //首页搜索用到
        $search_json = [];
        $search_arr = GoodsSpu::list(' and status = 1 and is_commend = 1',4);
        foreach ($search_arr as $key=>$val){
            $search_json[$key]['searchName'] = $val['gc_name'];
            $search_json[$key]['url'] = '/goods/goodsDetail/'.$val['id'];
        }
        $json = json_encode($search_json);

        return view('index.index',compact('banner','customer','newCategory','newSite','goods','json','new_hot'));
    }

}