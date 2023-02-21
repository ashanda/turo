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
          <div class="form-group mb-3">
            <label class="text-primary form-label" for="startdaytime">Trip start</label>
            <input type="datetime-local" class="form-control" id="startdaytime" name="startdaytime">
          </div>
          <div class="form-group mb-3 ">
            <label class="text-primary form-label" for="enddaytime">Trip end</label>
            <input type="datetime-local" class="form-control" id="enddaytime" name="enddaytime">
          </div>
          <div class="form-group mb-3">
            <label class="text-dark form-label fw-bold" for="loc">Pickup & return location</label>
            <input type="text" class="form-control" id="loc" placeholder="Enter location here">
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-9">
        <div class="shop_sec">
          <div class="custom_container">
            <div class="shop_content">
              <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4 p-2">
                  <div class="product">
                    <img class="w-100" src="{{ asset('assets/img/product.jpg')}}" alt="" />
                    <p class="price">$22,000</p>
                  </div>
                  <div class="pro_det">
                    <div class="row m-0 p-3 bg-dark">
                      <div class="col">
                        <h6 class="text-light">2017</h5>
                      </div>
                      <div class="col">
                        <h6 class="text-light">1000km</h5>
                      </div>
                      <div class="col">
                        <h6 class="text-light">Petrol</h5>
                      </div>
                      <div class="col">
                        <h6 class="text-light">Automatic</h5>
                      </div>
                      <div class="col">
                        <h6 class="text-light">500</h5>
                      </div>
                    </div>
                  </div>
                  <div class="prod_name text-center pt-4">
                    <h4 class="text-decoration-underline">Car Name</h4>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 p-2">
                  <div class="product">
                    <img class="w-100" src="{{ asset('assets/img/product.jpg')}}" alt="" />
                    <p class="price">$22,000</p>
                  </div>
                  <div class="pro_det">
                    <div class="row m-0 p-3 bg-dark">
                      <div class="col">
                        <h6 class="text-light">2017</h5>
                      </div>
                      <div class="col">
                        <h6 class="text-light">1000km</h5>
                      </div>
                      <div class="col">
                        <h6 class="text-light">Petrol</h5>
                      </div>
                      <div class="col">
                        <h6 class="text-light">Automatic</h5>
                      </div>
                      <div class="col">
                        <h6 class="text-light">500</h5>
                      </div>
                    </div>
                  </div>
                  <div class="prod_name text-center pt-4">
                    <h4 class="text-decoration-underline">Car Name</h4>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 p-2">
                  <div class="product">
                    <img class="w-100" src="{{ asset('assets/img/product.jpg')}}" alt="" />
                    <p class="price">$22,000</p>
                  </div>
                  <div class="pro_det">
                    <div class="row m-0 p-3 bg-dark">
                      <div class="col">
                        <h6 class="text-light">2017</h5>
                      </div>
                      <div class="col">
                        <h6 class="text-light">1000km</h5>
                      </div>
                      <div class="col">
                        <h6 class="text-light">Petrol</h5>
                      </div>
                      <div class="col">
                        <h6 class="text-light">Automatic</h5>
                      </div>
                      <div class="col">
                        <h6 class="text-light">500</h5>
                      </div>
                    </div>
                  </div>
                  <div class="prod_name text-center pt-4">
                    <h4 class="text-decoration-underline">Car Name</h4>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 p-2">
                  <div class="product">
                    <img class="w-100" src="{{ asset('assets/img/product.jpg')}}" alt="" />
                    <p class="price">$22,000</p>
                  </div>
                  <div class="pro_det">
                    <div class="row m-0 p-3 bg-dark">
                      <div class="col">
                        <h6 class="text-light">2017</h5>
                      </div>
                      <div class="col">
                        <h6 class="text-light">1000km</h5>
                      </div>
                      <div class="col">
                        <h6 class="text-light">Petrol</h5>
                      </div>
                      <div class="col">
                        <h6 class="text-light">Automatic</h5>
                      </div>
                      <div class="col">
                        <h6 class="text-light">500</h5>
                      </div>
                    </div>
                  </div>
                  <div class="prod_name text-center pt-4">
                    <h4 class="text-decoration-underline">Car Name</h4>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 p-2">
                  <div class="product">
                    <img class="w-100" src="{{ asset('assets/img/product.jpg')}}" alt="" />
                    <p class="price">$22,000</p>
                  </div>
                  <div class="pro_det">
                    <div class="row m-0 p-3 bg-dark">
                      <div class="col">
                        <h6 class="text-light">2017</h5>
                      </div>
                      <div class="col">
                        <h6 class="text-light">1000km</h5>
                      </div>
                      <div class="col">
                        <h6 class="text-light">Petrol</h5>
                      </div>
                      <div class="col">
                        <h6 class="text-light">Automatic</h5>
                      </div>
                      <div class="col">
                        <h6 class="text-light">500</h5>
                      </div>
                    </div>
                  </div>
                  <div class="prod_name text-center pt-4">
                    <h4 class="text-decoration-underline">Car Name</h4>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 p-2">
                  <div class="product">
                    <img class="w-100" src="{{ asset('assets/img/product.jpg')}}" alt="" />
                    <p class="price">$22,000</p>
                  </div>
                  <div class="pro_det">
                    <div class="row m-0 p-3 bg-dark">
                      <div class="col">
                        <h6 class="text-light">2017</h5>
                      </div>
                      <div class="col">
                        <h6 class="text-light">1000km</h5>
                      </div>
                      <div class="col">
                        <h6 class="text-light">Petrol</h5>
                      </div>
                      <div class="col">
                        <h6 class="text-light">Automatic</h5>
                      </div>
                      <div class="col">
                        <h6 class="text-light">500</h5>
                      </div>
                    </div>
                  </div>
                  <div class="prod_name text-center pt-4">
                    <h4 class="text-decoration-underline">Car Name</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection