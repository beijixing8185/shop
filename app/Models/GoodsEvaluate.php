<?php
/**
 * Created by PhpStorm.
 * User: 刘笑奇
 * Date: 2018/10/14
 * Time: 19:53
 */

namespace app\Models;


use Illuminate\Database\Eloquent\Model;

class GoodsEvaluate extends Model{


    /**
     * 获取评论列表
     */
    public static function getList($spu_id,$status)
    {
        $where = 'id > 0';
        if(!empty($spu_id)){
            $where .= ' and spu_id = '.$spu_id;
        }
        if(!empty($status)){
            $where .= ' and status = '.$status;
        }
        return self::whereRaw($where)->orderByRaw('id DESC')->paginate(5);
    }

    public static function count_message($spu_id,$status)
    {
        $where = 'id > 0';
        if(!empty($spu_id)){
            $where .= ' and spu_id = '.$spu_id;
        }
        if(!empty($status)){
            $where .= ' and status = '.$status;
        }
        return self::whereRaw($where)->orderByRaw('id DESC')->count();
    }


    /**
     * 评论列表分页
     */
    public static function getListPage($id,$offset,$limit)
    {
        $offsetInt = ($offset-1)*$limit;
        return self::whereRaw('status = 1 and spu_id = '.$id)->orderByRaw('id DESC')->offset($offsetInt)->limit($limit)->get();
    }

    /**
     * 添加评论
     */
    public static function addEval($data)
    {
        return self::insert($data);
    }
}