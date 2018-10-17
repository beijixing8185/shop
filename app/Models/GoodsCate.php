<?php
/**
 * Created by PhpStorm.
 * User: 刘笑奇
 * Date: 2018/10/14
 * Time: 16:53
 */

namespace app\Models;


use Illuminate\Database\Eloquent\Model;

class GoodsCate extends Model{

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

    /**
     * 根据id查询名称
     * $ids string 1,2,3
     */
    public static function  getNameById($ids){
        $ids = explode(',',$ids);
        $cate_name = Self::select('name')->whereIn('id',$ids)->get();
        return $cate_name;
    }
    /**
     * 添加栏目
     *
     */
    public static function  addCate(array $data){

        $cate = Self::where('level',$data['level'])->where('name',$data['name'])->first();
        if($cate) return false;

        $cate = new Self;
        $cate->name = $data['name'];
        $cate->pid = $data['pid'];
        $cate->level = $data['level'];
        return $cate->save();
    }



}