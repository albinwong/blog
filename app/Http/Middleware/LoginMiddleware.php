<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
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
        //检测
        if (session('uid') && session('auth') == 2) {
            return $next($request);
        } else {
            session(['redirect'=>$request->path()]);
            return redirect('/admin/login')->with('alert', '用户不存在或权限不足');
        }
    }
}
