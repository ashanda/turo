@extends('layout.dashboard')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Vehicle</h4>

  <!-- Basic Layout & Basic with Icons -->
  <div class="row">
    <!-- Basic Layout -->
    <div class="col-xxl">
      <div class="card mb-4">

        <div class="card-body">
          <form action="{{ route('listing.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-name">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="title" id="basic-default-name" placeholder="John Doe">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <div class="row">
                  <label class="col-sm-4 col-form-label" for="basic-default-company">Make</label>
                  <div class="col-sm-8">
                    <select id="category" class="form-select" name="make" id="category">
                      @foreach($makes as $make)
                      <option value="{{ $make['id'] }}">{{ $make['make'] }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="basic-default-company">Model</label>
                  <div class="col-sm-10">
                    <select name="model" id="subcategory" class="form-select">
                      <option value=""></option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-message">Description</label>
              <div class="col-sm-10">
                <textarea id="basic-default-message" name="description" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <div class="row">
                  <label class="col-sm-4 col-form-label" for="basic-default-company">Year</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="year" id="datepicker" />
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="basic-default-company">Category</label>
                  <div class="col-sm-10">
                    <select id="defaultSelect" class="form-select" name="category">
                      @foreach($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->category }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <div class="row">
                  <label class="col-sm-4 col-form-label" for="basic-default-company">Vehicle Condition</label>
                  <div class="col-sm-8">
                    <select id="defaultSelect" class="form-select" name="vehicle_condition">

                      <option value="1">Brand New</option>
                      <option value="2">Secound Hand</option>

                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="basic-default-company">Type</label>
                  <div class="col-sm-10">
                    <select id="defaultSelect" class="form-select" name="type">
                      @foreach($types as $type)
                      <option value="{{ $type->id }}">{{ $type->type }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <div class="row">
                  <label class="col-sm-4 col-form-label" for="basic-default-company">No Seat</label>
                  <div class="col-sm-8">
                    <input class="form-control" type="number" name="seat" id="html5-number-input" data-np-checked="1" min="1">
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="basic-default-company">Location</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="basic-default-company" placeholder="location" name="location">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <div class="row">
                  <label class="col-sm-4 col-form-label" for="basic-default-company">Vehicle Experince</label>
                  <div class="col-sm-8">
                    <select id="defaultSelect" class="form-select" name="experince">
                      @foreach($experinces as $experince)
                      <option value="{{ $experince->id }}">{{ $experince->experience }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="basic-default-company">Vehicle Features</label>
                  <div class="col-sm-10">
                    <select id="defaultSelect" class="form-select" name="feature">
                      @foreach($features as $feature)
                      <option value="{{ $feature->id }}">{{ $feature->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 mb-3">
                <div class="row">
                  <label class="col-sm-2 col-form-label" for="basic-default-company">Transmission</label>
                  <div class="col-sm-10">
                    <select id="defaultSelect" class="form-select" name="transmission">
                      <option value="auto">Auto</option>
                      <option value="manual">Manual</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-email">Regular Price</label>
              <div class="col-sm-10">
                <div class="input-group input-group-merge">
                  <input type="number" id="basic-default-email" class="form-control" placeholder="10.00" step="0.01" min="1" name="regular_price">
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-phone">Discount Price</label>
              <div class="col-sm-10">
                <input type="number" id="basic-default-phone" class="form-control phone-mask" placeholder="10.00" step="0.01" min="1" name="discount_price">
              </div>
            </div>
            <!-- image 1 upload-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-4 col-form-label" for="image1">Image 1:</label>
                  <div class="col-sm-8">
                    <input type="file" class="form-control" id="image1" name="image1" onchange="previewImage('preview1', 'image1')">
                    <img class="upl_img" id="preview1" src="" alt="">
                  </div>
                </div>
              </div>
              <!-- image 2 upload-->
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-4 col-form-label" for="image2">Image 2:</label>
                  <div class="col-sm-8">
                    <input type="file" class="form-control" id="image2" name="image2" onchange="previewImage('preview2', 'image2')">
                    <img class="upl_img" id="preview2" src="" alt="">
                  </div>
                </div>
              </div>
              <!-- image 3 upload-->
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-4 col-form-label" for="image3">Image 3:</label>
                  <div class="col-sm-8">
                    <input type="file" class="form-control" id="image3" name="image3" onchange="previewImage('preview3', 'image3')">
                    <img class="upl_img" id="preview3" src="" alt="">
                  </div>
                </div>
              </div>
              <!-- image 4 upload-->
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-4 col-form-label" for="image4">Image 4:</label>
                  <div class="col-sm-8">
                    <input type="file" class="form-control" id="image4" name="image4" onchange="previewImage('preview4', 'image4')">
                    <img class="upl_img" id="preview4" src="" alt="">
                  </div>
                </div>
              </div>
              <!-- image 5 upload-->
              <div class="col-md-6">
                <div class="row">
                  <label class="col-sm-4 col-form-label" for="image5">Image 5:</label>
                  <div class="col-sm-8">
                    <input type="file" class="form-control" id="image5" name="image5" onchange="previewImage('preview5', 'image5')">
                    <img class="upl_img" id="preview5" src="" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-end">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Send</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection