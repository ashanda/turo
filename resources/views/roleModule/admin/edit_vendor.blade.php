@extends('layout.dashboard')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Vendor Details</h4>

  <div class="row">
    <div class="col-md-12">

      <div class="card mb-4">
        <h5 class="card-header">Profile Details</h5>
        <!-- Account -->
        <div class="card-body">
          <div class="d-flex align-items-start align-items-sm-center gap-4">
            <img src="{{ url('vendor/profile/'.$vendor->profile_pic) }}" alt="user-avatar" class="d-block rounded" id="uploadedAvatar" width="100" height="100">

          </div>
        </div>
        <hr class="my-0">
        <div class="card-body">
          <form id="formAccountSettings" action="{{ route('all_vendor.update',$id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
              <div class="mb-3 col-md-6">
                <label for="firstName" class="form-label">Company Name</label>
                <input class="form-control" type="text" id="firstName" name="firstName" value="{{ $vendor->company_name }}" autofocus="" readonly>
              </div>
              <div class="mb-3 col-md-6">
                <label for="lastName" class="form-label">Company Reg No</label>
                <input class="form-control" type="text" name="lastName" id="lastName" value="{{ $vendor->company_reg_no }}" readonly>
              </div>
              <div class="mb-3 col-md-6">
                <label for="lastName" class="form-label">Company Reg Certificate</label>
                <!-- <input class="form-control" type="text" name="lastName" id="lastName" value="{{ $vendor->company_reg_certificate }}" readonly> -->
                <!-- Company Reg Certificate image -->
                <a id="comp_reg_cet" target="_blank" href="https://picsum.photos/600/400"><img class="img-fluid mt-2" src="https://picsum.photos/600/400" alt=""></a>
              </div>
              <div class="mb-3 col-md-6">
                <label for="email" class="form-label">E-mail</label>
                <input class="form-control" type="text" id="email" name="email" value="{{ $vendor->email }}" placeholder="john.doe@example.com" readonly>
              </div>
              <div class="mb-3 col-md-6">
                <label for="organization" class="form-label">Location</label>
                <input type="text" class="form-control" id="organization" name="organization" value="{{ $vendor->location }}" readonly>
              </div>
              <div class="mb-3 col-md-6">
                <label for="organization" class="form-label">Contact Person Name</label>
                <input type="text" class="form-control" id="organization" name="organization" value="{{ $vendor->contact_person }}" readonly>
              </div>
              <div class="mb-3 col-md-6">
                <label class="form-label" for="phoneNumber">Contact Number</label>
                <div class="input-group input-group-merge">

                  <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" value="{{ $vendor->contact_no }}" readonly>
                </div>
              </div>
              <div class="mb-3 col-md-6">
                <label for="passport_no" class="form-label">Rent Car License</label>
                <input type="text" class="form-control" id="passport_no" value="{{ $vendor->rent_car_license }}" name="passport_no" placeholder="passport number" readonly>
              </div>
              <div class="mb-3 col-md-6">
                <label for="passport_photo" class="form-label">Rent Car Certificate</label>
                <!-- <input class="form-control" type="text" id="passport_photo" name="passport_photo" value="{{ $vendor->rent_car_certificate }}" placeholder="upload passport photo" readonly> -->
                <!-- Rent Car Certificate image -->
                <a id="rent_car_cet" target="_blank" href="https://picsum.photos/600/400"><img class="img-fluid mt-2" src="https://picsum.photos/600/400" alt=""></a>
              </div>
              <div class="mb-3 col-md-6">
                <label for="nic" class="form-label">Chamber of Commerce Certificate</label>
                <!-- <input type="text" class="form-control" id="nic" name="nic" placeholder="nic number" value="{{ $vendor->chamber_of_commerce_certificate }}" readonly> -->
                <!-- Chamber of Commerce Certificate image -->
                <a id="Cham_cet" target="_blank" href="https://picsum.photos/600/400"><img class="img-fluid mt-2" src="https://picsum.photos/600/400" alt=""></a>
              </div>
              <div class="mb-3 col-md-6">
                <label for="status" class="form-label">Action</label>
                <select id="status" name="status" class="select2 form-select">
                  @if ($vendor->status == '0')
                  <option value="0">Pending</option>
                  <option value="1">Approve</option>
                  <option value="2">Reject</option>
                  @elseif($vendor->status == '1')
                  <option value="1">Approve</option>
                  <option value="2">Reject</option>
                  <option value="0">Pending</option>
                  @else
                  <option value="2">Reject</option>
                  <option value="1">Approve</option>
                  <option value="0">Pending</option>
                  @endif
                </select>
              </div>
            </div>
            <div class="mt-2">
              <button type="submit" class="btn btn-primary me-2">Save changes</button>
              <button type="reset" class="btn btn-outline-secondary">Cancel</button>
            </div>
          </form>
        </div>
        <!-- /Account -->
      </div>
      <div class="card">
        <h5 class="card-header">Delete Account</h5>
        <div class="card-body">
          <div class="mb-3 col-12 mb-0">
            <div class="alert alert-warning">
              <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
              <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
            </div>
          </div>


          <form action="{{ route('all_vendor.destroy',$id) }}" method="Post" id="formAccountDeactivation">
            @csrf
            @method('DELETE')
            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation">
              <label class="form-check-label" for="accountActivation">I confirm my account delete</label>
            </div>
            <button type="submit" id="accountdelete" class="btn btn-danger deactivate-account">Delete Account</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection