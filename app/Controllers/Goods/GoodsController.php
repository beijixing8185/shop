<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/9
 * Time: 14:12
 */

namespace app\Controllers\Goods;


use App\Http\Controllers\Controller;

class GoodsController extends Controller
{

    public function index()
    {

    }

    public function goodsDetail()
    {
        return view('goods.goodsDetail');
    }
}