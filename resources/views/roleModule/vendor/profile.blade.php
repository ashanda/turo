@extends('layout.dashboard')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
 
  <div class="row">
    <div class="col-md-12">

      <div class="card mb-4">
        <h5 class="card-header">Profile Details</h5>
        <!-- Account -->
        
        <div class="card-body">
          <div class="d-flex align-items-start align-items-sm-center gap-4">
            <img src="{{ profile_name() }}" alt="user-avatar" class="d-block rounded" id="profileImage" width="100" height="100">
            
          </div>
        </div>
        <hr class="my-0">
        <div class="card-body">
          <div id="profileImage"></div>
            <div class="row">
              <div class="mb-3 col-md-6">
                <label for="firstName" class="form-label">Company Name</label>
                <input class="form-control" type="text" id="firstName" name="firstName" value="{{ $profile_data->company_name }}" autofocus="" readonly>
              </div>
              <div class="mb-3 col-md-6">
                <label for="lastName" class="form-label">Company Reg No</label>
                <input class="form-control" type="text" name="lastName" id="lastName" value="{{ $profile_data->company_reg_no }}" readonly>
              </div>
              <div class="mb-3 col-md-6">
                <label for="lastName" class="form-label">Company Reg Certificate</label>
                <!-- <input class="form-control" type="text" name="lastName" id="lastName" value="{{ $profile_data->company_reg_certificate }}" readonly> -->
                <!-- Company Reg Certificate image -->
                <a id="comp_reg_cet" target="_blank" href="{{ asset('hosts/company_reg_certificate/'.$profile_data->company_reg_certificate) }}"><img class="img-fluid mt-2" src="{{ asset('kycs/img/'.$profile_data->company_reg_certificate) }}" alt=""></a>
              </div>
              <div class="mb-3 col-md-6">
                <label for="email" class="form-label">E-mail</label>
                <input class="form-control" type="text" id="email" name="email" value="{{ $profile_data->email }}" placeholder="john.doe@example.com" readonly>
              </div>
              <div class="mb-3 col-md-6">
                <label for="organization" class="form-label">Location</label>
                <input type="text" class="form-control" id="organization" name="organization" value="{{ $profile_data->location }}" readonly>
              </div>
              <div class="mb-3 col-md-6">
                <label for="organization" class="form-label">Contact Person Name</label>
                <input type="text" class="form-control" id="organization" name="organization" value="{{ $profile_data->contact_person }}" readonly>
              </div>
              <div class="mb-3 col-md-6">
                <label class="form-label" for="phoneNumber">Contact Number</label>
                <div class="input-group input-group-merge">

                  <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" value="{{ $profile_data->contact_no }}" readonly>
                </div>
              </div>
              <div class="mb-3 col-md-6">
                <label for="passport_no" class="form-label">Rent Car License</label>
                <input type="text" class="form-control" id="passport_no" value="{{ $profile_data->rent_car_license }}" name="passport_no" placeholder="passport number" readonly>
              </div>
              <div class="mb-3 col-md-6">
                <label for="passport_photo" class="form-label">Rent Car Certificate</label>
                <!-- <input class="form-control" type="text" id="passport_photo" name="passport_photo" value="{{ $profile_data->rent_car_certificate }}" placeholder="upload passport photo" readonly> -->
                <!-- Rent Car Certificate image -->
                <a id="rent_car_cet" target="_blank" href="{{ asset('hosts/company_reg_certificate/'.$profile_data->rent_car_certificate) }}"><img class="img-fluid mt-2" src="{{ asset('hosts/company_reg_certificate/'.$profile_data->rent_car_certificate) }}" alt=""></a>
              </div>
              <div class="mb-3 col-md-6">
                <label for="nic" class="form-label">Chamber of Commerce Certificate</label>
                <!-- <input type="text" class="form-control" id="nic" name="nic" placeholder="nic number" value="{{ $profile_data->chamber_of_commerce_certificate }}" readonly> -->
                <!-- Chamber of Commerce Certificate image -->
                <a id="Cham_cet" target="_blank" href="{{ asset('hosts/company_reg_certificate/'.$profile_data->chamber_of_commerce_certificate) }}"><img class="img-fluid mt-2" src="{{ asset('hosts/company_reg_certificate/'.$profile_data->chamber_of_commerce_certificate) }}" alt=""></a>
              </div>

            </div>
           

        </div>
        <!-- /Account -->
      </div>

    </div>
  </div>
</div>
@endsection