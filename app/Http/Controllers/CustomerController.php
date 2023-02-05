<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('users')->orderBy('created_at', 'desc')->get();  
        return view('roleModule.admin.customer',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $customer = User::find($id);
        return view('roleModule.admin.edit_customer',compact('customer','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
                
            'status' => 'required',
            ]);
            $customer = User::find($id);
            
            $customer->status = $request->status;
            if($request->status == 0 ){
                Alert::toast('Customer Status Change to Pending', 'success');
            }elseif($request->status == 1){
                Alert::toast('Customer Status Change to Approve', 'success');
            }else{
                Alert::toast('Customer Status Change to Reject', 'success');
            }
            $customer->save();

           
            return redirect()->back()->with('success', 'your message,here');  
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = User::find($id);
        $customer->delete();
        Alert::Alert('Success', 'Customer Account Has been Deleted Successfully.')->persistent(true,false); 
        return redirect()->route('all_customer.index');
    }
}
