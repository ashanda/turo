<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserAuthController extends Controller
{
    public function index()
    {
        return view('roleModule.user.home');
    }


    public function create(Request $request){
        
        

        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->profile_pic = 'avatar.png';
        $user->contact_no = $request->contact_no;

        $user->location = $request->location;
        $user->passport_no = $request->passport_no;
        $user->passport_photo = $request->passport_photo;
        $user->nic = $request->nic;
        $user->nic_front = $request->nic_front;
        $user->nic_back = $request->nic_back;

        $user->driving_license_no = $request->driving_license_no;
        $user->driving_license_front = $request->driving_license_front;
        $user->driving_license_back = $request->driving_license_back;
        $user->driving_license_expire_date = $request->driving_license_expire_date;

        $user->save();

        Alert::success('Success', 'Your Data Send to Admin and Wait for the Approve');

        return redirect()->route('user.login');
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
        if(Auth::attempt($req->only(['email', 'password'])) && Auth::user()->status == 1)
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
