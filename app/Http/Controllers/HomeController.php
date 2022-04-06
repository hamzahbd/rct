<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function home()
    {
        return view('welcome', [
            'title' => "welcome"
        ]);
    }

    public function news()
    {
        return view('news', [
            "title" => "news"
        ]);
    }

    public function service()
    {
        return view('service', [
            "title" => "service"
        ]);
    }

    public function project()
    {
        return view('project', [
            "title" => "project"
        ]);
    }

    public function login()
    {
        return view('login', [
            "title" => "login"
        ]);
    }

    public function aboutus()
    {
        return view('aboutus', [
            "title" => "aboutus"
        ]);
    }

    public function contact()
    {
        return view('contact', [
            "title" => "contact"
        ]);
    }
    //
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('LoginError', 'Login Gagal')->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
