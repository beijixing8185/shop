<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/9
 * Time: 17:29
 */

namespace app\Controllers\News;


use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleCate;
use App\Models\Banner;
use App\Models\GoodsCate;
use App\Models\GoodsSpu;

class NewsController extends Controller
{
    /**
     * 新闻栏目首页
     */
    public function index($statusId='')
    {
        //栏目列表
        $where = ' and pid = 1';
        $column = ArticleCate::getList($where,1);
        $news = Article::getList($statusId,1);
        foreach($news as &$val){
            $val['tags'] = explode('，',$val['tag']);
        }
       //推荐hot
        $hot = Banner::getList(1,2,4);
        return view('news.index',compact('column','statusId','news','hot'));
    }


    /**
     * 商品列表页
     */
    public function newsList()
    {
        //全部二级栏目商品
        $goodsCategory = GoodsCate::getList(' and level = 2 ',1);
        foreach ($goodsCategory as $val){
            $val->child = GoodsSpu::list(' and gc_id_2 = '.$val['id'].' and status = 1 ')->toArray();
        }

        //新闻banner图
        $banner = Banner::getList(1,2,1);
        //dd($goodsCategory);
        return view('news.newsList',compact('goodsCategory','banner'));
    }

    /**
     * 新闻栏目列表页
     */
    public function news()
    {

    }


    /**
     * 新闻详情
     */
    public function detail($id)
    {
        //新闻详情
        $getdetail = Article::getFind($id)->toArray();
        $getdetail['tags'] = explode('，',$getdetail['tag']);
        //获取推荐hot
        $hot = Article::getList($pid='',1,1,5);
        //获取标签模糊查询link
        $tag = Article::getList($pid='',1,$hots='',8,$getdetail['tag']);
        //dd($tag);
        //栏目下的其他文章
        $news = Article::getList($getdetail['article_cate_id'],1,'',5);
        //dd($news);

        $goods = GoodsSpu::list(' and status = 1 and is_commend = 1',5);    //可能需要的服务
        return view('news.newsDetail',compact('getdetail','hot','tag','news','goods'));
    }
}