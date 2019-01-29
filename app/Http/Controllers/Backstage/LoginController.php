<?php

namespace App\Http\Controllers\Backstage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use Hash;

class LoginController extends Controller
{
    //显示登录页面
    public function index(Request $request)
    {
        if ($request->isMethod('post')) {
            //读取用户名信息
            $res = DB::table('users')->where('username', $request->input('name'))->first();
            if (!$res) {
                return back()->with('alert', '用户名或密码不正确');
            } else {
               //检测密码
                if (Hash::check($request->input('password'), $res->password)) {
                      session(['uid' => $res->id,'uname'=>$res->username,'auth'=>$res->auth]);
                    if (session('request')) {
                        return redirect(session('redirect'));
                    }
                          return redirect('/admin');
                } else {
                    return back()->with('alert', '用户名或密码不正确');
                }
            }
        } else {
            return view('backstage.login');
        }
    }

   /**
    * 退出登录
    */
    public function logout()
    {
        session()->flush();
        return back();
    }
}
