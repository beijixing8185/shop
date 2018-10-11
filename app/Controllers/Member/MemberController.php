<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/9
 * Time: 16:13
 */

namespace app\Controllers\Member;


use App\Http\Controllers\Controller;

class MemberController extends Controller
{

    public function index()
    {

    }


    /**
     * 会员信息
     */
    public function getMember()
    {
        return view('member.index');
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
}