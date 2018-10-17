<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/18
 * Time: 13:58
 */

namespace App\Controllers\Admin;

use App\Facades\Api;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\GoodsCate;
use Illuminate\Http\Request;
use App\Models\Admin\AdminUser;
use Illuminate\Support\Facades\DB;


class ArticleController extends Controller
{

    /**
     * 服务列表
     */
    public function articleList(){
        $article = Article::getList();
        $where = ' and level = 2';
        $cate =  GoodsCate::getList($where,1);
        $cates = $cate->pluck('name','id')->toArray();

        return view('admin.articles.articleList',compact('article','cates'));
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 添加服务
     */
    public function addArticle(Request $request){
        $where = ' and level = 2';
        $cate =  GoodsCate::getList($where,1);

        if ($request->id){
            $article = Article::find($request->id);
        }else{
            $article =  new Article;
        }

        return view('admin.articles.articleForm',compact('cate','article'));
    }

    /**
     * @param Request $req
     * @return \Illuminate\Http\RedirectResponse
     * 添加以及修改提交
     */
    public function postArticleForm(Request $req){

        $result = Article::add($req);
        if($result)
            return redirect('hx/admin/articleList');

    }

    /**
     * @param Request $request
     * 删除服务
     */
    public function delArticle(Request $request){
        $res = Article::whereId($request->id)->update(['status'=>0]);
        if($res)
            return response()->json(['code'=>0,'msg'=>'删除成功','data'=>'']);
        else
            return response()->json(['code'=>1,'msg'=>'删除失败','data'=>'']);

    }



















}