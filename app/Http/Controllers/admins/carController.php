<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\carRequest;
use App\Models\admins\Car;

use App\Models\admins\Owner;
use Illuminate\Http\Request;

class carController extends Controller
{

    public function index(){

     $cars= Car::with(['owner'=>function($q){
                             $q->select('id','name');
                          }])-> get();
        return view('admin.cars.index',compact('cars'));

    }

    public function create(){
        try {
            $owners = Owner::get();
            return view('admin.cars.create',compact('owners'));

        }catch (\Exception $exception){
            toast('has failed, please try later ','error');
        }
    }

     public function store(carRequest $request){

        try {

            if (!$request->has('active')){
                $active= 0 ;
            }else
                $active = $request->active;


               Car::create([
                 'name'=>$request->name,
                 'number'=>$request->number,
                 'type'=>$request->type,
                 'cost'=>$request->cost,
                 'description'=>$request->description,
                 'owner_id'=>$request->owner_id,
                 'active'=>$active,

               ]);
                toast('successfully added','success');
              return redirect()->route('admin.car.index')->with(['success'=>'successfully added']);

       }catch (\Exception $exception){
            toast('has failed, please try later ','error');

        }
    }


    public function edit($carId){
        $car =Car::find($carId);
        if(!$car)
            return redirect()->route('admin.car.index')->with(['error' =>'there is no car' ]);
        else
        return view('admin.cars.edit',compact('car'));
    }

    public function update(carRequest $request,$carId){
        try {
            $car =Car::find($carId);
            if(!$car)
                return redirect()->route('admin.car.index');
            else{

                if (!$request->has('active')){
                    $active= 0 ;
                }else
                    $active = $request->active;

                $car->update([
                    'name'=>$request->name,
                    'number'=>$request->number,
                    'type'=>$request->type,
                    'cost'=>$request->cost,
                    'description'=>$request->description,
                    'active'=>$active,
                ]);
                  toast('successfully edited','success');
                return redirect()->route('admin.car.index')->with(['success'=>'successfully edited']);
            }
        }catch (\Exception $exception){
            toast('has failed, please try later ','error');
        }
    }


    public function delete($carId){

        $car =Car::find($carId) ;

        if(!$car){
            return redirect()->route('admin.car.index')->with(['error' =>'there is no car' ]);
        }

        $car->delete();
             toast('successfully deleted','success');
          return redirect()->route('admin.car.index')->with(['success' =>'successfully deleted' ]);
    }

}
