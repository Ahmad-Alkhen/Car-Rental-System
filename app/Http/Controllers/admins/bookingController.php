<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\bookingRequest;
use App\Http\Requests\carRequest;
use App\Models\admins\Booking;

use App\Models\admins\Car;
use App\Models\admins\Customer;
use Illuminate\Http\Request;

class bookingController extends Controller
{

    public function index(){

     $bookings= Booking::with(['customer'=>function($q){
                                            $q->select('id','name'); }],
                                         ['car'=>function($q){
                                         $q->select('id','number'); }])
                        ->get();

     // return $bookings ;
     return view('admin.bookings.index',compact('bookings'));

    }

    public function create(){

     $customers=   Customer::select('id','name')->get();
     $cars=   Car::select('id','number')->get();

       return view('admin.bookings.create',compact('customers','cars'));
    }

     public function store(bookingRequest $request){

        try {
               Booking::create([
                 'sku'=>$request->sku,
                 'customer_id'=>$request->customer_id,
                 'car_id'=>$request->car_id,
                 'rent_start'=>$request->rent_start,
                 'rent_end'=>$request->rent_end,
                 'info'=>$request->info,
               ]);
                toast('successfully added','success');
              return redirect()->route('admin.booking.index')->with(['success'=>'successfully added']);

       }catch (\Exception $exception){
            toast('has failed, please try later ','error');

         }
    }


    public function edit($bookingId){
        $customers=   Customer::select('id','name')->get();
        $cars=   Car::select('id','number')->get();
        $booking =Booking::find($bookingId);
        if(!$booking)
            return redirect()->route('admin.booking.index')->with(['error' =>'there is no booking' ]);
        else
        return view('admin.bookings.edit',compact('customers','cars','booking'));
    }

    public function update(bookingRequest $request,$bookingId){
        try {
            $booking =Booking::find($bookingId);
            if(!$booking)
                return redirect()->route('admin.booking.index');
            else{

                $booking->update([
                    'customer_id'=>$request->customer_id,
                    'car_id'=>$request->car_id,
                    'rent_start'=>$request->rent_start,
                    'rent_end'=>$request->rent_end,
                    'info'=>$request->info,
                ]);
                  toast('successfully edited','success');
                return redirect()->route('admin.booking.index')->with(['success'=>'successfully edited']);
            }
        }catch (\Exception $exception){
            toast('has failed, please try later ','error');
        }
    }


    public function delete($bookingId){

        $booking =Booking::find($bookingId) ;

        if(!$booking){
            return redirect()->route('admin.booking.index')->with(['error' =>'there is no booking' ]);
        }

        $booking->delete();
             toast('successfully deleted','success');
          return redirect()->route('admin.booking.index')->with(['success' =>'successfully deleted' ]);
    }

}
