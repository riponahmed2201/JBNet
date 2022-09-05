<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function ceoMessage()
    {
        return view('frontend.aboutUs.ceoMessage');
    }

    public function companyProfile()
    {
        return view('frontend.aboutUs.companyProfile');
    }
}
