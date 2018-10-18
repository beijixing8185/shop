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
    public static function getList($where='',$status='',$limit='')
    {
        $wheres = 'id > 0'.$where;
        if(!empty($status)){
            $wheres .= ' and status = '.$status;
        }
        if(!empty($limit)){
                return self::whereRaw($wheres) ->limit($limit)->get();
        }else{
            return self::whereRaw($wheres) ->get();
        }
    }
    /**
     * 添加栏目
     */
    public static function  addCate(array $data){

        $cate = Self::where('level',$data['level'])->where('cate_name',$data['name'])->first();
        if($cate) return false;

        $cate = new Self;
        $cate->cate_name = $data['name'];
        $cate->description = $data['description'];
        $cate->pid = $data['pid'];
        $cate->level = $data['level'];
        return $cate->save();
    }
}