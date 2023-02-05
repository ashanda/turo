<?php

namespace App\Http\Controllers;

use App\Models\VehicleExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class VehicleExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('vehicle_experiences')->orderBy('created_at', 'desc')->get();  
        return view('vehicleModule.experince.index',compact('data'));
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
     * @param  \App\Models\VehicleExperience  $vehicleExperience
     * @return \Illuminate\Http\Response
     */
    public function show(VehicleExperience $vehicleExperience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VehicleExperience  $vehicleExperience
     * @return \Illuminate\Http\Response
     */
    public function edit(VehicleExperience $vehicleExperience)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VehicleExperience  $vehicleExperience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VehicleExperience $vehicleExperience)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VehicleExperience  $vehicleExperience
     * @return \Illuminate\Http\Response
     */
    public function destroy(VehicleExperience $vehicleExperience)
    {
        //
    }
}
