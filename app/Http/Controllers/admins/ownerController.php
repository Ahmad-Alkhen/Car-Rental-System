<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\ownerRequest;
use App\Models\admins\Car;

use App\Models\admins\Owner;
use Illuminate\Http\Request;

class ownerController extends Controller
{

    public function index(){

     $owners= Owner:: get();
        return view('admin.owners.index',compact('owners'));

    }

    public function create(){
        try {

            return view('admin.owners.create');

        }catch (\Exception $exception){
            toast('has failed, please try later ','error');
        }
    }

     public function store(ownerRequest  $request){

        try {

               Owner::create([
                 'name'=>$request->name,
                 'number'=>$request->number,

               ]);
                toast('successfully added','success');
              return redirect()->route('admin.owner.index')->with(['success'=>'successfully added']);

       }catch (\Exception $exception){
          //  return $exception ;
            toast('has failed, please try later ','error');

        }
    }


    public function edit($ownerId){
        $owner =Owner::find($ownerId);
        if(!$owner)
            return redirect()->route('admin.owner.index')->with(['error' =>'there is no owner' ]);
        else
        return view('admin.owners.edit',compact('owner'));
    }

    public function update(ownerRequest $request,$ownerId){
        try {
            $owner =Owner::find($ownerId);
            if(!$owner)
                return redirect()->route('admin.owner.index');
            else{

                $owner->update([
                    'name'=>$request->name,
                    'number'=>$request->number,
                ]);
                  toast('successfully edited','success');
                return redirect()->route('admin.owner.index')->with(['success'=>'successfully edited']);
            }
        }catch (\Exception $exception){
            toast('has failed, please try later ','error');
        }
    }


    public function delete($ownerId){

        $owner =Owner::find($ownerId) ;

        if(!$owner){
            return redirect()->route('admin.owner.index')->with(['error' =>'there is no owner' ]);
        }

        $owner->delete();
             toast('successfully deleted','success');
          return redirect()->route('admin.owner.index')->with(['success' =>'successfully deleted' ]);
    }

}
