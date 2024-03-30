<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Actividade extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function ponente(): BelongsTo
    {
        return $this->belongsTo(Ponente::class);
    }

    public function programa(): BelongsTo
    {
        return $this->belongsTo(Programa::class);
    }
}
