<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/9
 * Time: 14:12
 */

namespace app\Controllers\Goods;


use App\Http\Controllers\Controller;
use App\Models\GoodsCate;
use Illuminate\Http\Request;


class GoodsController extends Controller
{

    public function index()
    {

    }

    public function goodsDetail()
    {
        return view('goods.goodsDetail');
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