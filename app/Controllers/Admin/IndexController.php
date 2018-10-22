<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/18
 * Time: 13:58
 */

namespace App\Controllers\Admin;

use App\Facades\Api;
use App\Http\Controllers\Common\ExpressController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Order\OrderController;
use App\Models\Admin\AdminUser;
use App\Models\Dct\DctArea;
use App\Models\Dct\DctExpress;
use App\Models\Order\M86Order;
use App\Models\Order\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class IndexController extends Controller
{


    public function index(){


        return view('admin.index');
    }




}