<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/18
 * Time: 13:58
 */

namespace App\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Article;
use App\Models\Link;
use Illuminate\Http\Request;



class AboutController extends Controller
{

    /**
     * 关于列表
     */
    public function aboutList(){

        $case = About::getAboutList();
        return view('admin.abouts.aboutsList',compact('case'));
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 关于案例
     */
    public function addAbout(Request $request){
        $category_type = config('constants.category_type');

        if ($request->id){
            $case = About::find($request->id);
        }else{
            $case =  new Article;
        }
        return view('admin.abouts.aboutsForm',compact('case','category_type'));
    }

    /**
     * @param Request $req
     * @return \Illuminate\Http\RedirectResponse
     * 添加以及修改提交
     */
    public function postAddAbout(Request $request){

        $result = About::add($request);
        if($result)
            return redirect('hx/admin/aboutList');

    }

    /**
     * @param Request $request
     * 删除关于
     */
    public function delAbout(Request $request){
        $res = About::whereId($request->id)->update(['status'=>0]);
        if($res)
            return response()->json(['code'=>0,'msg'=>'删除成功','data'=>'']);
        else
            return response()->json(['code'=>1,'msg'=>'删除失败','data'=>'']);

    }
    /**
     * 链接列表
     */
    public function linkList(){
        $link = Link::getList();
        return view('admin.links.links',compact('link'));
    }
    /**
     * 链接列表
     */
    public function addLink(Request $request){
        if ($request->id){
            $link = Link::find($request->id);
        }else{
            $link =  new Link;
        }
        return view('admin.links.linksForm',compact('link'));
    }
    public function postAddLink(Request $request){

        $result = Link::add($request);
        if($result)
            return redirect('hx/admin/linkList');
    }























}