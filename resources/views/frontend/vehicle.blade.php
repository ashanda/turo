@extends('frontend.app')
@section('content')
<!-- banner -->
<div class="cars_banner" style="background-image: url(assets/img/banner.jpg)">
</div>
<div class="cars_content py-4">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-3">
        <div class="filter_form">
          <form action="">
            <div class="form-group mb-3">
              <label class="text-primary form-label fw-bold" for="startdaytime">Trip start</label>
              <input type="datetime-local" class="form-control" id="startdaytime" name="startdaytime">
            </div>
            <div class="form-group mb-3 ">
              <label class="text-primary form-label fw-bold" for="enddaytime">Trip end</label>
              <input type="datetime-local" class="form-control" id="enddaytime" name="enddaytime">
            </div>
            <div class="form-group mb-3">
              <label class="text-dark form-label fw-bold" for="loc">Pickup & return location</label>
              <input type="text" class="form-control" id="loc" placeholder="Enter location here">
            </div>
            <input class="subm_btn bg-dark text-light mt-1 mb-2" type="submit" value="Submit">
          </form>
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-9">
        <div class="shop_sec">
          <div class="custom_container">
            <div class="shop_content">
              <div class="row">

                @foreach ($vehicles as $vehicle)

                <div class="col-sm-6 col-md-6 col-lg-4 pt-0 py-4">
                  <div class="product">
                    <a href="{{route('vehicle.show_single',$vehicle->slug)}}"><img class="w-100" src="{{ asset('assets/img/product.jpg')}}" alt="" /></a>
                    <p class="price">{{ $vehicle->discount_price }}</p>
                  </div>
                  <div class="pro_det">
                    <div class="row m-0 p-3 bg-dark">
                      <div class="col detl">
                        <h6 class="text-light">{{ $vehicle->year }}</h5>
                      </div>
                      <div class="col detl">
                        <h6 class="text-light">1000km</h5>
                      </div>
                      <div class="col detl">
                        <h6 class="text-light">Petrol</h5>
                      </div>
                      <div class="col detl">
                        <h6 class="text-light">{{ $vehicle->location }}</h5>
                      </div>
                      <div class="col detl">
                        <h6 class="text-light">500</h5>
                      </div>
                    </div>
                  </div>
                  <div class="prod_name text-center">
                    <a href="{{route('vehicle.show_single',$vehicle->slug)}}">
                      <h5 class="bg-theme text-light pb-2 mt-1 pt-1 shadow">{{ $vehicle->title }}</h5>
                    </a>
                  </div>
                </div>
                @endforeach

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection