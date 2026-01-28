<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class adminController extends Controller
{
    public function dashboard()
    {
        return view('front.dashboard');
    }
}
