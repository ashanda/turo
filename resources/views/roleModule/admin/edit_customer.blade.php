@extends('layout.dashboard') 
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Customer Details</h4>

    <div class="row">
      <div class="col-md-12">
       
        <div class="card mb-4">
          <h5 class="card-header">Profile Details</h5>
          <!-- Account -->
          <div class="card-body">
            <div class="d-flex align-items-start align-items-sm-center gap-4">
              <img src="{{ url('customer/profile/'.$customer->profile_pic) }}" alt="user-avatar" class="d-block rounded" id="uploadedAvatar" width="100" height="100">
             
            </div>
          </div>
          <hr class="my-0">
          <div class="card-body">
            <form id="formAccountSettings" action="{{ route('all_customer.update',$id) }}" method="POST" enctype="multipart/form-data" >
                @csrf
                @method('PUT')
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="firstName" class="form-label">First Name</label>
                  <input class="form-control" type="text" id="firstName" name="firstName" value="{{ $customer->fname }}" autofocus="" readonly>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="lastName" class="form-label">Last Name</label>
                  <input class="form-control" type="text" name="lastName" id="lastName" value="{{ $customer->lname }}" readonly>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="email" class="form-label">E-mail</label>
                  <input class="form-control" type="text" id="email" name="email" value="{{ $customer->email }}" placeholder="john.doe@example.com" readonly>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="organization" class="form-label">Location</label>
                  <input type="text" class="form-control" id="organization" name="organization" value="{{ $customer->location }}" readonly>
                </div>
                <div class="mb-3 col-md-6">
                  <label class="form-label" for="phoneNumber">Contact Number</label>
                  <div class="input-group input-group-merge">
                    
                    <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" value="{{ $customer->contact_no }}" readonly>
                  </div>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="passport_no" class="form-label">Passport No</label>
                  <input type="text" class="form-control" id="passport_no" value="{{ $customer->passport_no }}" name="passport_no" placeholder="passport number" readonly>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="passport_photo" class="form-label">Passport Photo</label> 
                  <input class="form-control" type="text" id="passport_photo" name="passport_photo" value="{{ $customer->passport_no }}" placeholder="upload passport photo" readonly>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="nic" class="form-label">NIC</label>
                  <input type="text" class="form-control" id="nic" name="nic" placeholder="nic number" value="{{ $customer->nic }}" readonly>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="nic" class="form-label">NIC Front</label>
                    <input type="text" class="form-control" id="nic_front" name="nic_front" placeholder="nic_front" value="{{ $customer->nic_front }}" readonly>
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="nic" class="form-label">NIC Back</label>
                    <input type="text" class="form-control" id="nic" name="nic" placeholder="nic" value="{{ $customer->nic_back }}" readonly>
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="driving_license_no" class="form-label">Driving License No</label>
                    <input type="text" class="form-control" id="driving_license_no" name="driving_license_no" value="{{ $customer->driving_license_no }}" placeholder="driving_license_no" readonly>
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="driving_license_front" class="form-label">Driving License Front</label>
                    <input type="text" class="form-control" id="driving_license_front" name="driving_license_front" value="{{ $customer->driving_license_front }}" placeholder="driving_license_front" readonly>
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="driving_license_back" class="form-label">Driving License Back</label>
                    <input type="text" class="form-control" id="driving_license_back" name="driving_license_back" value="{{ $customer->driving_license_back }}" placeholder="driving_license_back" readonly>
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="driving_license_expire_date" class="form-label">Driving License Expire Date</label>
                    <input type="text" class="form-control" id="driving_license_expire_date" name="driving_license_expire_date" value="{{ $customer->driving_license_expire_date }}" placeholder="driving_license_expire_date" readonly>
                  </div>

                <div class="mb-3 col-md-6">
                  <label for="status" class="form-label">Action</label>
                  <select id="status" name="status"  class="select2 form-select">
                    @if ($customer->status == '0')
                    <option value="0">Pending</option>
                    <option value="1">Approve</option>
                    <option value="2">Reject</option>
                    @elseif($customer->status == '1')
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
           

            <form action="{{ route('all_customer.destroy',$id) }}" method="Post" id="formAccountDeactivation" >
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