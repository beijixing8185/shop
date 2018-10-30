<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/10
 * Time: 15:21
 */

namespace app\Controllers\Common;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Controllers\Common\Lsm_sms;
use Illuminate\Support\Facades\Cache;
class CommonController extends Controller
{

    /**
     * 随机数生成
     * @return string
     */
    public function randChar($length)
    {
        $str = null;
        $strPol = "0123456789";
        $max = strlen($strPol)-1;
        for($i=0;$i<$length;$i++){
            $str.=$strPol[rand(0,$max)];//rand($min,$max)生成介于min和max两个数之间的一个随机整数
        }
        return $str;
    }


    /**
     * 验证码生成
     * @param Request $request\
     */
    public function lsmSms(Request $request)
    {
        $randChar = $this ->randChar(6);
        $params = $request ->all();
        $sms = new Lsm_sms();
        $res = $sms->send( $params['phone'],'您的验证码是'.$randChar.'，请尽快完成验证【好歆网络】');
        if( isset( $res['error'] ) &&  $res['error'] == 0 ){
            Cache::put($params['phone'],$randChar,10);
            return 1;
        }else{
            echo 'failed,code:'.$res['error'].',msg:'.$res['msg'];
            return -1;
        }
    }

    /**
     * 获取ip
     * @return string
     */
    public function getIp()
    {
        if (getenv('HTTP_CLIENT_IP')) {
            $ip = getenv('HTTP_CLIENT_IP');
        } elseif (getenv('HTTP_X_FORWARDED_FOR')) {
            $ip = getenv('HTTP_X_FORWARDED_FOR');
        } elseif (getenv('HTTP_X_FORWARDED')) {
            $ip = getenv('HTTP_X_FORWARDED');
        } elseif (getenv('HTTP_FORWARDED_FOR')) {
            $ip = getenv('HTTP_FORWARDED_FOR');

        } elseif (getenv('HTTP_FORWARDED')) {
            $ip = getenv('HTTP_FORWARDED');
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

}