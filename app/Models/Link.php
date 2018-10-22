<?php
/**
 * Created by PhpStorm.
 * User: 刘笑奇
 * Date: 2018/10/14
 * Time: 19:20
 */

namespace app\Models;


use Illuminate\Database\Eloquent\Model;

class Link extends Model{

    /**
     * 外链列表
     */
    public static function getList($status='')
    {
        if(!empty($status)){
            return self::where('status',$status)->orderByRaw('sort ASC') -> get();
        }
        return self::orderByRaw('sort ASC')->get();
    }
    public static function add($object){
        if($object->id){
            $goods = Self::find($object->id);
        }else{
            $goods = new Self;
        }

        $goods->name = $object->name;
        $goods->link = $object->url;
        $goods->status = $object->status;

        return $goods->save();
    }
}