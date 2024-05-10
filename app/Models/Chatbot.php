<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chatbot extends Model
{
    use HasFactory;

    protected $table = 'chatbot';

    protected $guarded = ['id'];

    public function congreso(): BelongsTo
    {
        return $this->belongsTo(Congreso::class);
    }
}
