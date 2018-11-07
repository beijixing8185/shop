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
use Illuminate\Support\Facades\DB;


class ServiceController extends Controller
{

    /**
     * 服务列表
     */
    public function serviceList(Request $request){
        $param = $request ->all();
        $gid = '';//栏目
        $status = '';//状态
        $name = ''; //关键词
        $is_commend = '';//是否推荐
        $is_hot = '';   //是否热销
        $where = '';
        $cate_name = '';//栏目名称
        if(isset($param['gid'])){
            $cate_name = GoodsCate::getNames($param['gid']);
            $gid = $param['gid'];
            $where .= ' and gc_id_2 = '.$gid;
        }
        if(isset($param['status'])){
            $status = $param['status'];
            $where .= ' and status = '.$status;
        }
        if(isset($param['is_commend'])){
            $is_commend = $param['is_commend'];
            $where .= ' and is_commend = '.$is_commend;
        }
        if(isset($param['is_hot'])){
            $is_hot = $param['is_hot'];
            $where .= ' and is_hot = '.$is_hot;
        }
        if(isset($param['name'])){
            $name = trim($param['name']);
            $where .= ' and spu_name like  "%'.$name.'%"';
        }

        $goods = GoodsSpu::getlist($where);

        $goodsCate = GoodsCate::getList(' and level = 2','1');
        return view('admin.goods.serviceList',compact('goods','goodsCate','gid','status','name','is_commend','is_hot','cate_name'));
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 添加以及修改
     */
    public function addService(Request $request){
        $where = ' and pid = 0';
        $cate =  GoodsCate::getList($where,1);
        $cate_two  = GoodsCate::getList(' and level = 2',1);

        if ($request->id){
            $goods = GoodsSpu::find($request->id);
        }else{
            $goods =  new GoodsSpu;
        }


        //产品状态
        $goods_status = config('constants.goods_status');
        return view('admin.goods.serviceForm',compact('cate','goods','goods_status','cate_two'));
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
     * @param Request $request
     * 删除服务
     */
    public function delService(Request $request){

        $res = GoodsSpu::whereId($request->id)->update(['status'=>-1]);
        if($res)
            return response()->json(['code'=>0,'msg'=>'删除成功','data'=>'']);
        else
            return response()->json(['code'=>1,'msg'=>'删除失败','data'=>'']);

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
        //dd($goods);
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
            return redirect('hx/admin/specList');

    }

    /**
     * 规格列表
     */
    public function specList(){
        $goods = GoodsSKu::list();
        return view('admin.goods.specList',compact('goods'));
    }
    /**
     * 删除规格
     */
    public function delSpec(Request $request){
        $res = GoodsCate::whereId($request->id)->update(['status'=>0]);
        if($res)
            return response()->json(['code'=>0,'msg'=>'删除成功','data'=>'']);
        else
            return response()->json(['code'=>1,'msg'=>'删除失败','data'=>'']);
    }



    /**
     * 分类列表
     */
    public function cateList(){
        $where = ' and level = 1';
        $cate =  GoodsCate::getList($where,1);
        return view('admin.goods.cateList',compact('cate'));
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
    public function postAddCates(Request $request)
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
        $res = GoodsCate::addCate($data);
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
    public function updateCate(Request $request){
        $this->validate($request,[
            'name'=>'required|string',
            'cate_id'=>'required|integer',
        ]);


        $res = GoodsCate::whereId($request->cate_id)->update(['name'=>$request->name]);
        if($res)
            return response()->json(['code'=>0,'msg'=>'修改成功','data'=>'']);
        else
            return response()->json(['code'=>1,'msg'=>'修改失败','data'=>'']);

    }
    /**
     * 删除分类
     */
    public function delCate(Request $request){
        $this->validate($request,[
            'cate_id'=>'required|integer',
        ]);

        DB::beginTransaction();
        try{
            GoodsCate::whereId($request->cate_id)->update(['status'=>0]);
            GoodsCate::where('pid',$request->cate_id)->update(['status'=>0]);
        DB::commit();
            return response()->json(['code'=>0,'msg'=>'删除成功','data'=>'']);

        }catch(Exception $e){
            DB::rollBack();
            return response()->json(['code'=>1,'msg'=>'删除失败','data'=>'']);
        }


    }








}