<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\customerRequest;
use App\Models\admins\Customer;
use Illuminate\Http\Request;

class customerController extends Controller
{

    public function index(){

     $customers= Customer::get();
        return view('admin.customers.index',compact('customers'));

    }

    public function create(){
        return view('admin.customers.create');
    }

    public function store(customerRequest $request){

        try {

               Customer::create([
                 'name'=>$request->name,
                 'address'=>$request->address,
                 'phone'=>$request->phone,
                 'gender'=>$request->gender,
               ]);
                toast('successfully added','success');
              return redirect()->route('admin.customer.index')->with(['success'=>'successfully added']);

        }catch (\Exception $exception){
            toast('has failed, please try later ','error');
        }
    }

    public function edit($customerId){
        $customer =Customer::find($customerId);
        if(!$customer)
            return redirect()->route('admin.customer.index')->with(['error' =>'there is no customer' ]);
        else
        return view('admin.customers.edit',compact('customer'));
    }

    public function update(customerRequest $request,$customerId){
        try {
            $customer =Customer::find($customerId);
            if(!$customer)
                return redirect()->route('admin.customer.index');
            else{
                $customer->update([
                    'name'=>$request->name,
                    'address'=>$request->address,
                    'phone'=>$request->phone,
                    'gender'=>$request->gender,
                ]);
                  toast('successfully edited','success');
                return redirect()->route('admin.customer.index')->with(['success'=>'successfully edited']);
            }
        }catch (\Exception $exception){
            toast('has failed, please try later ','error');
        }
    }


    public function delete($customerId){

        $customer =Customer::find($customerId) ;

        if(!$customer){
            return redirect()->route('admin.customer.index')->with(['error' =>'there is no customer' ]);
        }

        $customer->delete();
             toast('successfully deleted','success');
          return redirect()->route('admin.customer.index')->with(['success' =>'successfully deleted' ]);
    }

}
