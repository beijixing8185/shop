<?php
/**
 * Created by PhpStorm.
 * User: 刘笑奇
 * Date: 2018/10/14
 * Time: 17:20
 */

namespace app\Models;


use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    /**
     * 根据状态查询
     */
    public static function getList($wheres='',$status='',$limit='',$link='')
    {
        $where = 'id > 0'.$wheres;
        if(!empty($status)){
            $where .= ' and status = '.$status;
        }
        if(!empty($link)){
            $where .= ' and title like  "%'.$link.'%"';
        }
        if(!empty($limit)){
            return self::whereRaw($where)->orderByRaw('sort ASC')->limit($limit)->get();
        }
        return self::whereRaw($where)->orderByRaw('sort ASC')->get();
    }

    /**
     * 获取单条纪录，根据id
     * @param $id
     * @return mixed
     */
    public static function getFind($id)
    {
        return self::where('id',$id) -> first();
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

        $goods->gc_id = $object->cate_one;
        $goods->spu_id = $object->cate_two;
        $goods->picture = $object->first_img;
        $goods->title = $object->title;
        $goods->keywords = $object->keywords;
        $goods->money = $object->money;
        $goods->day = $object->day;

        $goods->content = $object->editorValue;
        $goods->description = $object->description;
        $goods->customer = $object->customer;
        $goods->status = $object->status;

        return $goods->save();
    }

    /**
     * 根据状态查询
     */
    public static function getCaseList($where='')
    {
        return self::whereRaw('id >= 1'.$where)->orderBy('id','desc')->paginate(10);
    }

}