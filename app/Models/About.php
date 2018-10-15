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
    public static function getList()
    {
        return self::select(['id','category'])->get();
    }
}