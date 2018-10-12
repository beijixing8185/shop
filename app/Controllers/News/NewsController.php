<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/9
 * Time: 17:29
 */

namespace app\Controllers\News;


use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * 新闻栏目首页
     */
    public function index()
    {
        return view('news.index');
    }


    /**
     * 资讯栏目列表页
     */
    public function newsList()
    {
        return view('news.newsList');
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
    public function detail()
    {
        return view('news.newsDetail');
    }
}