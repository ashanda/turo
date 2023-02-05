@extends('layout.base') 


@section('content')
@if(session('error'))
            <p>{{ session('error') }}</p>
        @endif
              <!-- /Logo -->
              <h4 class="mb-2">Adventure starts here 🚀</h4>
              <p class="mb-4">Make your app management easy and fun!</p>

              <form id="formAuthentication" class="mb-3" action="{{ route('user.create') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="fname" class="form-label">First name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="fname"
                    name="fname"
                    placeholder="Enter your first name"
                    autofocus required
                  />
                </div>
                <div class="mb-3">
                  <label for="lname" class="form-label">Last name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="lname"
                    name="lname"
                    placeholder="Enter your last name"
                    autofocus required
                  />
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email"  required/>
                </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                      required
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="contact_no" class="form-label">Contact number</label>
                  <input
                    type="text"
                    class="form-control"
                    id="contact_no"
                    name="contact_no"
                    placeholder="Enter your contact number"
                    autofocus
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="location" class="form-label">Location</label>
                  <input
                    type="text"
                    class="form-control"
                    id="location"
                    name="location"
                    placeholder="Enter your location"
                    autofocus
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="passport_no" class="form-label">Passport number</label>
                  <input
                    type="text"
                    class="form-control"
                    id="passport_no"
                    name="passport_no"
                    placeholder="Enter your passport number"
                    autofocus
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="passport_photo" class="form-label">Passport photo</label>
                  <input
                    type="text"
                    class="form-control"
                    id="passport_photo"
                    name="passport_photo"
                    placeholder="Enter your passport photo"
                    autofocus
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="nic" class="form-label">NIC</label>
                  <input
                    type="text"
                    class="form-control"
                    id="nic"
                    name="nic"
                    placeholder="Enter your nic"
                    autofocus
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="nic_front" class="form-label">NIC front</label>
                  <input
                    type="text"
                    class="form-control"
                    id="nic_front"
                    name="nic_front"
                    placeholder="upload your nic front"
                    autofocus
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="nic_back" class="form-label">NIC back</label>
                  <input
                    type="text"
                    class="form-control"
                    id="nic_back"
                    name="nic_back"
                    placeholder="upload your nic back"
                    autofocus
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="driving_license_no" class="form-label">Driving license no</label>
                  <input
                    type="text"
                    class="form-control"
                    id="driving_license_no"
                    name="driving_license_no"
                    placeholder="Enter your drivinglicense no"
                    autofocus
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="driving_license_front" class="form-label">Driving license front</label>
                  <input
                    type="text"
                    class="form-control"
                    id="driving_license_front"
                    name="driving_license_front"
                    placeholder="Upload your driving license front"
                    autofocus
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="driving_license_back" class="form-label">Driving license back</label>
                  <input
                    type="text"
                    class="form-control"
                    id="driving_license_back"
                    name="driving_license_back"
                    placeholder="Upload your driving license back"
                    autofocus
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="driving_license_expire_date" class="form-label">Driving license expire date</label>
                  <input
                    type="text"
                    class="form-control"
                    id="driving_license_expire_date"
                    name="driving_license_expire_date"
                    placeholder="Upload your driving license expire date"
                    autofocus
                    required
                  />
                </div>
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                    <label class="form-check-label" for="terms-conditions">
                      I agree to
                      <a href="javascript:void(0);">privacy policy & terms</a>
                    </label>
                  </div>
                </div>
                <button class="btn btn-primary d-grid w-100">Sign up</button>
              </form>

              <p class="text-center">
                <span>Already have an account?</span>
                <a href="{{ route('user.login') }}">
                  <span>Sign in instead</span>
                </a>
              </p>
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>

   


@endsection