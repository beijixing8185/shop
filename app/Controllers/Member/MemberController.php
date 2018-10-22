<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/9
 * Time: 16:13
 */

namespace app\Controllers\Member;


use App\Http\Controllers\Controller;
use App\Models\GoodsSku;
use App\Models\GoodsSpu;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;


class MemberController extends Controller
{
    public $member_id;

    public function __construct()
    {
        $this ->member_id = 1;//session('user_id');
    }

    public function index()
    {

    }


    /**
     * 会员信息
     */
    public function getMember()
    {
        $getMember = '';
        /*if(!empty(session('user_id'))){
            $getMember = User::getMember($this ->member_id);
        }*/
        $getMember = User::getMember($this ->member_id);
       // dd($getMember);
        return view('member.index',compact('getMember'));
    }


    /**
     * 密码修改
     */
    public function memberPwd()
    {
        return view('member.member_pwd');
    }
    /**
     * 生成预订单
     */
    public function showOrder(Request $request){
        $this->validate($request,[
            'spuId'=>'required|integer',
            'skuId'=>'required|integer',
        ]);

        $goods = GoodsSku::leftJoin('goods_spus','goods_skus.spu_id','goods_spus.id')
            ->select('goods_spus.id as gid','goods_skus.id as gkid','spu_name','gc_name','main_image','goods_skus.price')
            ->where('goods_skus.id',$request->skuId)
            ->first();

        return view('pay.index',compact('goods'));
    }

    /**
     * 生成总订单编号
     *
     */
    public static  function orderSn()
    {
        return date('Ymd').substr(implode(NULL, array_map('ord', str_split(substr(uniqid(), 7, 13), 1))), 0, 8);
    }

    /**
     * 会员下单
     */
    public function addOrder(Request $request)
    {

        $this->validate($request,[
            'spuId'=>'required|integer',
            'skuId'=>'required|integer',
            'num'=>'required|integer'
        ]);

        $order_sn = $this::orderSn();


        $goods = GoodsSku::leftJoin('goods_spus','goods_skus.spu_id','goods_spus.id')
            ->select('goods_spus.id as gid','goods_skus.id as gkid','spu_name','gc_name','main_image','goods_skus.price')
            ->where('goods_skus.id',$request->skuId)
            ->where('goods_skus.status',1)
            ->first();
        if(!$goods) return response()->json(['code'=>1,'msg'=>'商品数据有误','data'=>'']);

        $user = User::select('id','mobile')->whereId($this->member_id)->first();

        $result = Order::add($goods,$user,$order_sn,$request->num);

        if(!empty($result)){
            return redirect()->action('Member\MemberController@payOrder', $result);
        }

    }
    /**
     * 会员下单
     */
    public function payOrder(Request $request)
    {
        $params = [
            'name' =>$request->name,
            'sn' =>$request->orderSn,
            'price' =>$request->price,
        ];

        return view('pay.pay',['params'=>$params]);


    }



    /**
     * 会员订单
     */
    public function orderList()
    {
        $order =  Order::getList($this ->member_id);

        return view('member.orderList',compact('order'));
    }

    /**
     * 修改会员信息逻辑
     */
    public function updateMemberInfo(Request $request)
    {
        $param = $request ->all();
        $data = [];
        if(!empty($param['username'])){
            $data['username'] = $param['username'];
        }
        if(!empty($param['picture'])){
            $data['picture'] = $param['picture'];
        }
        if(!empty($param['email'])){
            $data['email'] = $param['email'];
        }
        $result = User::edit($this ->member_id,$data);
        if($result){
            return 1;
        }
    }

    /**
     * 修改会员密码逻辑
     *
     */
    public function updateMemberPwd(Request $request)
    {
        $param = $request ->all();
        $getMember = User::getMember($this ->member_id);
        if(empty($getMember)){
            return -1;
        }
        $data = [];
        if(!empty($param['password'])){
            $data['password'] = bcrypt($param['password']);
            $result = User::edit($this ->member_id,$data);
            if($result){
                return 1;
            }
        }else{
            return -1;
        }
    }


}