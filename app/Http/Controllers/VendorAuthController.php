<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Vendor;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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


    public function create(Request $request){
        
        

        $vendor = new Vendor();
        $vendor->email = $request->email;
        $vendor->password = Hash::make($request->password);
        $vendor->company_name = $request->company_name;
        $vendor->company_reg_no = $request->company_reg_no;
        $vendor->profile_pic = 'avatar.png';
        $vendor->company_reg_certificate = $request->company_reg_certificate;
        $vendor->location = $request->location;
        $vendor->rent_car_license = $request->rent_car_license;
        $vendor->rent_car_certificate = $request->rent_car_certificate;
        $vendor->contact_person = $request->contact_person;
        $vendor->contact_no = $request->contact_no;
        $vendor->chamber_of_commerce_certificate = $request->chamber_of_commerce_certificate;
        $vendor->save();

        Alert::success('Success', 'Your Data Send to Admin and Wait for the Approve');

        return redirect()->route('vendor.login');
    }


    public function handleLogin(Request $req)
    {
        if(Auth::guard('webvendor')->attempt($req->only(['email', 'password'])) && Auth::guard('webvendor')->user()->status == 1)
        {
            return redirect()->route('vendor.home');
        }

        return redirect()->back()->with('error', 'Invalid Credentials');
    }

    public function logout()
    {
        Auth::guard('webvendor')->logout();

        return redirect()->route('vendor.login');
    }
}
