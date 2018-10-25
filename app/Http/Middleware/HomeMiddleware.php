<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/24
 * Time: 10:21
 */

namespace App\Http\Middleware;

use Closure;

class HomeMiddleware
{

    /**
     * @param $request
     * @param Closure $next
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function handle($request,Closure $next)
    {
        if(!session('phone') || !session('user_id')){
            return redirect('/login/index');
        }
        return $next($request);
    }
}