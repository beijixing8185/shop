<?php


namespace app\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\GoodsCate;

class GoodsSpu extends Model
{
    /**
     * 查询列表
     */

    public static function getlist($where = '')
    {
        $goods = Self::whereRaw('id >= 1' . $where)->orderBy('id', 'desc')->paginate(10);
        return $goods;
    }

    /**
     * @param string $where
     * @param string $limit
     * @return mixed
     */
    public static function list($where = '',$limit=''){
        if(!empty($limit)){
            return Self::whereRaw('id >= 1'.$where)->limit($limit)->get();
        }
       return Self::whereRaw('id >= 1'.$where)->get();

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

    /**
     * 查询商品详情
     */
    public static function goodsDetail($id){
        return Self::leftJoin('goods_skus','goods_spus.id','goods_skus.spu_id')
            ->select('goods_spus.id as gid','spu_name','gc_id_1','gc_id_2','gc_name','description','main_image','content','goods_spus.market_price','goods_spus.price','goods_spus.num','goods_spus.status','salen_num','evaluate_num','star','is_hot','is_commend','sku_spec','spec_name')
            ->where('goods_spus.id',$id)
            ->first();
    }
}