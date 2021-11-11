@extends('admin.template')
@section('title','add car')
@section('route-list')
    <li class="breadcrumb-item"><a href="{{route('admin.car.index')}}">  Cars  </a></li>
    <li class="breadcrumb-item"><a href="{{route('admin.car.create')}}"> Add Car</a></li>
@endsection

@section('content-template')
<?php
 /*   <script>
        $(function() {
            $('.selectpicker').selectpicker();
        });
    </script>*/
?>
    <div class="card">
        <div class="card-body text-center">
         <form action="{{route('admin.car.store')}}" method="post">
             @csrf
            <div class="input-group mb-3">
                <input name="name" type="text" class="form-control" placeholder="Name" required>
                @error('name')
                 <div class="alert alert-danger error_mes">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input name="number" type="text" class="form-control" placeholder="Number" required>
                @error('number')
                <div class="alert alert-danger error_mes">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-group mb-4">
                <input name="type" type="text" class="form-control" placeholder="Type" required>
                @error('type')
                <div class="alert alert-danger error_mes">{{ $message }}</div>
                @enderror
            </div>
             <div class="input-group mb-4">
                 <input name="cost" type="number" class="form-control" placeholder="cost for  one Day" required>
                 @error('cost')
                 <div class="alert alert-danger error_mes">{{ $message }}</div>
                 @enderror
             </div>
             <div class="input-group mb-4">
                 <select name="owner_id" class="form-control  " id="select-owner"   required>
                     @isset($owners)
                         <option value=""  selected> Select the owner</option>
                         @foreach($owners as $owner)
                             <option value="{{$owner->id}}" data-tokens="{{(string)$owner->name}}">{{(string)$owner->name}}</option>
                         @endforeach
                     @endisset
                 </select>
                 @error('owner_id')
                 <div class="alert alert-danger error_mes">{{ $message }}</div>
                 @enderror
             </div>

             <div class="input-group mb-4">
                 <textarea name="description" type="text" class="form-control" placeholder="description" required ></textarea>

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
                                checked/>
                         <label for="switcheryColor4"
                                class="card-title ml-1">Active </label>
                     </div>
                 </div>

            <button class="btn btn-primary shadow-2 mb-4">  <span class="feather icon-plus-circle"></span> Save </button>

         </form>
        </div>

    </div>

@endsection
