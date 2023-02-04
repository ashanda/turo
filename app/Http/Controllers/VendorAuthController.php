<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VendorAuthController extends Controller
{
    public function index()
    {
        return view('roleModule.vendor.home');
    }

    public function login()
    {
        return view('roleModule.vendor.login');
    }

    public function register()
    {
        return view('roleModule.vendor.register');
    }

    public function handleLogin(Request $req)
    {
        if(Auth::guard('webvendor')
               ->attempt($req->only(['email', 'password'])))
        {
            return redirect()
                ->route('vendor.home');
        }

        return redirect()
            ->back()
            ->with('error', 'Invalid Credentials');
    }

    public function logout()
    {
        Auth::guard('webvendor')
            ->logout();

        return redirect()
            ->route('vendor.login');
    }
}
