@extends('layout.dashboard') 
@section('content')
<!-- Content wrapper -->
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- Content -->
    <div class="demo-inline-spacing text-end pb-2">
      <a class="btn rounded-pill btn-outline-primary" href="{{ route('model.create') }}"> <span class="tf-icons bx bx-plus"></span>&nbsp; Add Model</a>
    </div>
    <div class="card">
       
        <div class="table-responsive text-nowrap">
          <table class="table table-dark">
            <thead>
              <tr>
                <th>Models</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              
            @foreach ($data as $model)  
              <tr> 
                <td>{{ $model->model }}</td>
                <td>
                    <a class="btn rounded-pill btn-outline-primary" href="{{ route('model.edit',$model->id) }}">View</a>
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