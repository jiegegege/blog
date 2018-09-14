<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        return view('app.home');
    }

    public function about()
    {
        return view('app.about');
    }

    public function activity()
    {
        return view('app.activity');
    }

    public function store()
    {
        return view('app.store');
    }

    public function cooperation()
    {
        return view('app.cooperation');
    }
}
