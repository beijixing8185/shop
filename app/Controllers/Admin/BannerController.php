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
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Models\Admin\AdminUser;
use Illuminate\Support\Facades\DB;


class BannerController extends Controller
{

    /**
     * banner列表
     */
    public function bannerList(){
        $banner= Banner::getList();

        return view('admin.banners.bannerList',compact('banner'));
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 添加banner
     */
    public function addBanner(Request $request){

        if ($request->id){
            $banner = Banner::find($request->id);
        }else{
            $banner =  new Banner;
        }

        return view('admin.banners.addBanner',compact('banner'));
    }

    /**
     * @param Request $req
     * @return \Illuminate\Http\RedirectResponse
     * 添加以及修改提交
     */
    public function postAddBanner(Request $request){
        $result = Banner::add($request);
        if($result)
            return redirect('hx/admin/bannerList');
    }

    /**
     * @param Request $request
     * 删除banner
     */
    public function delBanner(Request $request){
        $res = Banner::whereId($request->id)->update(['status'=>0]);
        if($res)
            return response()->json(['code'=>0,'msg'=>'删除成功','data'=>'']);
        else
            return response()->json(['code'=>1,'msg'=>'删除失败','data'=>'']);

    }





















}