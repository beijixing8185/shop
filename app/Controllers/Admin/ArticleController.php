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
use App\Models\ArticleCate;
use Illuminate\Http\Request;
use App\Models\Admin\AdminUser;
use Illuminate\Support\Facades\DB;


class ArticleController extends Controller
{

    /**
     * 文章列表
     */
    public function articleList(){
        $article = Article::getList();
        $where = ' and level = 2';
        $cate =  ArticleCate::getList($where,1);
        $cates = $cate->pluck('cate_name','id')->toArray();

        return view('admin.articles.articleList',compact('article','cates'));
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 添加文章
     */
    public function addArticle(Request $request){
        $where = ' and level = 1';
        $cate =  ArticleCate::getList($where,1);
        $cate_two  = ArticleCate::getList(' and level = 2',1);

        if ($request->id){
            $article = Article::find($request->id);
        }else{
            $article =  new Article;
        }

        return view('admin.articles.articleForm',compact('cate','article','cate_two'));
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

    /**
     * 分类列表
     */
    public function cateArticleList(){
        $where = ' and level = 1';
        $cate =  ArticleCate::getList($where,1);
        return view('admin.articles.cateList',compact('cate'));
    }

    /**
     * 添加分类
     */
    public function addArticleCates(){

        $where = ' and level = 1';
        $cate =  ArticleCate::getList($where,1);

        return view('admin.articles.catesForm',compact('cate'));
    }
    /**
     * 添加分类
     */
    public function postAddArticleCates(Request $request)
    {
        $this->validate($request, ['name' => 'required|string']);

        $params = $request->all();
        $data['name'] = $params['name'];
        $data['description'] = $params['description'];
        $data['pid'] = 0;
        $data['level'] = 1;

        if (isset($params['cate_one']) && !empty($params['cate_one'])) {//此处只添加了2级栏目
            $data['pid'] = $params['cate_one'];
            $data['level'] = 2;
        }
        $res = ArticleCate::addCate($data);
        if ($res) {
            echo '<script>alert("添加成功,可继续添加");window.location.href=""</script>';
            return;
        } else {
            echo '<script>alert("添加失败,不能重复添加");window.location.href=""</script>';
            return;
        }
    }
    /**
     * 修改分类
     */
    public function updateArticleCate(Request $request){
        $this->validate($request,[
            'name'=>'required|string',
            'cate_id'=>'required|integer',
        ]);


        $res = ArticleCate::whereId($request->cate_id)->update(['cate_name'=>$request->name]);
        if($res)
            return response()->json(['code'=>0,'msg'=>'修改成功','data'=>'']);
        else
            return response()->json(['code'=>1,'msg'=>'修改失败','data'=>'']);

    }
    /**
     * 删除分类
     */
    public function delArticlelCate(Request $request){
        $this->validate($request,[
            'cate_id'=>'required|integer',
        ]);

        DB::beginTransaction();
        try{
            ArticleCate::whereId($request->cate_id)->update(['status'=>0]);
            ArticleCate::where('pid',$request->cate_id)->update(['status'=>0]);
            DB::commit();
            return response()->json(['code'=>0,'msg'=>'删除成功','data'=>'']);

        }catch(Exception $e){
            DB::rollBack();
            return response()->json(['code'=>1,'msg'=>'删除失败','data'=>'']);
        }


    }
    /**
     * 获取分类
     */
    public function getArticlesCate(Request $request){
        $this->validate($request,['value'=>'required|integer']);

        $value  = $request->value;

        $where = ' and pid = '.$value;
        $cate = ArticleCate::getList($where,1);
        return response()->json(['code'=>0,'msg'=>'查询成功','data'=>$cate->toArray()]);

    }



















}