<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        return view('app.home');
    }

    public function pic_one()
    {
        return view('app.pic_one');
    }
    public function pic_two()
    {
        return view('app.pic_two');
    }
    public function pic_three()
    {
        return view('app.pic_three');
    }
    public function pic_four()
    {
        return view('app.pic_four');
    }

}
