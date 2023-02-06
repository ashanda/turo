<?php

namespace App\Http\Controllers;

use App\Models\VehicleModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
class VehicleModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('vehicle_models')->orderBy('created_at', 'desc')->get();  
        return view('vehicleModule.model.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = DB::table('vehicle_makes')->orderBy('created_at', 'desc')->get();  
        return view('vehicleModule.model.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $request->validate(['model' => 'required']);

            $model = new Vehiclemodel;
            $model->model= $request->model;
            $model->make= $request->make_id;
            $model->save();
            Alert::toast('Model Add Sucess', 'success'); 
            return redirect()->route('model.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VehicleModel  $vehicleModel
     * @return \Illuminate\Http\Response
     */
    public function show(VehicleModel $vehicleModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VehicleModel  $vehicleModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $model = VehicleModel::find($id);
            $data = DB::table('vehicle_makes')->orderBy('created_at', 'desc')->get();  
            return view('vehicleModule.model.edit',compact('model','id','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VehicleModel  $vehicleModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
                $model = VehicleModel::find($id);
                $model->model = $request->model;
                $model->make = $request->make_id;
                $model->save();
                Alert::toast('Model Update Sucess', 'success'); 
                return redirect()->route('model.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VehicleModel  $vehicleModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(VehicleModel $vehicleModel)
    {
        //
    }
}
