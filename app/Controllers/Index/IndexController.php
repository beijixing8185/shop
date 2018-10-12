<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/8
 * Time: 17:30
 */

namespace app\Controllers\Index;


use App\Http\Controllers\Controller;
use App\Models\Banner;

class IndexController extends Controller
{

    public function index()
    {
        //banner图
        $banner = Banner::getList(1,1,4); //状态为1的，并且type值为1的。

        return view('index.index',compact('banner'));
    }

}