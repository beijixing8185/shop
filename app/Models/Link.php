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
}