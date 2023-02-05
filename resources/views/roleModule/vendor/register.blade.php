@extends('layout.base') 


@section('content')
@if(session('error'))
            <p>{{ session('error') }}</p>
        @endif
              <!-- /Logo -->
              <h4 class="mb-2">Adventure starts here 🚀</h4>
              <p class="mb-4">Make your app management easy and fun!</p>

              <form id="formAuthentication" class="mb-3" action="{{ route('vendor.create') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="company_name" class="form-label">Company name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="company_name"
                    name="company_name"
                    placeholder="Enter your company name"
                    autofocus
                    required
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
                  <label for="company_reg_no" class="form-label">Company register no</label>
                  <input
                    type="text"
                    class="form-control"
                    id="company_reg_no"
                    name="company_reg_no"
                    placeholder="Enter your company reg no"
                    autofocus
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="company_reg_certificate" class="form-label">Company register certificate</label>
                  <input
                    type="text"
                    class="form-control"
                    id="company_reg_certificate"
                    name="company_reg_certificate"
                    placeholder="Enter your company reg certificate"
                    autofocus
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="company_reg_no" class="form-label">Location</label>
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
                  <label for="rent_car_license" class="form-label">Rent car license</label>
                  <input
                    type="text"
                    class="form-control"
                    id="rent_car_license"
                    name="rent_car_license"
                    placeholder="Enter your rent car license"
                    autofocus
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="rent_car_certificate" class="form-label">Rent car certificate</label>
                  <input
                    type="text"
                    class="form-control"
                    id="rent_car_certificate"
                    name="rent_car_certificate"
                    placeholder="Enter your rent car certificate"
                    autofocus
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="contact_person" class="form-label">Contact person</label>
                  <input
                    type="text"
                    class="form-control"
                    id="contact_person"
                    name="contact_person"
                    placeholder="Enter your contact person"
                    autofocus
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="rent_car_certificate" class="form-label">Contact no</label>
                  <input
                    type="text"
                    class="form-control"
                    id="contact_no"
                    name="contact_no"
                    placeholder="Enter your contact no"
                    autofocus
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="chamber_of_commerce_certificate" class="form-label">Chamber of commerce certificate</label>
                  <input
                    type="text"
                    class="form-control"
                    id="chamber_of_commerce_certificate"
                    name="chamber_of_commerce_certificate"
                    placeholder="Enter your chamber of commerce certificate"
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
                <a href="{{ route('vendor.login') }}">
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