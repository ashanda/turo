<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\VehicleMake;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role == 2){

            $data = DB::table('vehicles')->orderBy('created_at', 'desc')->get();  
            return view('vehicleModule.vehicle.index',compact('data'));


        }
        if(Auth::user()->role == 1){

            $data = DB::table('vehicles')->where('vendor_id',Auth::user()->id)->orderBy('created_at', 'desc')->get();  
            return view('vehicleModule.vehicle.index',compact('data'));
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('vehicle_categories')->get();
        $types =  DB::table('vehicle_types')->get();
        $features = DB::table('vehicle_features')->get();
        $experinces =  DB::table('vehicle_experiences')->get();
        $makes = VehicleMake::all();
        return view('vehicleModule.vehicle.create',compact('categories','types','features','experinces','makes'));
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
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        //
    }
}
