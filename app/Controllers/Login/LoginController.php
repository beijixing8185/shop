<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/9
 * Time: 11:40
 */

namespace app\Controllers\Login;


use App\Controllers\Common\CommonController;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Gregwar\Captcha\CaptchaBuilder;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{

    /**
     * 登陆
     */
    public function index()
    {
        return view('login.login');
    }

    /**
     * 登陆逻辑
     * @return mixed
     */
    public function login(Request $request)
    {
        $common = new CommonController();
        $param = $request ->all();
        $phone = $param['phone'];               //手机号
        $verify = $param['mobileCode'];         //验证码
        if(empty($phone) || empty($verify)) return -1;
        if(Cache::get($phone) == $verify){

            $user = User::getMobile($param['phone']);
            if($user){
                Session::put('phone',$phone,1440);
                Session::put('user_id',$user['id'],1440);
                $data = [
                    'number' => $user['number']+1,
                    'login_ip' => $common ->getIp(),
                    'old_login_ip'=> $user['login_ip'],
                ];
                User::edit($user['id'],$data);
                return 1;
            }else{
                $data = [
                    'mobile' => $param['phone'],
                    'login_ip' => $common ->getIp(),
                    'old_login_ip'=> $common ->getIp(),
                    'number' => 1,
                ];
                $user_id = User::add($data);
                if($user_id){
                    Session::put('phone',$phone,1440);
                    Session::put('user_id',$user_id['id'],1440);
                    return 1;
                }
            }
        }else{
            return -1;
        }
    }


    /**
     * 注册
     */
    public function register()
    {

        return view('login.register');
    }


    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function captcha($tmp)
    {
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder(2);
        //可以设置图片宽高及字体
        $builder->build($width = 70, $height = 32, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();

        //把内容存入session
        Session::flash('milkcaptcha', $phrase);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
    }


    /**
     * 验证码是否成功
     */
    public function verify_img(Request $request)
    {
        $param = $request ->all();
        $userInput = $param['captcha'];
        if(Session::get('milkcaptcha') == $userInput){
            return 1;
        }else{
            return -1;
        }
    }

    /**
     * 账号密码登陆
     */
    public function login_pwd(Request $request)
    {
        $common = new CommonController();
        $param = $request ->all();
        $phone = $param['phone'];               //手机号
        $password = encrypt($param['password']);         //密码
        $this->validate($request,[
            'phone'=>'required',
            'password'=>'required'
        ]);
        $where = 'mobile = '.$phone.' and password = '.$password;
        $user = User::getWhere($where);
        if($user){
            Session::put('phone',$phone,1440);
            Session::put('user_id',$user['id'],1440);
            $data = [
                'number' => $user['number']+1,
                'login_ip' => $common ->getIp(),
                'old_login_ip'=> $user['login_ip'],
            ];
            User::edit($user['id'],$data);
            return 1;
        }else{
            return -1;
        }
    }

    public function register_login(Request $request)
    {
        $common = new CommonController();
        $param = $request ->all();
        $this->validate($request,[
            'phone'=>'required',
            'password'=>'required',
        ]);
        $phone = $param['phone'];                       //手机号
        $password = encrypt($param['password']);         //密码
        $code = $param['code'];         //验证码
        if(Cache::get($phone) == $code){
            $user = User::getMobile($phone);
            if($user){
                return 2;
            }else{
                $data = [
                    'mobile' => $phone,
                    'password'  =>  $password,
                    'login_ip' => $common ->getIp(),
                    'old_login_ip'=> $common ->getIp(),
                    'number' => 1,
                ];
                $user_id = User::add($data);
                    Session::put('phone',$phone,1440);
                    Session::put('user_id',$user_id['id'],1440);
                    return 1;
            }
        }else{
            return -1;
        }
    }

    /** 退出登陆
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function loginout()
    {
        session::forget('phone');
        session::forget('user_id');
        return redirect('/');
    }

}