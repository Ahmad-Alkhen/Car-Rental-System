@extends('admin.template')
@section('title','bookings')

@section('route-list')
    <li class="breadcrumb-item"><a href="{{route('admin.booking.index')}}"> Bookings</a></li>
@endsection

@section('content-template')
    <div class="card">
        <table class="table table-striped table-hover nowrap table-responsive" id="bookings-table" style="width:100%">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Sku</th>
                <th scope="col">Customer</th>
                <th scope="col">Car</th>
                <th scope="col">Rent Start</th>
                <th scope="col">Rent End</th>
                <th scope="col">Info</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @isset($bookings)
                @foreach($bookings as $booking)
                    <tr>
                        <th scope="row">{{$booking->id}}</th>
                        <th scope="row">{{$booking->sku}}</th>
                        <td>{{$booking->customer->name}}</td>
                        <td>{{$booking->car->number}}</td>
                        <td>{{$booking->rent_start}}</td>
                        <td>{{$booking->rent_end}}</td>
                        <td>{{$booking->info}}</td>
                        <td><a href="{{route('admin.booking.edit',$booking->id)}}" > <i class="feather icon-edit"></i></a>
                            <a href="{{route('admin.booking.delete',$booking->id)}}" > <i class="feather icon-x-circle"></i></a>
                        </td>
                    </tr>
                @endforeach
            @endisset
            </tbody>
        </table>
    </div>

@endsection
