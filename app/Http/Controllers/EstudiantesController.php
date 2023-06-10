<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;


class EstudiantesController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::orderBy('apellido')->orderBy('nombre')->get();
        return view('estudiantes.index',compact('estudiantes'));
    }

    public function create()
    {
        return view('estudiantes.create');
    }

    public function store(Request $request, Estudiante $estudiante)
    {
        $estudiante           = new Estudiante();
        $estudiante->rut      = $request->rut;
        $estudiante->nombre   = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->email    = $request->email;

        $estudiante->save();

        return redirect()->route('estudiantes.index');
    }

    public function update(Request $request,Estudiante $estudiante)
    {
        $estudiante->rut      = $request->rut;
        $estudiante->nombre   = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->email    = $request->email;
        $estudiante->save();

        return redirect()->route('estudiantes.index');
    }
}
