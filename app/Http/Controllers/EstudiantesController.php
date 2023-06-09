<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    public function index(){
        $estudiantes = Estudiante::orderBy('apellido')->orderBy('nombre')->get();
        return view('estudiantes.index',compact('estudiantes'));
    }

    public function create(){
        $estudiante = Equipo::orderBy('nombre')->get();
        return view('jugadores.create',compact('equipos'));
    }

    public function store(Request $request){
        $estudiante = new Estudiante();
        $estudiante->rut = $request->rut;
        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->email = $request->email;
        $estudiante->save();
        return redirect()->route('estudiantes.index');
    }

    // public function edit(Jugador $jugador){
    //     $equipos = Equipo::orderBy('nombre')->get();
        
    //     // return view('jugadores.edit',compact('jugador'));
    //     return view('jugadores.edit',compact(['jugador','equipos']));
    // }

    public function update(Request $request,Estudiante $estudiante){
        $estudiante->rut = $request->rut;
        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->email = $request->email;

        $estudiante->save();

        return redirect()->route('estudiantes.index');
    }
}
