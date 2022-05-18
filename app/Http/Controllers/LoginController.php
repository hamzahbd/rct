<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    //
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $ingat = $request->remember ? true : false;

        if (Auth::attempt($credentials, $ingat)) {
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

    // Google Login
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Google callback
    public function handleGoogleCallback()
    {

        $googleuser = Socialite::driver('google')->user();


        $user = User::updateOrCreate([

            'email' => $googleuser->email,
        ], [
            'name' => $googleuser->name,
            'google_id' => $googleuser->id,
            'is_admin' => 0,
        ]);



        Auth::login($user);

        return redirect()->intended('/');
    }
}
