@extends('admin.template')
@section('title','owners')

@section('route-list')
    <li class="breadcrumb-item"><a href="{{route('admin.owner.index')}}"> Owners</a></li>
@endsection

@section('content-template')
    <div class="card">
        <table class="table table-striped table-hover  " id="owners-table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @isset($owners)
                @foreach($owners as $owner)
                    <tr>
                        <th scope="row">{{$owner->id}}</th>
                        <td>{{$owner->name}}</td>
                        <td>{{$owner->number}}</td>
                        <td><a href="{{route('admin.owner.edit',$owner->id)}}" > <i class="feather icon-edit"></i></a>
                            <a href="{{route('admin.owner.delete',$owner->id)}}" > <i class="feather icon-x-circle"></i></a>
                        </td>
                    </tr>
                @endforeach
            @endisset
            </tbody>
        </table>
    </div>

@endsection
