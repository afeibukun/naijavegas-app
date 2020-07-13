<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    //
    public function account()
    {
        return view('account');
    }

    public function wallet()
    {
        return view('wallet');
    }
}
