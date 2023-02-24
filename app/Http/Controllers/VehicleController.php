<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\Vendor;
use App\Models\VehicleMake;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Cviebrock\EloquentSluggable\Services\SlugService;

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


    public function all_vehicles(){

        $vehicles = DB::table('vehicles')->orderBy('created_at', 'desc')->get();  
        return view('frontend.vehicle',compact('vehicles'));

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
       
       
        $vehicle = new Vehicle;
        $vehicle->title = $request->title;
        $vehicle->vendor_id= auth()->user()->id;
        $vehicle->slug = SlugService::createSlug(Vehicle::class, 'slug', $request->title);
        $vehicle->make = $request->make;
        $vehicle->model = $request->model;
        $vehicle->description = $request->description;
        $vehicle->year = $request->year;
        $vehicle->category = $request->category;
        $vehicle->type = $request->type;
        $vehicle->no_seat = $request->seat;
        $vehicle->location = $request->location;
        $vehicle->experince = $request->experince;
        $vehicle->vehicle_condition = $request->vehicle_condition;
        $vehicle->feature = $request->feature;
        $vehicle->transmission = $request->transmission;
        $vehicle->regular_price = $request->regular_price;
        $vehicle->discount_price = $request->discount_price;
        $vehicle->save();

            Alert::toast('Vehicle Add Sucess', 'success'); 
            return redirect()->route('listing.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $slug = Vehicle::where('slug', $slug)->first();
        return view('frontend.single', ['vehicle' => $slug]);
    }

    public function show_vehicle($slug)
    {
        $slug = Vehicle::where('slug', $slug)->first();
        $vendor = Vendor::where('id',$slug->vendor_id)->first();
        return view('frontend.single', ['vehicle' => $slug], compact('slug','vendor'));
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
