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

    public function getHoraInicioAttribute($value)
    {
        // Convertir la cadena a un objeto DateTime
        $dateTime = new \DateTime($value);

        // Obtener la hora y los minutos
        $hora = $dateTime->format('h:i');

        // Obtener AM o PM
        $periodo = $dateTime->format('A');

        // Concatenar la hora y el periodo (AM/PM)
        return $hora . ' ' . $periodo;
        //return $value;
    }

    public function getHoraFinAttribute($value)
    {
        // Convertir la cadena a un objeto DateTime
        $dateTime = new \DateTime($value);

        // Obtener la hora y los minutos
        $hora = $dateTime->format('h:i');

        // Obtener AM o PM
        $periodo = $dateTime->format('A');

        // Concatenar la hora y el periodo (AM/PM)
        return $hora . ' ' . $periodo;
        //return $value;
    }
}
