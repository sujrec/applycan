<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class adminController extends Controller
{
    public function dashboard()
    {
        return view('front.dashboard');
    }

    public function search()
    {
        return view('front.search');
    }

    public function application()
    {
        return view('front.application');
    }

    public function applicant()
    {
        return view('front.applicant');
    }

    public function draft()
    {
        return view('front.draft');
    }
}
