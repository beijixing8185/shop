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
            return self::whereRaw($where)->orderByRaw('sort ASC') ->limit($limit)->get();
        }
        return self::whereRaw($where)->orderByRaw('sort ASC')->get();

    }
}