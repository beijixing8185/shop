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
use Illuminate\Http\Request;
use App\Models\Admin\AdminUser;


class ServiceController extends Controller
{

    public function addService(){

        return view('admin.serviceForm');
    }

    /**
     * @param Request $req
     * @return \Illuminate\Http\RedirectResponse
     * 登录
     */
    public function postAddService(Request $req){

        dd($req->all());


    }

    public function upload(Request $req){


        return response()->json(['error' => 0, "url" => 123, 'thumb_url' => 456]);


    }





}