<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propuesta;
use App\Models\Estudiante;


class PropuestasController extends Controller
{
    public function index(){
        $propuestas = Propuesta::orderBy('id')->get();
        return view('propuestas.index',compact('propuestas'));
    }

    public function show(Propuesta $propuesta){
        return view('propuestas.show',compact('propuesta'));
    }

    public function create()
    {
        $estudiantes = Estudiante::orderBy('nombre')->get();
        return view('propuestas.create',compact('estudiantes'));
    }

    public function store(Request $request, Propuesta $propuesta)
    {
        $propuesta = new Propuesta();
        $propuesta->documento = $request->documento;
        $propuesta->estudiante_rut = $request->rut;
        $propuesta->apellido = $request->apellido;

        $propuesta->save();

        return redirect()->route('propuestas.index');
    }

    public function update(Request $request,Propuesta $propuesta){
        $propuesta->fecha          = $request->fecha;
        $propuesta->documento      = $request->documento;
        $propuesta->estado         = $request->estado;
        $propuesta->estudiante_rut = $request->estudiante_rut;

        $propuesta->save();
        return redirect()->route('propuestas.index');
    }
}
