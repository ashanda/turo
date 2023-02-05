@extends('layout.dashboard') 
@section('content')
<!-- Content wrapper -->
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Content -->
    <div class="card">
       
        <div class="table-responsive text-nowrap">
          <table class="table table-dark">
            <thead>
              <tr>
                <th>Contact No</th>
                <th>Location</th>
                <th>Users</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              
            @foreach ($data as $customer)  
              <tr>
                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $customer->contact_no }}</strong></td>
                <td>{{ $customer->location }}</td>
                <td>
                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                    
                    
                    <li
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="top"
                      class="avatar avatar-xs pull-up"
                      title="{{ $customer->fname.' '.$customer->lname }}"
                    >
                      <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                    </li>
                  </ul>
                </td>
               
                @if ($customer->status==0)
                
                <td><span class="badge bg-label-warning me-1">Pending</span></td>

                @elseif($customer->status==1)

                <td><span class="badge bg-label-success me-1">Active</span></td>
                
                @else

                <td><span class="badge bg-label-primary me-1">Reject</span></td>
                @endif
                
                <td>
                    <a class="btn rounded-pill btn-outline-primary" href="{{ route('all_customer.edit',$customer->id) }}"
                        > View</a>
                  
                  </div>
                </td>
              </tr>
              @endforeach


              
              
              
            </tbody>
          </table>
        </div>
      </div>

</div>
<!-- / Content -->    

@endsection