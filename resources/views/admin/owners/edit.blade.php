@extends('admin.template')
@section('title','edit owner')
@section('route-list')
    <li class="breadcrumb-item"><a href="{{route('admin.owner.index')}}">  Owners  </a></li>
    <li class="breadcrumb-item"><a > Edit Owners</a></li>
@endsection

@section('content-template')
    <div class="card">
        <div class="card-body text-center">
         <form action="{{route('admin.owner.update',$owner->id)}}" method="post">
             @csrf
            <div class="input-group mb-3">
                <input name="name" type="text" class="form-control" placeholder="Name" value="{{$owner->name}}" required>
                @error('name')
                 <div class="alert alert-danger error_mes">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input name="number" type="text" class="form-control" placeholder="Number" value="{{$owner->number}}" required>
                @error('number')
                <div class="alert alert-danger error_mes">{{ $message }}</div>
                @enderror
            </div>

            <button class="btn btn-primary shadow-2 mb-4">  <i class="feather icon-edit"></i> update </button>

         </form>
        </div>

    </div>

@endsection
