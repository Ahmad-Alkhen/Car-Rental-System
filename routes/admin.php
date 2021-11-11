<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'guest:admin','namespace'=>'admins'],function(){

    Route::get('login' , 'loginController@getLogin')->name('admin.getLogin');
    Route::post('login' , 'loginController@login')->name('admin.login');

});


Route::group(["middleware"=>'auth:admin','namespace'=>'admins'], function () {

    Route::get('/','dashController@index')->name('admin.dash');
    Route::get('logout','logoutController@index')->name('admin.logout');

    /*---------------------- Customers Route --------------------*/

    Route::group(['prefix'=>'customers'],function(){

        Route::get('/','customerController@index')->name('admin.customer.index');
        Route::get('create','customerController@create')->name('admin.customer.create');
        Route::post('store','customerController@store')->name('admin.customer.store');
        Route::get('edit/{id}','customerController@edit')->name('admin.customer.edit');
        Route::post('update/{id}','customerController@update')->name('admin.customer.update');
        Route::get('delete/{id}','customerController@delete')->name('admin.customer.delete');
    });



    /*---------------------- Owners Route --------------------*/

    Route::group(['prefix'=>'owners'],function(){

        Route::get('/','ownerController@index')->name('admin.owner.index');
        Route::get('create','ownerController@create')->name('admin.owner.create');
        Route::post('store','ownerController@store')->name('admin.owner.store');
        Route::get('edit/{id}','ownerController@edit')->name('admin.owner.edit');
        Route::post('update/{id}','ownerController@update')->name('admin.owner.update');
        Route::get('delete/{id}','ownerController@delete')->name('admin.owner.delete');
    });


    /*---------------------- Cars Route --------------------*/

    Route::group(['prefix'=>'cars'],function(){
        Route::get('/','carController@index')->name('admin.car.index');
        Route::get('create','carController@create')->name('admin.car.create');
        Route::post('store','carController@store')->name('admin.car.store');
        Route::get('edit/{id}','carController@edit')->name('admin.car.edit');
        Route::post('update/{id}','carController@update')->name('admin.car.update');
        Route::get('delete/{id}','carController@delete')->name('admin.car.delete');
    });


    /*---------------------- Bookings Route --------------------*/

    Route::group(['prefix'=>'bookings'],function(){
        Route::get('/','bookingController@index')->name('admin.booking.index');
        Route::get('create','bookingController@create')->name('admin.booking.create');
        Route::post('store','bookingController@store')->name('admin.booking.store');
        Route::get('edit/{id}','bookingController@edit')->name('admin.booking.edit');
        Route::post('update/{id}','bookingController@update')->name('admin.booking.update');
        Route::get('delete/{id}','bookingController@delete')->name('admin.booking.delete');
    });

    /*---------------------- Inoices Route --------------------*/

    Route::group(['prefix'=>'invoices'],function(){
        Route::get('/','invoiceController@index')->name('admin.invoice.index');
        Route::get('create','invoiceController@create')->name('admin.invoice.create');
        Route::post('store','invoiceController@store')->name('admin.invoice.store');
        Route::get('edit/{id}','invoiceController@edit')->name('admin.invoice.edit');
        Route::post('update/{id}','invoiceController@update')->name('admin.invoice.update');
        Route::get('delete/{id}','invoiceController@delete')->name('admin.invoice.delete');

        Route::post('change','invoiceController@change')->name('admin.invoice.change');

    });

});
