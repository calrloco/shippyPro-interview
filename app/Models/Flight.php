<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    public function from(){
        return $this->BelongsTo(Airport::class,'code_departure','code');
    }

    public function to(){
        return $this->BelongsTo(Airport::class,'code_arrival','code');
    }
}
