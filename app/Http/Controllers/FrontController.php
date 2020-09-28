<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    function index() 
    {
        return view('front/index');
    }
    
    function contact_us() 
    {
        return view('front/contact_us');
    }

    function news() 
    {
        return view('front/news');
    }

    function news_info() 
    {
        return view('front/news_info');
    }

    function template() 
    {
        return view('front/template');
    }
    
}
