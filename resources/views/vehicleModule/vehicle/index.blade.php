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
                <th>Name</th>
                <th>Status</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              
            @foreach ($data as $vehicle)  
              <tr> 
                <td>{{ $vehicle->title }}</td>
                @if ($vehicle->status==0)
                
                <td><span class="badge bg-label-warning me-1">Pending</span></td>

                @elseif($vehicle->status==1)

                <td><span class="badge bg-label-success me-1">Active</span></td>
                
                @else

                <td><span class="badge bg-label-primary me-1">Reject</span></td>
                @endif
                <td>
                    <a class="btn rounded-pill btn-outline-primary" href="{{ route('listing.edit',$vehicle->id) }}">View</a>
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
