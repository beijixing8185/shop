<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/12
 * Time: 10:33
 */

namespace app\Models;


use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{

    /**
     * banner列表
     */
    public static function getList($state='',$type='',$limit = '')
    {
        $where = 'id > 0';
        if(!empty($state)){
            $where .= ' and status = '.$state;
        }
        if(!empty($type)) {
            $where .= ' and type = '.$type;
        }
        if(!empty($limit)){
            return self::whereRaw($where)->orderByRaw('id desc') ->limit($limit)->get();
        }
        return self::whereRaw($where)->orderByRaw('id desc')->get();

    }
    /**
     * 添加
     */
    public static function add($object){
        if($object->id){
            $goods = Self::find($object->id);
        }else{
            $goods = new Self;
        }

        $goods->type = $object->type;
        $goods->picture = $object->first_img;
        $goods->open_url = $object->open_url;
        $goods->status = $object->status;

        return $goods->save();
    }
}