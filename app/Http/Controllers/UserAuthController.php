<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    public function index()
    {
        return view('roleModule.user.home');
    }

    public function login()
    {
        return view('roleModule.user.login');
    }

    public function register()
    {
        return view('roleModule.user.register');
    }

    public function handleLogin(Request $req)
    {
        if(Auth::attempt(
            $req->only(['email', 'password'])
        ))
        {
            return redirect()
                ->route('user.home');
        }

        return redirect()
            ->back()
            ->with('error', 'Invalid Credentials');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()
            ->route('user.login');
    }

}  
