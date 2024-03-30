<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Programa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function congreso(): BelongsTo
    {
        return $this->belongsTo(Congreso::class);
    }

    public function actividades(): HasMany
    {
        return $this->hasMany(Actividade::class);
    }
}
