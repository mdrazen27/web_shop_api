<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    public function hasManyBaskets(): HasMany
    {
        return $this->hasMany(Basket::class,'orders_id','id');
    }

    public function belongsToUser(): BelongsTo
    {
        return $this->belongsTo(User::class,'users_id','id');
    }
}
