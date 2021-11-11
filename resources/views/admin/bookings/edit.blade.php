@extends('admin.template')
@section('title','edit booking')

@section('route-list')
    <li class="breadcrumb-item"><a href="{{route('admin.booking.index')}}">  Bookings  </a></li>
    <li class="breadcrumb-item"><a href="{{route('admin.booking.create')}}"> Add Booking</a></li>
@endsection

@section('content-template')
    <script>
        $(function() {
            $('.selectpicker').selectpicker();
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css" rel="stylesheet" />



    <div class="card">
        <div class="card-body text-center">
            <form action="{{route('admin.booking.update',$booking->id)}}" method="post">
                @csrf
                <div class="input-group mb-4">
                    <select name="customer_id" class="form-control selectpicker" id="select-customer" data-live-search="true" required>
                        @isset($customers)
                            <option value="" disabled selected>Select your customer</option>
                            @foreach($customers as $customer)
                                <option value="{{$customer->id}}" data-tokens="{{$customer->name}}" {{$booking->customer_id==$customer->id ? 'selected':'' }}   >    {{$customer->name}}  </option>
                            @endforeach
                        @endisset
                    </select>
                    @error('type')
                    <div class="alert alert-danger error_mes">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group mb-4">
                    <select name="car_id" class="form-control selectpicker" id="select-car" data-live-search="true" required>
                        @isset($cars)
                            <option value="" disabled selected>Select the car</option>
                            @foreach($cars as $car)
                                <option value="{{$car->id}}" data-tokens="{{(string)$car->number}}"  {{$booking->car_id==$car->id ? 'selected':'' }} >  {{(string)$car->number}}</option>
                            @endforeach
                        @endisset
                    </select>
                    @error('car_id')
                    <div class="alert alert-danger error_mes">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group m-b-10">
                    <div class="col-md-2">
                        <label for="rent_start">rent start</label>
                    </div>
                    <div class="col-md-10">
                        <input id="rent_start" name="rent_start" type="date" class="form-control  mb-6" placeholder="rent_start" value="{{$booking->rent_start }}" required>
                    </div>

                    @error('rent_start')
                    <div class="alert alert-danger error_mes">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group m-b-10">
                    <div class="col-md-2">
                        <label for="rent_end">rent end</label>
                    </div>
                    <div class="col-md-10">
                        <input id="rent_end" name="rent_end" type="date" class="form-control  mb-6" placeholder="rent end" value="{{$booking->rent_end }}" required>
                    </div>

                    @error('rent_end')
                    <div class="alert alert-danger error_mes">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <input name="info" type="text" class="form-control" placeholder="info" value="{{$booking->info }}" >
                    @error('info')
                    <div class="alert alert-danger error_mes">{{ $message }}</div>
                    @enderror
                </div>

                <button class="btn btn-success shadow-2 mb-4 mt-5">  <span class="feather icon-plus-circle"></span> Save </button>

            </form>
        </div>

    </div>

@endsection

