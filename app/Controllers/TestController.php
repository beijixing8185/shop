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
        dd(date('Y-m-d H:i:s',1540618894));
    }
}