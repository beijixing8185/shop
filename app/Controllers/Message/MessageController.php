<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/10
 * Time: 9:50
 */

namespace app\Controllers\Message;


use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class MessageController extends Controller
{

    /**
     * 在线留言添加
     */
    public function addMessage(Request $request)
    {
        $param = $request->all();
        $data = $this -> getData($param);
        $result = Message::addMessage($data);
        if ($result) {
            return 1;
        } else {
            return -1;
        }
    }


    //在线留言有验证码的添加
    public function addCodeMessage(Request $request)
    {
        //判断是否需要验证码
        $param = $request->all();
        $this->validate($request,[
            'phone'=>'required',
            'code'=>'required'
        ]);
        if(Cache::get($param['phone']) == $param['code']) {
            $data = $this -> getData($param);
            $result = Message::addMessage($data);
            if ($result) {
                return 1;
            } else {
                return -1;
            }
         }else{
            return -2;
        }
    }

    //数据组装；
    public function getData($param)
    {
        $data = [
            'add_time' => time(),
        ];
        if (!empty($param['name'])) {
            $data['name'] = trim($param['name']);
        }
        if (!empty($param['phone'])) {
            $data['phone'] = trim($param['phone']);
        }
        if (!empty($param['tags'])) {
            $data['tags'] = trim($param['tags']);
        }
        if (!empty($param['email'])) {
            $data['email'] = trim($param['email']);
        }
        if (!empty($param['content'])) {
            $data['content'] = trim($param['content']);
        }
        return $data;
    }

}