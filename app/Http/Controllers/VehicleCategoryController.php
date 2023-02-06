<?php

namespace App\Http\Controllers;

use App\Models\VehicleCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class VehicleCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('vehicle_categories')->orderBy('created_at', 'desc')->get();  
        return view('vehicleModule.category.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicleModule.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $request->validate(['category' => 'required']);

            $category = new VehicleCategory;
            $category->category= $request->category;
            $category->save();
            Alert::toast('Vehicle Category Added Sucess', 'success'); 
            return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VehicleCategory  $vehicleCategory
     * @return \Illuminate\Http\Response
     */
    public function show(VehicleCategory $vehicleCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VehicleCategory  $vehicleCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $category = VehicleCategory::find($id);
            return view('vehicleModule.category.edit',compact('category','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VehicleCategory  $vehicleCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = VehicleCategory::find($id);
        $category->category = $request->category;
        $category->save();
        Alert::toast('category Update Sucess', 'success'); 
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VehicleCategory  $vehicleCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(VehicleCategory $vehicleCategory)
    {
        //
    }
}
