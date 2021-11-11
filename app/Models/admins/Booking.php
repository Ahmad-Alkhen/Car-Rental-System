<?php

namespace App\Models\admins;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public $timestamps=false;

    protected $fillable=[
            'sku',
            'customer_id',
            'car_id',
            'rent_start',
            'rent_end',
            'info',

        ];

    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id');
    }

    public function car(){
        return $this->belongsTo(Car::class,'car_id');
    }

}
