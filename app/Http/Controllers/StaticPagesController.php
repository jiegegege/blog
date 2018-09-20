<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        return view('app.home');
    }

    public function pic_one(Request $request)
    {
        return view('app' . '.' . $request->pic);
        return redirect()->route('picture');;
    }
}
