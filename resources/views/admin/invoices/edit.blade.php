@extends('admin.template')
@section('title','edit invoice')
@section('route-list')
    <li class="breadcrumb-item"><a href="{{route('admin.invoice.index')}}">  Invoices  </a></li>
    <li class="breadcrumb-item"><a href=""> Edit Invoice</a></li>
@endsection

@section('content-template')
    <div class="card">
        <div class="card-body text-center">
            <form action="{{route('admin.invoice.update',$invoice->id)}}" method="post">
                @csrf
                <div class="input-group mb-4">
                    <select onchange="select_booking()" name="booking_id" class="form-control " id="select-booking"  required>
                        @isset($bookings)
                            <option value=""  selected> Select the booking</option>
                            @foreach($bookings as $booking)
                                <option class="booking-option"  value="{{$booking->id}}" {{ $invoice->booking_id == $booking->id ? 'selected':' '  }} >{{(string)$booking->sku}}</option>
                            @endforeach
                        @endisset
                    </select>
                    @error('booking_id')
                    <div class="alert alert-danger error_mes">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <input id='total_cost' name="total_cost" type="text" class="form-control" placeholder="total_cost" value="{{$invoice->total_cost}}" required readonly >
                    @error('total_cost')
                    <div class="alert alert-danger error_mes">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <input name="paid" type="text" class="form-control" placeholder="paid" value="{{$invoice->paid}}" required>
                    @error('paid')
                    <div class="alert alert-danger error_mes">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group mb-4">
                    <textarea name="details" type="text" class="form-control" placeholder="details"  > {{$invoice->details}} </textarea>

                    @error('details')
                    <div class="alert alert-danger error_mes">{{ $message }}</div>
                    @enderror
                </div>

                <button class="btn btn-primary shadow-2 mb-4">  <span class="feather icon-plus-circle"></span> Save </button>

            </form>
        </div>

    </div>

 <script>
    function select_booking() {
    // alert( this.value );
    // var id = $('.booking-option').val();
    var id = $('#select-booking').find(":selected").val();;
    //alert(id)
    $.ajax({
    type: "POST",
    url: "{{route('admin.invoice.change')}}",
    data: {
    '_token': "{{csrf_token()}}",
    'id': id
    },
    success: function (response) {
    // alert(response)
    $("#total_cost").attr("value", response);

    }
    });
    }
 </script>

@endsection
