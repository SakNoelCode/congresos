<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Galeria extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function congreso(): BelongsTo
    {
        return $this->belongsTo(Congreso::class);
    }
}
