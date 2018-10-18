<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/9
 * Time: 16:13
 */

namespace app\Controllers\Member;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class MemberController extends Controller
{
    public $member_id;

    public function __construct()
    {
        $this ->member_id = 1;//session('user_id');
    }

    public function index()
    {

    }


    /**
     * 会员信息
     */
    public function getMember()
    {
        $getMember = '';
        /*if(!empty(session('user_id'))){
            $getMember = User::getMember($this ->member_id);
        }*/
        $getMember = User::getMember($this ->member_id);
       // dd($getMember);
        return view('member.index',compact('getMember'));
    }


    /**
     * 密码修改
     */
    public function memberPwd()
    {
        return view('member.member_pwd');
    }



    /**
     * 会员订单
     */
    public function orderList()
    {
        return view('member.orderList');
    }

    /**
     * 修改会员信息逻辑
     */
    public function updateMemberInfo(Request $request)
    {
        $param = $request ->all();
        $data = [];
        if(!empty($param['username'])){
            $data['username'] = $param['username'];
        }
        if(!empty($param['picture'])){
            $data['picture'] = $param['picture'];
        }
        if(!empty($param['email'])){
            $data['email'] = $param['email'];
        }
        $result = User::edit($this ->member_id,$data);
        if($result){
            return 1;
        }
    }

    /**
     * 修改会员密码逻辑
     *
     */
    public function updateMemberPwd(Request $request)
    {
        $param = $request ->all();
        $getMember = User::getMember($this ->member_id);
        if(empty($getMember)){
            return -1;
        }
        $data = [];
        if(!empty($param['password'])){
            $data['password'] = bcrypt($param['password']);
            $result = User::edit($this ->member_id,$data);
            if($result){
                return 1;
            }
        }else{
            return -1;
        }
    }


}