<?php

namespace App\Http\Controllers;

use App\Models\Congreso;
use App\Models\Galeria;
use App\Models\Patrocinadore;
use App\Models\Ponente;
use App\Models\Programa;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function index()
    {
        $congreso = Congreso::where('es_seleccionado', true)->first();

        $ponentes = Ponente::whereHas('congreso', function ($query) {
            $query->where('es_seleccionado', true);
        })->get();

        $programacion = Programa::whereHas('congreso', function ($query) {
            $query->where('es_seleccionado', true);
        })
            ->with('actividades')
            ->get();

        $galeria = Galeria::whereHas('congreso', function ($query) {
            $query->where('es_seleccionado', true);
        })->get();

        $patrocinadores = Patrocinadore::whereHas('congreso', function ($query) {
            $query->where('es_seleccionado', true);
        })->get();

        //return $programacion;

        return view('welcome', compact('congreso', 'ponentes', 'programacion', 'galeria', 'patrocinadores'));
    }

    public function showPonente(Ponente $ponente)
    {
        //return $ponente;
        return view('ponente', compact('ponente'));
    }
}
