<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Congreso extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function ponentes(): HasMany
    {
        return $this->hasMany(Ponente::class);
    }

    public function galerias(): HasMany
    {
        return $this->hasMany(Galeria::class);
    }

    public function patrocinadores(): HasMany
    {
        return $this->hasMany(Patrocinadore::class);
    }

    public function programas(): HasMany
    {
        return $this->hasMany(Programa::class);
    }

    public function invitado(): HasMany
    {
        return $this->hasMany(Invitado::class);
    }

    public function chatBot(): HasMany
    {
        return $this->hasMany(Chatbot::class);
    }
}
