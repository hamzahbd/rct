<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home()
    {
        return view('welcome');
    }

    public function news()
    {
        return view('news');
    }

    public function service()
    {
        return view('service');
    }

    public function project()
    {
        return view('project');
    }

    public function login()
    {
        return view('login');
    }

    public function aboutus()
    {
        return view('aboutus');
    }
    //
}
