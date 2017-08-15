<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home()
    {
        return view('userpage.home');
    }

    public function news()
    {
        return view('userpage.news');
    }

    public function quoteRequest()
    {
        return view('userpage.quote-request');
    }
    public function contactUs()
    {
        return view('userpage.contact-us');
    }
}
