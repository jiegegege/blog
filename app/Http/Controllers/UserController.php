<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
           'except' => ['create','store']
        ]);

        $this->middleware('guest',[
            'only' => ['create','store']
        ]);
    }

    public function index()
    {
        $users = User::paginate(10);
        return view('app.index', compact('users'));
    }


    public function create()
    {
        return view('app.create');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request,[
            'name' => 'required|min:3',
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed|min:6'

        ]);

        $data['password'] = bcrypt($data['password']);
        User::create($data);
        // \Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        session()->flash('success', '修改成功！');
        return redirect()->route('home');
    }

    public function show(User $user)
    {
        return view('app.show', compact('user'));

    }

    public function edit(User $user)
    {
        $this->authorize('update', $user);
        return view('app.edit', compact('user'));
    }


    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'password' => 'nullable|min:6|confirmed'
        ]);

        $user->name = $request->name;
        if($request->password)
        {
            $user->password = bcrypt($request->password);
        }
        $user->save();
        session()->flash('success', '成功更新资料！');
        return redirect()->route('home');
    }

    public function destroy(User $user)
    {
        $this->authorize('delete', $user);
        $user->delete();
        session()->flash('success', '删除用户成功！');
        return redirect()->back();
    }
}
