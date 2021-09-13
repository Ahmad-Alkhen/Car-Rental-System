<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\loginRequest;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

class loginController extends Controller
{
    public function getLogin(){
        return view('admin.login');
    }

    public function login(loginRequest $request){

            //  $remember_me = $request->has('remember_me')?true:false ;

            if(auth()->guard('admin')->attempt(['email'=>$request->input('email'),'password'=>$request->input('password')])){
                return redirect()->route('admin.dash');
            }
            else{
                return redirect()->route('admin.getLogin')->with(['error'=>'يوجد خطأ في بيانات الدخول']);
            }

    }
}
