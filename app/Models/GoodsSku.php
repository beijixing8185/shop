<?php


namespace app\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\GoodsCate;

class GoodsSku extends Model
{
    /**
     * 查询列表
     */
    public static function list($where = ''){
       $goods = Self::whereRaw('id >= 1'.$where)->orderBy('id','desc')->paginate(10);
       return $goods;
    }

    /**
     * 添加规格
     */
    public static function add($object){
        if($object->id){
            $goods = Self::find($object->id);
        }else{
            $goods = new Self;
        }

        $goods->spu_id = $object->spu_id;
        $goods->sku_name = $object->spu_name;
        $goods->spec_name = $object->spec_name;
        $goods->market_price = $object->market_price;
        $goods->price = $object->price;
        $goods->num = $object->num;
        $goods->status = $object->status;


        return $goods->save();
    }
}