<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pages extends Controller
{
    function pricing()
    {
        return view('pricing');
    }
    function blog_details()
    {
        return view('blog-details');
    }
    function contact()
    {
        return view('contact');
    }
    function about()
    {
        return view('about');
    }
    function service()
    {
        return view('service');
    }
    function service_details()
    {
        return view('service-details');
    }
    function project()
    {
        return view('project');
    }
    function blog()
    {
        return view('blog');
    }
    function team()
    {
        return view('team');
    }
    function faq()
    {
        return view('faq');
    }
    function error()
    {
        return view('error');
    }
    function contactForm(Request $res)
    {
        var_dump($res->input());
    }
}
