<?php

namespace App\Http\Controllers;

use App\Models\VehicleFeature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class VehicleFeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('vehicle_features')->orderBy('created_at', 'desc')->get();  
        return view('vehicleModule.feature.index',compact('data'));
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
     * @param  \App\Models\VehicleFeature  $vehicleFeature
     * @return \Illuminate\Http\Response
     */
    public function show(VehicleFeature $vehicleFeature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VehicleFeature  $vehicleFeature
     * @return \Illuminate\Http\Response
     */
    public function edit(VehicleFeature $vehicleFeature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VehicleFeature  $vehicleFeature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VehicleFeature $vehicleFeature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VehicleFeature  $vehicleFeature
     * @return \Illuminate\Http\Response
     */
    public function destroy(VehicleFeature $vehicleFeature)
    {
        //
    }
}
