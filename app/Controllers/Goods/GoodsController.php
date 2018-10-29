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
use App\Models\GoodsSku;
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
        //dd($goods);

        $customer = '';     //关于这个商品的成交案例
        if(!empty($goods)){
            $customer = Customer::getList(' and spu_id = '.$goods['gc_id_2'],1,3);
        }

        $commend = GoodsSpu::list(' and is_commend = 1 and status = 1',5);  //推荐商品 is_commend

        $count_message = GoodsEvaluate::count_message($id,1);    //商品评论总数

        $goods_message = GoodsEvaluate::getList($id,1);    //商品评论
        foreach ($goods_message as $val){
            $val->member = User::getMember($val->uid);
        }


        //获取规格
        $goodsSku = GoodsSku::select('id','market_price','spec_name','price')->where('spu_id',$id)->where('status',1)->get();//2018-10-22

        //dd($goods);
        return view('goods.goodsDetail',compact('goods','customer','commend','goods_message','count_message','goodsSku'));

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

    /**
     * 无刷新分页。
     *
     */
    public function getDetailPage(Request $request)
    {
        $param = $request ->all();
        $offset = $param['page'];
        $goods_message = GoodsEvaluate::getListPage($param['spu_id'],$offset,5);    //商品评论,显示每页5条
        foreach ($goods_message as $val){
            $val->member = User::getMember($val->uid);
        }
        return response()->json(['code'=>0,'msg'=>'查询成功','data'=>$goods_message]);
    }

}