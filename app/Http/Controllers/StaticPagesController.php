<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        // return view('app.home');
        return view('app.neohome');
    }

    public function pic_one(Request $request)
    {
        $pci_selected = $request->pic;
        return view('app' . '.' . $pci_selected)->with('currPic', $pci_selected);
    }

    public function slidePhoto($picNum = 0)
    {
        $adjustedPicNum = ($picNum == 1 ? 11 : $picNum - 1);
        // adjustedPicNum = ($request->picNum == 1 ? 11 : $request->picNum - 1);
        return view('app.home')->with('currPic', $adjustedPicNum);
    }

    public function about()
    {
        return view('app.about');
    }

    public function activity()
    {
        return view('app.activity1');
    }

    public function led()
    {
        return view('app.led');
    }


    public function introduction()
    {
        return view('app.introduction');
    }

    public function study()
    {
        return view('app.study');
    }


    public function environment()
    {
        return view('app.environment');
    }
}
