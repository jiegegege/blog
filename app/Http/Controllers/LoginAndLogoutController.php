<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginAndLogoutController extends Controller
{
    public function login()
    {
        return view('app.login');
    }
    public function store(Request $request)
    {
        $data = $this->validate($request,[
            'email' => 'email|required',
            'password' => 'required|min:6'

        ]);

        if (\Auth::attempt($data))
        {
            session()->flash('success', '成功登陆！');
            return redirect()->route('home');
        }

        session()->flash('danger','账号或密码错误！');
        return back();
    }

    public function logout()
    {
        \Auth::logout();
        session()->flash('success', '成功退出！');
        return redirect('/');
    }
}
