<?php
/**
 * Created by PhpStorm.
 * User: 刘笑奇
 * Date: 2018/10/14
 * Time: 16:53
 */

namespace app\Models;


use App\Controllers\Functions\FunctionsController;
use Illuminate\Database\Eloquent\Model;
use App\Models\GoodsSpu;

class GoodsCate extends Model{

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
            return self::whereRaw($wheres)->orderByRaw('sort ASC')->limit($limit) ->get();
        }else{
            return self::whereRaw($wheres)->orderByRaw('sort ASC') ->get();
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
        $cate->description = $data['description'];
        return $cate->save();
    }

    /**
     * 导航栏目
     */
    public static function getColumn()
    {
        $where = 'status = 1 ';
        $result = self::whereRaw($where) -> get();
        $getFun = new FunctionsController();
        $getTree = $getFun -> childs($result);
        foreach ($getTree as $val){
            if(!empty($val->child)){
                foreach ($val->child as $items){
                    $items['goods'] = GoodsSpu::list(' and status = 1 and gc_id_2 = '.$items['id']);
                }
            }
            $val['hot'] = GoodsSpu::list(' and status = 1 and is_hot = 1 and gc_id_1 = '.$val['id'],4);
        }
        return $getTree;
    }

}