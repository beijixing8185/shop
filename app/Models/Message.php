<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/16
 * Time: 10:09
 */

namespace app\Models;


use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    protected $fillable=['id','name','phone','tags','email','content','status','add_time'];
    /**
     * 添加留言
     */
    public static function addMessage($data)
    {
        return self::create($data);
    }
}