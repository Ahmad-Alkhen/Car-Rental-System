<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'guest:admin','namespace'=>'admins'],function(){

    Route::get('login' , 'loginController@getLogin')->name('admin.getLogin');
    Route::post('login' , 'loginController@login')->name('admin.login');

});


Route::group(["middleware"=>'auth:admin','namespace'=>'admins'], function () {

    Route::get('/','dashController@index')->name('admin.dash');
    Route::get('logout','logoutController@index')->name('admin.logout');
});
