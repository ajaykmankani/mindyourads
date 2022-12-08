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
    function single_service()
    {
        return view('single-service');
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
    function shop()
    {
        return view('shop');
    }
    function service()
    {
        return view('services');
    }
    function portfolio()
    {
        return view('portfolio');
    }
    function case_studies()
    {
        return view('case-studies');
    }
    function single_studies()
    {
        return view('single-studies');
    }
}
