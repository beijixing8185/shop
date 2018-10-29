<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/9
 * Time: 16:13
 */

namespace app\Controllers\Member;


use App\Http\Controllers\Controller;
use App\Models\GoodsEvaluate;
use App\Models\GoodsSku;
use App\Models\GoodsSpu;
use App\Models\Invoice;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


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

    //异步添加发票信息【普通发票】
    public function invoice_a(Request $request)
    {
        $param = $request ->all();
        $data = [
            'title' =>$param['putTitle'],
            'pay_id'=>$param['putIdentifyNo'],
            'username'=>$param['putReceiver'],
            'phone'=>$param['putPhone'],
            'address'=>$param['putAddress'],
        ];
        $code = Invoice::addInvoice($data);
        if($code > 0){
            return $code;
        }
    }

    //异步添加发票信息【增值税发票】
    public function invoice_b(Request $request)
    {
        $param = $request ->all();
        $data = [
            'title' =>$param['zhuanTitle'],
            'pay_id'=>$param['zhuanIdentifyNo'],
            'reg_address'=>$param['zhuanRegAddr'],
            'reg_phone'=>$param['zhuanRegPhone'],
            'reg_bank'=>$param['zhuanBank'],
            'bank_number'=>$param['zhuanAccount'],
            'username'=>$param['zhuanReceiver'],
            'phone'=>$param['zhuanPhone'],
            'address'=>$param['zhuanAddress'],
        ];
        $code = Invoice::addInvoice($data);
        if($code > 0){
            return $code;
        }
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
            'num'=>'required|integer',
            'invo_id'=>'integer'
        ]);

        $order_sn = $this::orderSn();


        $goods = GoodsSku::leftJoin('goods_spus','goods_skus.spu_id','goods_spus.id')
            ->select('goods_spus.id as gid','goods_skus.id as gkid','spu_name','gc_name','main_image','goods_skus.price')
            ->where('goods_skus.id',$request->skuId)
            ->where('goods_skus.status',1)
            ->first();
        if(!$goods) return response()->json(['code'=>1,'msg'=>'商品数据有误','data'=>'']);

        $user = User::select('id','mobile')->whereId($this->member_id)->first();

        $result = Order::add($goods,$user,$order_sn,$request->num,$request->invo_id);

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
        $member_img = '';
        if(!empty(Session::get('phone'))){
            $member = User::getMobile(Session::get('phone'));
            $member_img = $member ->picture;
        }


        return view('member.orderList',compact('order','member_img'));
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

    /**
     * 会员评论
     *
     */
    public function memberAddEval(Request $request)
    {
        $param = $request ->all();
        $data = [
            'spu_id'=> $param['spu_id'],
            'content'=> $param['content'],
            'stars'=> $param['stars'],
        ];
        $result = GoodsEvaluate::addEval($data);
        $order = Order::find($param['spu_id']);
        $order -> plat_order_state = 9;
        $order ->save();
        return 1;
    }

    /**
     * 修改状态
     * @param Request $request
     * @return int
     */
    public function saveStatus(Request $request)
    {
        $param = $request ->all();
        $status = $param['status'];
        $order = Order::find($param['spu_id']);
        $order -> plat_order_state = $status;
        $order ->save();
        return 1;
    }

}