<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\loginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logoutController extends Controller
{
    public function index(){
        Auth::logout();
        return redirect()->route('admin.getLogin');
        //return redirect('/');

    }
}
