<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;


class ProfesoresController extends Controller
{
    public function index()
    {
        $profesores = Profesor::orderBy('apellido')->orderBy('nombre')->get();
        return view('profesores.index',compact('profesores'));
    }

    public function create()
    {
        return view('profesores.create');
    }

    public function store(Request $request, Profesor $profesor)
    {
        $profesor = new Profesor();
        $profesor->email    = $request->email;
        $profesor->nombre   = $request->nombre;
        $profesor->apellido = $request->apellido;

        $profesor->save();

        return redirect()->route('profesores.index');
    }

    // public function show(Partido $partido)
    // {
    //     //
    // }

    // public function edit(Partido $partido)
    // {
    //     $equipos = Equipo::orderBy('nombre')->get();

    //     $equipoLocal = $partido->equiposConPivot->where('pivot.es_local',true)->first();
    //     $equipoVisita = $partido->equiposConPivot->where('pivot.es_local',false)->first();

    //     return view('partidos.edit',compact(['partido','equipos','equipoLocal','equipoVisita']));
    // }

    public function update(Request $request, Profesor $profesor)
    {
        $profesor->email    = $request->email;
        $profesor->nombre   = $request->nombre;
        $profesor->apellido = $request->apellido;

        $profesor->save();

        return redirect()->route('profesores.index');
    }

}
