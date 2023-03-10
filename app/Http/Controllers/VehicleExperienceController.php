<?php

namespace App\Http\Controllers;

use App\Models\VehicleExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

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
        return view('vehicleModule.experince.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $request->validate(['experince' => 'required']);

            $experince = new VehicleExperience;
            $experince->experience= $request->experince;
            $experince->save();
            Alert::toast('Experince Add Sucess', 'success'); 
            return redirect()->route('experince.index');
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
    public function edit($id)
    {
        $experince = VehicleExperience::find($id);
        return view('vehicleModule.experince.edit',compact('experince','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VehicleExperience  $vehicleExperience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $experince = VehicleExperience::find($id);
        $experince->experience = $request->experince;
        $experince->save();
        Alert::toast('Experince Update Sucess', 'success'); 
        return redirect()->route('experince.index');
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
