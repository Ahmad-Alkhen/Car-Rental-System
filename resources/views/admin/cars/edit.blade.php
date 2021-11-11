@extends('admin.template')
@section('title','edit car')
@section('route-list')
    <li class="breadcrumb-item"><a href="{{route('admin.car.index')}}">  Cars  </a></li>
    <li class="breadcrumb-item"><a href="{{route('admin.car.create')}}"> Edit Car</a></li>
@endsection

@section('content-template')
    <div class="card">
        <div class="card-body text-center">
            <form action="{{route('admin.car.update',$car->id)}}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input name="name" type="text" class="form-control" placeholder="Name" value="{{$car->name}}" required>
                    @error('name')
                    <div class="alert alert-danger error_mes">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <input name="number" type="text" class="form-control" placeholder="Number" value="{{$car->number}}" required>
                    @error('number')
                    <div class="alert alert-danger error_mes">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group mb-4">
                    <input name="type" type="text" class="form-control" placeholder="Type" value="{{$car->type}}" required>
                    @error('type')
                    <div class="alert alert-danger error_mes">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group mb-4">
                    <input name="cost" type="text" class="form-control" placeholder="Cost for one Day" value="{{$car->cost}}" required>
                    @error('cost')
                    <div class="alert alert-danger error_mes">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group mb-4">
                    <textarea name="description" type="text" class="form-control" placeholder="description" required >{{$car->description}}</textarea>

                    @error('description')
                    <div class="alert alert-danger error_mes">{{ $message }}</div>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <div class="form-group mt-1">
                        <input type="checkbox" name="active"
                               id="switcheryColor4"
                               value="1"
                               class="switch" data-color="success"
                               {{$car->active==1?'checked':''}} />
                        <label for="switcheryColor4"
                               class="card-title ml-1">Active </label>
                    </div>
                </div>

                <button class="btn btn-primary shadow-2 mb-4">  <span class="feather icon-plus-circle"></span> Save </button>

            </form>
        </div>

    </div>

@endsection
