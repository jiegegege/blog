<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home($selectedPic = 0)
    {
        return view('app.home')->with('currPic', 'selectedPic');
    }

    public function pic_one(Request $request)
    {
        $pci_selected = $request->pic;
        return view('app' . '.' . $pci_selected)->with('currPic', 'pci_selected');
    }
}
