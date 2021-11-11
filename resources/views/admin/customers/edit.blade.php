@extends('admin.template')
@section('title','edit customers')
@section('route-list')
    <li class="breadcrumb-item"><a href="{{route('admin.customer.index')}}">  Customers  </a></li>
    <li class="breadcrumb-item"><a > Edit Customers</a></li>
@endsection

@section('content-template')
    <div class="card">
        <div class="card-body text-center">
         <form action="{{route('admin.customer.update',$customer->id)}}" method="post">
             @csrf
            <div class="input-group mb-3">
                <input name="name" type="text" class="form-control" placeholder="Full Name" value="{{$customer->name}}" required>
                @error('name')
                 <div class="alert alert-danger error_mes">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input name="address" type="text" class="form-control" placeholder="Address" value="{{$customer->address}}" required>
                @error('address')
                <div class="alert alert-danger error_mes">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-group mb-4">
                <input name="phone" type="text" class="form-control" placeholder="Phone" value="{{$customer->phone}}" required>
                @error('phone')
                <div class="alert alert-danger error_mes">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group text-left">
                <label class="form-check-label" > Gender : </label>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Man"  {{$customer->gender =='Man' ?'checked' :"" }}>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Man
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2"  value="Woman" {{$customer->gender =='Woman' ?'checked' :"" }}>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Woman
                    </label>
                </div>
            </div>
            <button class="btn btn-primary shadow-2 mb-4">  <i class="feather icon-edit"></i> update </button>

         </form>
        </div>

    </div>

@endsection
