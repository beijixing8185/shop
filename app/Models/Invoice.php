<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/27
 * Time: 13:12
 */

namespace app\Models;


use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{

    /**
     * 添加数据，返回主键id
     * @param $data
     * @return mixed
     */
    public static function addInvoice($data)
    {
        return self::insertGetId($data);
    }
}