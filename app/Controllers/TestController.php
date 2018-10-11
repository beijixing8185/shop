<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/10
 * Time: 17:38
 */

namespace app\Controllers;


use App\Models\User;

class TestController
{
    public function index()
    {

        $where = 'mobile = 15010321498 and password = 1';
        $user = User::getWhere($where);
        dd($user);
    }
}