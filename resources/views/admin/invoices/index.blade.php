@extends('admin.template')
@section('title','invoices')

@section('route-list')
    <li class="breadcrumb-item"><a href="{{route('admin.invoice.index')}}"> Invoices</a></li>
@endsection

@section('content-template')
    <div class="card">
        <table class="table table-striped table-hover " id="invoices-table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">booking</th>
                <th scope="col">Total Cost</th>
                <th scope="col">Paid</th>
                <th scope="col">Details</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @isset($invoices)
                @foreach($invoices as $invoice)
                    <tr>
                        <th scope="row">{{$invoice->id}}</th>
                        <td>{{$invoice->booking->sku}}</td>
                        <td>{{$invoice->total_cost}}</td>
                        <td>{{$invoice->paid}}</td>
                        <td>{{$invoice->details}}</td>

                        <td><a href="{{route('admin.invoice.edit',$invoice->id)}}" > <i class="feather icon-edit"></i></a>
                            <a href="{{route('admin.invoice.delete',$invoice->id)}}" > <i class="feather icon-x-circle"></i></a>
                        </td>
                    </tr>
                @endforeach
            @endisset
            </tbody>
        </table>
    </div>

@endsection
