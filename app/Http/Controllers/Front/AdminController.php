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

    public function submitted()
    {
        return view('front.submitted');
    }

    public function offers()
    {
        return view('front.offers');
    }

    public function deferred()
    {
        return view('front.deferred');
    }

    public function applied()
    {
        return view('front.applied');
    }
    public function refund()
    {
        return view('front.refund');
    }

    public function visagranted()
    {
        return view('front.visagranted');
    }

    public function archived()
    {
        return view('front.archived');
    }

    public function pending()
    {
        return view('front.pending');
    }

    public function completepayment()
    {
        return view('front.completepayment');
    }
}