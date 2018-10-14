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
    public static function getList($wheres='',$status='',$limit='')
    {
        $where = 'id > 0'.$wheres;
        if(!empty($status)){
            $where .= ' and status = '.$status;
        }
        if(!empty($limit)){
            return self::whereRaw($where)->orderByRaw('id DESC')->limit($limit)->get();
        }
        return self::whereRaw($where)->orderByRaw('id DESC')->get();
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
}