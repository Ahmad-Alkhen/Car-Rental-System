@extends('admin.template')
@section('title','cars')

@section('route-list')
    <li class="breadcrumb-item"><a href="{{route('admin.car.index')}}"> Cars</a></li>
@endsection

@section('content-template')
    <div class="card">
        <table class="table table-striped table-hover table-responsive " id="cars-table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Number</th>
                <th scope="col">cost</th>
                <th scope="col">Description</th>
                <th scope="col">Owner</th>
                <th scope="col">active</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @isset($cars)
                @foreach($cars as $car)
                    <tr>
                        <th scope="row">{{$car->id}}</th>
                        <td>{{$car->name}}</td>
                        <td>{{$car->number}}</td>
                        <td>{{$car->type}}</td>
                        <td>{{$car->cost}}</td>
                        <td>{{$car->description}}</td>
                        <td>{{$car->owner->name}}</td>
                        <td>{{$car->active==1?'active':'inactive '}}</td>
                        <td><a href="{{route('admin.car.edit',$car->id)}}" > <i class="feather icon-edit"></i></a>
                            <a href="{{route('admin.car.delete',$car->id)}}" > <i class="feather icon-x-circle"></i></a>
                        </td>
                    </tr>
                @endforeach
            @endisset
            </tbody>
        </table>
    </div>

@endsection
