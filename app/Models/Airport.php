<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    use HasFactory;




    public function arrivals(){
        return $this->hasMany(Flight::class,'code_arrival','code');
    }

    public function departures(){
        return $this->hasMany(Flight::class,'code_departure','code');
    }
}
