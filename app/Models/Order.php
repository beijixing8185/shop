<?php


namespace app\Models;


use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    /**
     * 查询列表
     */
    public static function getList($uid='',$where=''){
        if($uid){
            $order = Self::where('uid',$uid)->orderBy('id','desc')->paginate(20);
        }else{
            $order = Self::whereRaw('id >=1'.$where)->orderBy('id','desc')->paginate(5);
        }
        return $order;
    }

    /**
     * 添加
     */
    public static function add($goods,$user,$order_sn,$number=1){
        $orders = new Self;

        $orders->order_sn = $order_sn;
        $orders->uid = $user->id;
        $orders->mobile = $user->mobile;
        $orders->main_image = $goods->main_image;
        $orders->spu_name = $goods->spu_name;
        $orders->gc_name = $goods->gc_name;
        $orders->sku_id = $goods->gkid;
        $orders->spu_id = $goods->gid;
        $orders->number = $number;
        $order_amouts = bcmul($goods->price,$number,2);
        $orders->goods_amounts = $goods->price;
        $orders->order_amounts = $order_amouts;
        $orders->plat_order_state = 1;


        if($orders->save()){
            return ['order_sn'=>$order_sn,'order_amounts'=>$order_amouts,'spu_name'=>$goods->spu_name];
        }else{
            return [];
        }
    }

}