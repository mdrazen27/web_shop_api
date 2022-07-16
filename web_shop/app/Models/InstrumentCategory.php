<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class InstrumentCategory extends Model
{
    use HasFactory;

    protected $fillable=['name','photo'];

    public function hasManyInstruments(): HasMany
    {
        return $this->hasMany(Instrument::class);
    }

    public function findCategoryById($id): Instrument
    {
        return $this->findOrFail($id);
    }

}
