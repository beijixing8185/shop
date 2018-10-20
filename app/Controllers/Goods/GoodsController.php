<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/9
 * Time: 14:12
 */

namespace app\Controllers\Goods;


use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\GoodsCate;
use App\Models\GoodsEvaluate;
use App\Models\GoodsSpu;
use App\Models\User;
use Illuminate\Http\Request;


class GoodsController extends Controller
{

    public function index()
    {

    }

    public function goodsDetail($id)
    {
        $goods = GoodsSpu::goodsDetail($id); //商品详情
        //dd($result);

        $customer = '';     //关于这个商品的成交案例
        if(!empty($goods)){
            $customer = Customer::getList(' and spu_id = '.$goods['gc_id_2'],1,3);
        }

        $commend = GoodsSpu::list(' and is_commend = 1 and status = 1',5);  //推荐商品 is_commend

        $goods_message = GoodsEvaluate::getList($goods['id'],1);//商品评论
        foreach ($goods_message as $val){
            $val->member = User::getMember($val->uid);
        }
        return view('goods.goodsDetail',compact('goods','customer','commend','goods_message'));
    }

    /**
     * 获取商品分类
     */
    public function getGoodsCate(Request $request){

        $this->validate($request,['value'=>'required|integer']);

        $value  = $request->value;

        $where = ' and pid = '.$value;
        $cate = GoodsCate::getList($where,1);
        return response()->json(['code'=>0,'msg'=>'查询成功','data'=>$cate]);

    }


}