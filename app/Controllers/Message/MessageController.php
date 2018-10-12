<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/10
 * Time: 9:50
 */

namespace app\Controllers\Message;


use App\Http\Controllers\Controller;

class MessageController extends Controller
{

    /**
     * 在线留言
     */
    public function index()
    {
        return view('message.index');
    }

}