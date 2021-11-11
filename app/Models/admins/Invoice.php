<?php

namespace App\Models\admins;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    public $timestamps=false;

    protected $fillable=[
            'booking_id',
            'total_cost',
            'paid',
            'details',
        ];

    public function booking(){
        return $this->belongsTo(Booking::class);
    }


}
