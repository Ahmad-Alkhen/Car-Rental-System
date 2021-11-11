<?php

namespace App\Models\admins;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public $timestamps=false;

    protected $fillable=[
            'name',
            'gender',
            'address',
            'phone',

        ];
}
