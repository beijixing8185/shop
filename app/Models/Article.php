<?php
/**
 * Created by PhpStorm.
 * User: 刘笑奇
 * Date: 2018/10/13
 * Time: 16:14
 */

namespace app\Models;


use Illuminate\Database\Eloquent\Model;

class Article  extends Model{

    /**
     * 获取列表
     * @param string $pid   //栏目级别，上级id
     * @param string $status//状态
     * @param string $hot   //推荐
     * @param string $limit//条数
     * @param string $link//模糊查询tag
     * @return mixed
     */
    public static function getList($pid='',$status='',$hot='',$limit='',$link='')
    {
        $where = 'id > 0 ';
        if(!empty($pid)){
            $where .= ' and article_cate_id =  '.$pid;
        }
        if(!empty($status)){
            $where .= ' and status =  '.$status;
        }
        if(!empty($hot)){
            $where .= ' and hot =  '.$hot;
        }
        if(!empty($link)){
            $where .= ' and title like  "%'.$link.'%"';
        }
        if(!empty($limit)){
            return self::whereRaw($where)->orderBy('id','desc')->limit($limit)->get();
        }
        return self::whereRaw($where)->orderBy('id','desc')->paginate(10);
    }

    /**
     * 获取单条新闻
     * @param $id
     * @return mixed
     */
    public static function getFind($id)
    {
        return self::where('id',$id)->first();
    }

    /**
     * 添加商品
     */
    public static function add($object){
        if($object->id){
            $goods = Self::find($object->id);
        }else{
            $goods = new Self;
        }

        $goods->title = $object->title;
        $goods->article_cate_id = $object->cate_two;
        $goods->picture = $object->first_img;
        $goods->tag = $object->tag;
        $goods->keywords = $object->keywords;
        $goods->description = $object->description;
        $goods->author = $object->author;
        $goods->number = $object->number;
        $goods->hot = $object->hot;
        $goods->content = $object->editorValue;
        $goods->status = $object->status;
        $goods->add_time = time();

        return $goods->save();
    }
}