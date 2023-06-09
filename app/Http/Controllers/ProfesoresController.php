<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesoresController extends Controller
{
    public function index()
    {
        $profesores = Profesor::orderByDesc('apellido')->orderBy('nombre')->get();

        return view('profesores.index',compact('profesores'));
    }
    
    public function create()
    {
        $equipos = Equipo::orderBy('nombre')->get();
        return view('partidos.create',compact('equipos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //insertar en tabla partido
        //al guardar $partido obtiene el ID generado por la BD
        $profesor = new Profesor();
        $profesor->fecha = $request->fecha;
        $profesor->estado = $request->estado;
        $partido->save();

        //insertar equipos del partido
        $partido->equipos()->attach($request->equipo_local,['es_local'=>true]);
        $partido->equipos()->attach($request->equipo_visita,['es_local'=>false]);

        //redireccionar a pagina de partidos
        return redirect()->route('partidos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Partido $partido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partido $partido)
    {
        $equipos = Equipo::orderBy('nombre')->get();

        $equipoLocal = $partido->equiposConPivot->where('pivot.es_local',true)->first();
        $equipoVisita = $partido->equiposConPivot->where('pivot.es_local',false)->first();

        return view('partidos.edit',compact(['partido','equipos','equipoLocal','equipoVisita']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partido $partido)
    {
        //actualizar los datos en tabla partido
        $partido->fecha = $request->fecha;
        $partido->estado = $request->estado;
        $partido->save();

        //actualizar datos en tabla interseccion (equipos y/o goles)
        //goles
        $equipoLocal = $partido->equiposConPivot->where('pivot.es_local',true)->first();
        $equipoVisita = $partido->equiposConPivot->where('pivot.es_local',false)->first();
        
        $partido->equiposConPivot()->updateExistingPivot($equipoLocal->id,['goles'=>$request->goles_local]);
        $partido->equiposConPivot()->updateExistingPivot($equipoVisita->id,['goles'=>$request->goles_visita]);

        //equipos
        if($equipoLocal->id != $request->equipo_local){
            $partido->equiposConPivot()->updateExistingPivot($equipoLocal->id,['equipo_id'=>$request->equipo_local]);
        }
        if($equipoVisita->id != $request->equipo_visita){
            $partido->equiposConPivot()->updateExistingPivot($equipoVisita->id,['equipo_id'=>$request->equipo_visita]);
        }


        //redireccionar a vista que lista partidos
        return redirect()->route('partidos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partido $partido)
    {
        $partido->equipos()->detach();
        $partido->delete();
        return redirect()->route('partidos.index');
    }
}
