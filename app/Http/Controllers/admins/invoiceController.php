<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\invoiceRequest;
use App\Http\Requests\carRequest;
use App\Models\admins\Booking;

use App\Models\admins\Car;
use App\Models\admins\Customer;
use App\Models\admins\Invoice;
use Illuminate\Http\Request;

use DateTime ;
class invoiceController extends Controller
{

    public function index(){

       $invoices= Invoice::with(['booking'=>function($q){
                                            $q->select('id','sku'); }])
                        ->get();

      //  $invoices= Invoice::  get();


     return view('admin.invoices.index',compact('invoices'));

    }

    public function create(){

     $bookings=Booking::select('id','sku','customer_id','car_id','rent_start','rent_end')->get();
     //$customers=   Customer::select('id','name')->get();
     //$cars=   Car::select('id','number')->get();

       return view('admin.invoices.create',compact('bookings'));
    }

     public function store(invoiceRequest $request){

        try {
               Invoice::create([
                 'booking_id'=>$request->booking_id,
                 'total_cost'=>$request->total_cost,
                 'paid'=>$request->paid,
                 'details'=>$request->details,
               ]);
                toast('successfully added','success');
              return redirect()->route('admin.invoice.index')->with(['success'=>'successfully added']);

       }catch (\Exception $exception){
            return $exception ;
          //  toast('has failed, please try later ','error');

         }
    }


    public function edit($invoiceId){

        $bookings=Booking::select('id','sku','customer_id','car_id','rent_start','rent_end')->get();

        $invoice =Invoice::find($invoiceId);
        if(!$invoice)
            return redirect()->route('admin.invoice.index')->with(['error' =>'there is no invoice' ]);
        else
        return view('admin.invoices.edit',compact('bookings','invoice'));
    }

   public function update(invoiceRequest $request,$invoiceId){
        try {
            $invoice =Invoice::find($invoiceId);
            if(!$invoice)
                return redirect()->route('admin.invoice.index');
            else{

                $invoice->update([
                    'booking_id'=>$request->booking_id,
                    'total_cost'=>$request->total_cost,
                    'paid'=>$request->paid,
                    'details'=>$request->details,
                ]);
                  toast('successfully edited','success');
                return redirect()->route('admin.invoice.index')->with(['success'=>'successfully edited']);
            }
        }catch (\Exception $exception){
            toast('has failed, please try later ','error');
        }
    }

    public function delete($invoiceId){

        $invoice =Invoice::find($invoiceId) ;

        if(!$invoice){
            return redirect()->route('admin.invoice.index')->with(['error' =>'there is no invoice' ]);
        }

        $invoice->delete();
             toast('successfully deleted','success');
          return redirect()->route('admin.invoice.index')->with(['success' =>'successfully deleted' ]);
    }


    public function change(Request $request){
        $bookingId = $request->id ;
        $booking =Booking::find($bookingId) ;

        if($booking){
            $start_time =  $booking->rent_start ;
            $finish_time = $booking->rent_end ;

            $start_time1 = new DateTime($start_time);
            $finish_time2 = new DateTime($finish_time);

            $interval = $start_time1->diff($finish_time2);

                $days = $interval->format('%a');
                return $days * 100 ;

        }


       // toast('successfully deleted','success');
      //  return redirect()->route('admin.booking.index')->with(['success' =>'successfully deleted' ]);
    }



}
