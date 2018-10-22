<?php
/**
 * Created by PhpStorm.
 * User: 刘笑奇
 * Date: 2018/10/14
 * Time: 19:53
 */

namespace app\Models;


use Illuminate\Database\Eloquent\Model;

class About extends Model{

    /**
     * 根据id查询
     * @param $id
     * @return mixed
     *
     */
    public static function getFind($id)
    {
        return self::where('id',$id)->first();
    }

    /**
     * 查询栏目和id
     */
    public static function getList($where='')
    {
        if($where ==''){
            return self::select(['id','category'])->get();
        }else{
            return self::select(['id','category'])->whereRaw($where)->get();
        }

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
        $category_type = config('constants.category_type');
        $goods->category = $category_type[$object->cate_one];
        $goods->picture = $object->first_img;
        $goods->title = $object->title;
        $goods->keywords = $object->keywords;

        $goods->content = $object->editorValue;
        $goods->description = $object->description;
        $goods->status = $object->status;

        return $goods->save();
    }

    /**
     * 根据状态查询
     */
    public static function getAboutList($where='')
    {
        return self::whereRaw('id >= 1'.$where)->orderBy('id','desc')->paginate(10);
    }
}