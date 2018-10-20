<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/10
 * Time: 17:04
 */

namespace app\Models;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    //public $timestamps=false;

    protected $fillable=['id','mobile','login_ip','old_login_ip','number','nick_name','avatar'];
    /**
     * 查询会员，通过传值id
     * @param $data
     */
    public static function getMember($id)
    {
        return self::find($id);
    }

    /**
     * 修改会员，通过传值id
     * @param $data
     */
    public static function edit($mid,$data)
    {
        return self::where('id',$mid)->update($data);
    }
    /**
     * 获取单个值
     */
    public static function getValue($id,$field){
        return self::where('id',$id)->value($field);
    }



    /**
     * 获取单个值，通过手机号
     */
    public static function getMobile($mobile){
        return self::where('mobile',$mobile)->first();
    }



    /**
     * 添加会员
     * @param $data
     * @return mixed
     */
    public static function add($data)
    {
        return self::create($data);
    }


    /**
     * 获取会员，通过判断条件
     */
    public static function getWhere($where)
    {
        return self::whereRaw('status = 1 and '.$where)->first();
    }
    /**
     * 后台查询
     */
    public static function getList($where = ''){
        $user =  Self::whereRaw('id >= 1 '.$where)->orderBy('id','desc')->paginate(20);
        return $user;
    }
}