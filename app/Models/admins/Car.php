<?php

namespace App\Models\admins;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public $timestamps=false;

    protected $fillable=[
            'name',
            'number',
            'type',
            'cost',
            'description',
            'owner_id',
            'active',

        ];



    public function owner(){
        return $this->belongsTo(Owner::class);
    }
}
