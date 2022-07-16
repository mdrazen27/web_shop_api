<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $fillable=['description'];

    public function belongsToInstrument(): BelongsTo
    {
        return $this->belongsTo(Instrument::class,'instruments_id','id');
    }

    public function  belongsToUser(): BelongsTo
    {
        return $this->belongsTo(User::class,'users_id','id');
    }
}
