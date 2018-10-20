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
use App\Models\Customer;
use App\Models\GoodsSpu;
use Illuminate\Http\Request;
use App\Models\Admin\AdminUser;
use Illuminate\Support\Facades\DB;


class CaseController extends Controller
{

    /**
     * 案例列表
     */
    public function caseList(){

        $cates = '';
        $spu_name =  GoodsSpu::select(['id','spu_name'])->where('status',1)->get();

        if($spu_name->isNotEmpty()){
            $cates = $spu_name->pluck('spu_name','id')->toArray();
        }

        $case_type = config('constants.case_type');
        $case = Customer::getCaseList();

        return view('admin.goods.caseList',compact('case','cates','case_type'));
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 添加案例
     */
    public function addCase(Request $request){
        $spu_name =  GoodsSpu::select(['id','spu_name'])->where('status',1)->get();
        if($spu_name->isEmpty()){
            echo '<script>alert("请先添加服务");window.location.href="/hx/admin/addService"</script>';
            return;
        }
        $cates = $spu_name->pluck('spu_name','id')->toArray();

        if ($request->id){
            $case = Customer::find($request->id);
        }else{
            $case =  new Article;
        }
        $case_type = config('constants.case_type');
        return view('admin.goods.caseForm',compact('cates','case','case_type'));
    }

    /**
     * @param Request $req
     * @return \Illuminate\Http\RedirectResponse
     * 添加以及修改提交
     */
    public function postAddCase(Request $request){

        $result = Customer::add($request);
        if($result)
            return redirect('hx/admin/caseList');

    }

    /**
     * @param Request $request
     * 删除案例
     */
    public function delCase(Request $request){
        $res = Customer::whereId($request->id)->update(['status'=>0]);
        if($res)
            return response()->json(['code'=>0,'msg'=>'删除成功','data'=>'']);
        else
            return response()->json(['code'=>1,'msg'=>'删除失败','data'=>'']);

    }






















}