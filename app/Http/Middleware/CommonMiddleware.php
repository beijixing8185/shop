<?php

namespace App\Http\Middleware;

use App\Models\About;
use App\Models\Link;
use App\Controllers\Common\BaseController;
use Closure;
use Illuminate\Support\Facades\Cache;

class CommonMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $minutes = 2592000; //一个月的秒数

        //外链列表
        if(!Cache::get('link')){
            $link = Link::getList(1)->toArray();
            Cache::put('link', $link, $minutes);
        }

        //栏目,需要加商品加入此数组，然后遍历到前台
        if(!Cache::get('category')){
            $getTree = new BaseController();
            $category = $getTree ->getTree();
            Cache::put('category', $category, $minutes);
        }

        //关于我们栏目
        if(!Cache::get('about_list')){
            $about_list = About::getList()->toArray();
            Cache::put('about_list', $about_list, $minutes);
        }

        return $next($request);
    }
}
