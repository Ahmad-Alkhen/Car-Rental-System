@extends('admin.template')
@section('title','add customers')
@section('route-list')
    <li class="breadcrumb-item"><a href="{{route('admin.customer.index')}}">  Customers  </a></li>
    <li class="breadcrumb-item"><a href="{{route('admin.customer.create')}}"> Add Customers</a></li>
@endsection

@section('content-template')
    <div class="card">
        <div class="card-body text-center">
         <form action="{{route('admin.customer.store')}}" method="post">
             @csrf
            <div class="input-group mb-3">
                <input name="name" type="text" class="form-control" placeholder="Full Name" required>
                @error('name')
                 <div class="alert alert-danger error_mes">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input name="address" type="text" class="form-control" placeholder="Address" required>
                @error('address')
                <div class="alert alert-danger error_mes">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-group mb-4">
                <input name="phone" type="text" class="form-control" placeholder="Phone" required>
                @error('phone')
                <div class="alert alert-danger error_mes">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group text-left">
                <label class="form-check-label" > Gender : </label>


                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Man" checked>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Man
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2"  value="Woman">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Woman
                    </label>
                </div>
            </div>
            <button class="btn btn-primary shadow-2 mb-4">  <span class="feather icon-user-plus auth-icon"></span> Save </button>

         </form>
        </div>

    </div>

@endsection
