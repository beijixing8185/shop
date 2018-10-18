<?php
/**
 * Created by PhpStorm.
 * User: 刘笑奇
 * Date: 2018/10/14
 * Time: 19:56
 */

namespace app\Controllers\About;


use App\Http\Controllers\Controller;
use App\Models\About;

class AboutController extends Controller{

    public function index($id)
    {
        $about = About::getFind($id);
        return view('about.index',compact('about','id'));
    }
}