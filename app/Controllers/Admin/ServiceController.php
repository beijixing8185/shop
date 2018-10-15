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
use App\Models\GoodsCate;
use App\Models\GoodsSpu;
use Illuminate\Http\Request;
use App\Models\Admin\AdminUser;


class ServiceController extends Controller
{

    /**
     * 服务列表
     */
    public function serviceList(){
        $goods = GoodsSpu::list();
        return view('admin.goods.serviceList',compact('goods'));
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 添加以及修改
     */
    public function addService(Request $request){
        $where = ' and pid = 0';
        $cate =  GoodsCate::getList($where,1);
        $cate_two  = '';
        $cate_three = '';
        if ($request->id){
            $goods = GoodsSpu::find($request->id);
        }else{
            $goods =  new GoodsSpu;
        }


        //产品状态
        $goods_status = config('constants.goods_status');
        return view('admin.goods.serviceForm',compact('cate','goods','goods_status','cate_two','cate_three'));
    }

    /**
     * @param Request $req
     * @return \Illuminate\Http\RedirectResponse
     * 登录
     */
    public function postAddService(Request $req){
//dd($req->all());


        $result = GoodsSpu::add($req);
        if($result)
            return redirect('hx/admin/serviceList');

    }







}