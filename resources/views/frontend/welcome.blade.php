@extends('frontend.app') 
@section('content')
    <!-- Top Banner -->
    <div class="bann" style="background-image: url(assets/img/banner.jpg)">
        <div class="bann_filter p-5">
          <div class="container">
            <div class="filt bg-danger p-4">
              <form action="">
                <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-3">
                    <label class="text-light form-label" for="">Brand</label>
                    <select
                      class="form-select bg-danger text-light"
                      aria-label="Default select example"
                    >
                    @foreach($s as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->make }}</option>
                    @endforeach
                    </select>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                    <label class="text-light form-label" for="">model</label>
                   
                    <select name="subcategory" id="subcategory" class="form-select bg-danger text-light" aria-label="Default select example">
                      <option value=""></option>
                    </select>
              
                    </select>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-3">
                    <label for="customRange1" class="text-light form-label"
                      >price range</label
                    >
                    <input type="range" class="form-range" id="customRange1" />
                  </div>
                  <div class="col-sm-4 col-md-4 col-lg-2">
                    <label for="customRange1" class="text-light form-label"
                      >looking for</label
                    >
                    <div class="row">
                      <div class="col">
                        <div class="form-check">
                          <input
                            class="form-check-input"
                            type="radio"
                            name="flexRadioDefault"
                            id="flexRadioDefault1"
                          />
                          <label class="form-check-label" for="flexRadioDefault1">
                            Buy
                          </label>
                        </div>
                      </div>
                      <div class="col">
                        <div class="form-check">
                          <input
                            class="form-check-input"
                            type="radio"
                            name="flexRadioDefault"
                            id="flexRadioDefault1"
                          />
                          <label class="form-check-label" for="flexRadioDefault1">
                            Rent
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-2 col-md-2 col-lg-1 pt-2">
                    <button class="form_sub" type="submit">
                      <i class="fa fa-play-circle-o fa-3x" aria-hidden="true"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  
      <!-- welcome section -->
      <div class="wel_sec my-5 py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="content">
                <h5 class="sub_head">Who we are</h5>
                <h2 class="head pb-2 fw-bold">Welcome To LEVC</h2>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Assumenda accusantium, pariatur sit ipsum aperiam autem unde
                  obcaecati maiores, a sapiente eos voluptas vero possimus sequi
                  delectus minus aspernatur vitae ut!
                </p>
                <ul>
                  <div class="row">
                    <div class="col-md-6">
                      <li>Lorem ipsum dolor sit amet</li>
                      <li>Lorem ipsum dolor sit amet</li>
                    </div>
                    <div class="col-md-6">
                      <li>Lorem ipsum dolor sit amet</li>
                      <li>Lorem ipsum dolor sit amet</li>
                    </div>
                  </div>
                </ul>
                <div class="row pt-4">
                  <div class="col-5 border-end">
                    <img class="img-fluid" src="{{ asset('assets/img/sign.png')}}" alt="" />
                  </div>
                  <div class="col-7">
                    <h5 class="pb-2">John Doe</h5>
                    <p>President</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="wel_img text-center mt-5">
                <img src="{{ asset('assets/img/car.jpg')}}" alt="" class="img-fluid" />
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Icon banner section -->
      <div class="i_ban py-5">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3 py-4">
              <div class="row">
                <div class="col-4">
                  <img src="{{ asset('assets/img/icon1.png')}}" alt="" class="img-fluid" />
                </div>
                <div class="col-8 pt-3">
                  <h4 class="text-light">10,000+</h4>
                  <span class="text-secondary">monthly visits</span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 py-4">
              <div class="row">
                <div class="col-4">
                  <img src="{{ asset('assets/img/icon2.png')}}" alt="" class="img-fluid" />
                </div>
                <div class="col-8 pt-3">
                  <h4 class="text-light">10,000+</h4>
                  <span class="text-secondary">monthly visits</span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 py-4">
              <div class="row">
                <div class="col-4">
                  <img src="{{ asset('assets/img/icon3.png')}}" alt="" class="img-fluid" />
                </div>
                <div class="col-8 pt-3">
                  <h4 class="text-light">10,000+</h4>
                  <span class="text-secondary">monthly visits</span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3 py-4">
              <div class="row">
                <div class="col-4">
                  <img src="{{ asset('assets/img/icon4.png')}}" alt="" class="img-fluid" />
                </div>
                <div class="col-8 pt-3">
                  <h4 class="text-light">10,000+</h4>
                  <span class="text-secondary">monthly visits</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <!-- shop section -->
      <div class="shop_sec py-5">
        <div class="container-fluid">
          <div class="custom_container">
            <div class="topic py-5 text-center">
              <h5 class="sub_head">Come With</h5>
              <h2 class="head pb-2 fw-bold">Hot Deals</h2>
            </div>
            <div class="shop_content">
              <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4 p-4">
                  <div class="product">
                    <img class="w-100" src="{{ asset('assets/img/product.jpg')}}" alt="" />
                    <p class="price">$22,000</p>
                  </div>
                  <div class="pro_det">
                    <div class="row m-0 p-3 bg-dark">
                      <div class="col"><h5 class="text-light">2017</h5></div>
                      <div class="col"><h5 class="text-light">1000km</h5></div>
                      <div class="col"><h5 class="text-light">Petrol</h5></div>
                      <div class="col"><h5 class="text-light">Automatic</h5></div>
                      <div class="col"><h5 class="text-light">500</h5></div>
                    </div>
                  </div>
                  <div class="prod_name text-center pt-4">
                    <h4 class="text-decoration-underline">Car Name</h4>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 p-4">
                  <div class="product">
                    <img class="w-100" src="{{ asset('assets/img/product.jpg')}}" alt="" />
                    <p class="price">$22,000</p>
                  </div>
                  <div class="pro_det">
                    <div class="row m-0 p-3 bg-dark">
                      <div class="col"><h5 class="text-light">2017</h5></div>
                      <div class="col"><h5 class="text-light">1000km</h5></div>
                      <div class="col"><h5 class="text-light">Petrol</h5></div>
                      <div class="col"><h5 class="text-light">Automatic</h5></div>
                      <div class="col"><h5 class="text-light">500</h5></div>
                    </div>
                  </div>
                  <div class="prod_name text-center pt-4">
                    <h4 class="text-decoration-underline">Car Name</h4>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 p-4">
                  <div class="product">
                    <img class="w-100" src="{{ asset('assets/img/product.jpg')}}" alt="" />
                    <p class="price">$22,000</p>
                  </div>
                  <div class="pro_det">
                    <div class="row m-0 p-3 bg-dark">
                      <div class="col"><h5 class="text-light">2017</h5></div>
                      <div class="col"><h5 class="text-light">1000km</h5></div>
                      <div class="col"><h5 class="text-light">Petrol</h5></div>
                      <div class="col"><h5 class="text-light">Automatic</h5></div>
                      <div class="col"><h5 class="text-light">500</h5></div>
                    </div>
                  </div>
                  <div class="prod_name text-center pt-4">
                    <h4 class="text-decoration-underline">Car Name</h4>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 p-4">
                  <div class="product">
                    <img class="w-100" src="{{ asset('assets/img/product.jpg')}}" alt="" />
                    <p class="price">$22,000</p>
                  </div>
                  <div class="pro_det">
                    <div class="row m-0 p-3 bg-dark">
                      <div class="col"><h5 class="text-light">2017</h5></div>
                      <div class="col"><h5 class="text-light">1000km</h5></div>
                      <div class="col"><h5 class="text-light">Petrol</h5></div>
                      <div class="col"><h5 class="text-light">Automatic</h5></div>
                      <div class="col"><h5 class="text-light">500</h5></div>
                    </div>
                  </div>
                  <div class="prod_name text-center pt-4">
                    <h4 class="text-decoration-underline">Car Name</h4>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 p-4">
                  <div class="product">
                    <img class="w-100" src="{{ asset('assets/img/product.jpg')}}" alt="" />
                    <p class="price">$22,000</p>
                  </div>
                  <div class="pro_det">
                    <div class="row m-0 p-3 bg-dark">
                      <div class="col"><h5 class="text-light">2017</h5></div>
                      <div class="col"><h5 class="text-light">1000km</h5></div>
                      <div class="col"><h5 class="text-light">Petrol</h5></div>
                      <div class="col"><h5 class="text-light">Automatic</h5></div>
                      <div class="col"><h5 class="text-light">500</h5></div>
                    </div>
                  </div>
                  <div class="prod_name text-center pt-4">
                    <h4 class="text-decoration-underline">Car Name</h4>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 p-4">
                  <div class="product">
                    <img class="w-100" src="{{ asset('assets/img/product.jpg')}}" alt="" />
                    <p class="price">$22,000</p>
                  </div>
                  <div class="pro_det">
                    <div class="row m-0 p-3 bg-dark">
                      <div class="col"><h5 class="text-light">2017</h5></div>
                      <div class="col"><h5 class="text-light">1000km</h5></div>
                      <div class="col"><h5 class="text-light">Petrol</h5></div>
                      <div class="col"><h5 class="text-light">Automatic</h5></div>
                      <div class="col"><h5 class="text-light">500</h5></div>
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

@endsection