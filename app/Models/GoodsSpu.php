<?php


namespace app\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\GoodsCate;

class GoodsSpu extends Model
{
    /**
     * 查询列表
     */
    public static function list($where = ''){
       $goods = Self::whereRaw('id >= 1'.$where)->orderBy('id','desc')->paginate(10);
       return $goods;
    }

    /**
     * 添加商品
     */
    public static function add($object){
        if($object->id){
            $goods = Self::find($object->id);
        }else{
            $goods = new Self;
        }

        $goods->spu_name = $object->spu_name;
        $goods->gc_id_1 = $object->cate_one;
        $goods->gc_id_2 = $object->cate_two;
        //$goods->gc_id_3 = $object->cate_id;
        $goods->main_image = $object->first_img;
        $goods->market_price = $object->market_price;
        $goods->price = $object->price;

        $ids = $object->cate_one.','.$object->cate_two;
        $gc_name = GoodsCate::getNameById($ids);
        $goods->gc_name = implode(',',$gc_name->pluck('name')->toArray());

        $goods->content = $object->editorValue;
        $goods->description = $object->description;
        $goods->is_hot = $object->hot;
        $goods->is_commend = $object->commend;
        $goods->status = $object->status;

        return $goods->save();
    }
}