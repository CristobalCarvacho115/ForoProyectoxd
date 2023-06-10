<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propuesta;

class PropuestasController extends Controller
{
    public function index(){
        $propuestas = Propuesta::all();
        return view('propuestas.index',compact('propuestas'));
    }

    public function show(Propuesta $propuesta){
        return view('propuestas.show',compact('propuesta'));
    }

    public function update(Request $request,Propuesta $propuesta){
        $propuesta->fecha = $request->fecha;
        $propuesta->documento = $request->documento;
        $propuesta->estado = $request->estado;
        $propuesta->estudiante_rut = $request->estudiante_rut;

        $propuesta->save();
        return redirect()->route('propuestas.index');
    }
}
