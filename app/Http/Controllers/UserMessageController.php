<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserMessageController extends Controller
{
    public function usermsg(User $user)
    {
        return view('user.usermsg', compact('user'));
    }

    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'password' => 'nullable|min:6|confirmed',
            'created_at' => 'required|date',
            'updated_at' => 'required|date'
        ]);

        $user->name = $request->name;
        $user->created_at = $request->created_at;
        $user->updated_at = $request->updated_at;
        if($request->password)
        {
            $user->password = bcrypt($request->password);
        }
        $user->save();
        session()->flash('success', '成功更新资料！');
        return redirect()->route('home');
    }
}
