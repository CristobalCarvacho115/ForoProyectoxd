<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propuesta;
use App\Models\Estudiante;
use Carbon\Carbon;


class PropuestasController extends Controller
{
    public function index(){
        $propuestas = Propuesta::orderBy('id')->get();
        return view('propuestas.index',compact('propuestas'));
    }

    public function show(Propuesta $propuesta){
        return view('propuestas.show',compact('propuesta')) ;
    }

    public function create()
    {
        $estudiantes = Estudiante::orderBy('nombre')->get();
        $now = Carbon::now();
        return view('propuestas.create',compact('estudiantes','now'));
    }

    public function store(Request $request, Propuesta $propuesta)
    {
        $propuesta = new Propuesta();

        $propuesta->fecha          = $request->fecha;
        $propuesta->estado         = $request->estado;
        $propuesta->estudiante_rut = $request->rut;
        //return $request->file('documento')->store('public/pdf');

        $propuesta->save();

        return redirect()->route('propuestas.index');
    }

    public function update(Request $request,Propuesta $propuesta){


        $propuesta->fecha          = $request->fecha;
        $propuesta->estado         = $request->estado;
        $propuesta->estudiante_rut = $request->estudiante_rut;

        $propuesta->save();
        return redirect()->route('propuestas.index');
    }
}
