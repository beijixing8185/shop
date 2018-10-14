<?php
/**
 * Created by PhpStorm.
 * User: 刘笑奇
 * Date: 2018/10/14
 * Time: 16:22
 */

namespace app\Controllers\Common;


use App\Controllers\Functions\FunctionsController;
use App\Http\Controllers\Controller;
use App\Models\GoodsCate;
use App\Models\Link;

class BaseController extends Controller
{
    public $link;
    public function __construct()
    {
        $this ->link = Link::getList(1);   //外链列表
    }
    //无限极分类栏目
    public function getTree()
    {
        $where = '';    //  条件，
        //商品栏目
        $category = GoodsCate::getList($where,1)->toArray();
        $getCommon = new FunctionsController();
        return $getCommon ->childs($category,0);


    }


}