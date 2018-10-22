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
        return self::whereRaw($where)->orderByRaw('id DESC')->paginate(3);
    }

    public static function count_message()
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
}