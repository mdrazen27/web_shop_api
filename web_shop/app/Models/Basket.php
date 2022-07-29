<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    use HasFactory;

    public function belongsToInstrument(){
        return $this->belongsTo(Instrument::class,'instruments_id','id');
    }
}
