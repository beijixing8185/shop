<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/18
 * Time: 13:58
 */

namespace App\Controllers\Admin;

use App\Facades\Api;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Admin\AdminUser;
use Illuminate\Support\Facades\Cache;


class AuthController extends Controller
{

    public function login(){

        return view('admin.login');
    }

    /**
     * @param Request $req
     * @return \Illuminate\Http\RedirectResponse
     * 登录
     */
    public function postLogin(Request $req){

        $this->validate($req,[
            'username'=>'required|string',
            'password'=>'required|string',
        ]);

        $username = $req->username;
        $password = $req->password;
        $userInfo = AdminUser::where('username',$username)->first();

        if (!$userInfo) {
            echo '<script>alert("账户不存在");window.location.href="/zs/admin/login";</script>';
            return ;
        }
        if (password_verify ( $password , $userInfo->password)) {
            $req->session()->put('admin_username',$username);
            $req->session()->put('admin_userId',$userInfo->id);
            return redirect('hx/admin/index');
        }else{
            echo '<script>alert("账户名和密码不匹配,请核对后再登录");history.back(-1);</script>';
            return;
        }

    }

    /**
     * 后台为用户生成密码
     */
    public function makePassword(){
        dd(password_hash('hx',PASSWORD_DEFAULT));
    }

    /**
     * 退出登录
     */
    public function logout(Request $req){
        $req->session()->forget('admin_username');
        return redirect('hx/admin/login');
    }

    /**
     * 后台管理员
     */
    public function getAdminUserList(){
        $list  =  AdminUser::get();
        return view('admin.adminUserList',compact('list'));
    }

    /**
     * 前台用户
     */
    public function getUserList(){
        $user  =  User::getList();

        return view('admin.userList',compact('user'));
    }
    /**
     * 冻结用户
     */
    public function delUser(Request $req){
        $res  =  User::whereId($req->id)->update(['status'=>0]);
        if($res)
            return response()->json(['code'=>0,'msg'=>'删除成功','data'=>'']);
        else
            return response()->json(['code'=>1,'msg'=>'删除失败','data'=>'']);
    }


    /**
     * 清除缓存【主要清除前台生成的Cache】
     */
    public function cacheOut()
    {
        Cache::forget('link');  //超链接
        Cache::forget('category');//栏目，暂时不用
        Cache::forget('about_list');    //关于我们栏目
        Cache::forget('goods_list');    //商品
        Cache::forget('getColumn');     //总栏目列表
    }



}