@extends('admin.template')
@section('title','customers')

@section('route-list')
    <li class="breadcrumb-item"><a href="{{route('admin.customer.index')}}"> Customers</a></li>
@endsection

@section('content-template')
    <div class="card">
        <table class="table table-striped table-hover " id="customers-table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Full name</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
                <th scope="col">Gender</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @isset($customers)
                @foreach($customers as $customer)
                    <tr>
                        <th scope="row">{{$customer->id}}</th>
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->address}}</td>
                        <td>{{$customer->phone}}</td>
                        <td>{{$customer->gender}}</td>
                        <td><a href="{{route('admin.customer.edit',$customer->id)}}" > <i class="feather icon-edit"></i></a>
                            <a href="{{route('admin.customer.delete',$customer->id)}}" > <i class="feather icon-x-circle"></i></a>
                        </td>
                    </tr>
                @endforeach
            @endisset
            </tbody>
        </table>
    </div>

@endsection
