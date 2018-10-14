<?php
/**
 * Created by PhpStorm.
 * User: 刘笑奇
 * Date: 2018/10/13
 * Time: 15:44
 */

namespace app\Models;


use Illuminate\Database\Eloquent\Model;

class ArticleCate extends Model{

    /**
     * 根据状态查询
     */
    public static function getList($where='',$status='')
    {
        $wheres = 'id > 0'.$where;
        if(!empty($status)){
                return self::whereRaw($wheres.' and status = '.$status) ->get();
        }else{
            return self::whereRaw($wheres) ->get();
        }
    }
}