@extends('layout.dashboard') 
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Model</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
         
          <div class="card-body">
            <form action="{{ route('model.update',$id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Model Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="basic-default-name" name="model" value="{{ $model->model }}">
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Make</label>
                <div class="col-sm-10">
                <select id="defaultSelect" class="form-select" name="make_id">
                  
                  @foreach ( $data as $make)
                  <option value="{{ $make->id }}">{{ $make->make }}</option>
                  @endforeach
                  

                </select>
               </div>
              </div>

              <div class="row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection