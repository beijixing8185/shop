<?php
/**
 * Created by PhpStorm.
 * User: 刘笑奇
 * Date: 2018/10/14
 * Time: 15:40
 */

namespace app\Controllers\Functions;


use App\Http\Controllers\Controller;

class FunctionsController extends Controller{

    /**
     * 将数据格式化成树形结构
     * @author Xuefen.Tong
     * @param array $items
     * @return array
     */
    public function childs($category,$parent_id=0,$level=0)
    {
        $arr=array();
        foreach($category as $k=>$v){
            if($v['pid']==$parent_id){
                $v['level']=$level;
                $v['child']=$this->childs($category,$v['id'],$level+1);
                $arr[]=$v;
            }
        }
        return $arr;

    }
}