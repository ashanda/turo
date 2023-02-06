<?php

namespace App\Http\Controllers;

use App\Models\VehicleMake;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
class VehicleMakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('vehicle_makes')->orderBy('created_at', 'desc')->get();  
        return view('vehicleModule.make.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicleModule.make.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $request->validate(['make' => 'required']);

            $make = new VehicleMake;
            $make->make= $request->make;
            $make->save();
            Alert::toast('Make Add Sucess', 'success'); 
            return redirect()->route('make.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VehicleMake  $vehicleMake
     * @return \Illuminate\Http\Response
     */
    public function show(VehicleMake $vehicleMake)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VehicleMake  $vehicleMake
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $make = VehicleMake::find($id);
            return view('vehicleModule.make.edit',compact('make','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VehicleMake  $vehicleMake
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
                $make = VehicleMake::find($id);
                $make->make = $request->make;
                $make->save();
                Alert::toast('Make Update Sucess', 'success'); 
                return redirect()->route('make.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VehicleMake  $vehicleMake
     * @return \Illuminate\Http\Response
     */
    public function destroy(VehicleMake $vehicleMake)
    {
        //
    }
}
