<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
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

    public function conatactUs()
    {
        return view('frontend.pages.contact_us');
    }
    public function gallery()
    {
        return view('frontend.pages.gallery');
    }
}
