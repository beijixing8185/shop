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
use App\Models\GoodsSku;
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
     * 添加服务
     */
    public function postAddService(Request $req){

        $result = GoodsSpu::add($req);
        if($result)
            return redirect('hx/admin/serviceList');

    }
    /**
     * @param Request $req
     * @return \Illuminate\Http\RedirectResponse
     * 添加规格
     */
    public function serviceSpecForm(Request $request){

        $goodsSpu = GoodsSpu::where('status',1)->get();
        if(!$goodsSpu){
            echo '<script>alert("必须先添加服务,才能添加规格");window.location.href=""</script>';
            return;
        }
        if ($request->id){
            $goods = GoodsSKu::find($request->id);
        }else{
            $goods =  new GoodsSku;
        }
        return view('admin.goods.serviceSpec',compact('goods','goodsSpu'));

    }
    /**
     * @param Request $req
     * @return \Illuminate\Http\RedirectResponse
     * 提交规格
     */
    public function postServiceSpecForm(Request $request){
        $spu_name = GoodsSpu::whereId($request->spu_id)->value('spu_name');
        $request->offsetSet('spu_name',$spu_name);
        $result = GoodsSku::add($request);
        if($result)
            return redirect('hx/admin/serviceList');

    }

    /**
     * 规格列表
     */
    public function specList(){
        $goods = GoodsSKu::list();
        return view('admin.goods.specList',compact('goods'));
    }



    /**
     * 分类列表
     */
    public function cateList(){

        return view('admin.goods.cateList');
    }

    /**
     * 添加分类
     */
    public function addCates(){
        $where = ' and level = 1';
        $cate =  GoodsCate::getList($where,1);
        return view('admin.goods.catesForm',compact('cate'));
    }
    /**
     * 添加分类
     */
    public function postAddCates(Request $request){
        $this->validate($request,['name'=>'required|string']);

        $params = $request->all();
        $data['name'] = $params['name'];
        $data['pid'] = 0;
        $data['level'] = 1;

        if (isset($params['cate_two']) && !empty($params['cate_two'])){//此处只添加了3级栏目
            $data['pid'] = $params['cate_two'];
            $data['level'] = 3;
        }else if($params['cate_one']){//此处只添加了2级栏目
            $data['pid'] = $params['cate_one'];
            $data['level'] = 2;
        }
        $res = GoodsCate::addCate($data);
        if($res){
            echo '<script>alert("添加成功,可继续添加");window.location.href=""</script>';
            return;
        }else{
            echo '<script>alert("添加失败,不能重复添加");window.location.href=""</script>';
            return;
        }

    }







}