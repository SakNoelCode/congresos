<?php

namespace App\Http\Controllers;

use App\Models\Congreso;
use App\Models\Galeria;
use App\Models\Invitado;
use App\Models\Patrocinadore;
use App\Models\Ponente;
use App\Models\Programa;
use Exception;
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
        return view('ponente', compact('ponente'));
    }

    public function inscripciones()
    {
        $congreso = Congreso::where('es_seleccionado', true)->first();
        if ($congreso->abierto_inscripciones) {
            return view('inscripciones', compact('congreso'));
        } else {
            return view('no-inscripciones');
        }
    }

    public function saveInscripciones(Request $request)
    {
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
            'tipo_documento' => 'required',
            'numero_documento' => 'required',
            'institucion' => 'required',
            'pais' => 'required',
            'ciudad' => 'required'
        ]);

        $congreso_id = Congreso::where('es_seleccionado', true)->first()->id;

        $request->merge([
            'razon_social' => $request->nombres . ' ' . $request->apellidos,
            'congreso_id' => $congreso_id
        ]);

        try {
            Invitado::create($request->all());
        } catch (Exception $e) {
            dd($e);
            return redirect()->back()->with('error', 'Hubo un error al crear el invitado.');
        }

        return view('registroFinalizado');
    }
}
