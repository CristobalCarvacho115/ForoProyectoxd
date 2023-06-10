@php
$estados = [0 => 'Esperando',1=>'Modificar',2=>'Rechazado',3=>'Aceaptado'];
@endphp
@extends('templates.master')

@section('hojas-estilo')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('contenido-principal')
{{-- titulo --}}
<div class="row mt-2">
    <div class="col-8">
        <h3>Propuesta</h3>
        <p>Propuestas de alumnos</p>
    </div>
    <div class="col-4 d-flex align-items-center justify-content-end">
        <a href="{{route('propuestas.create')}}" class="btn btn-success">Añadir propuesta</a>
    </div>
</div>

{{-- tabla --}}
<div class="row">
    <div class="col">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                    <th>Rut de estudiante</th>
                    <th>Ver</th>
                </tr>
            </thead>
            <tbody>
                @foreach($propuestas as $propuesta)
                <tr>
                    <td class="align-middle">{{$propuesta->id}}</td>
                    <td class="align-middle">{{$propuesta->rut}}</td>
                    <td class="align-middle">{{ $estados[$partido->estado] }}</td>
                    <td class="align-middle">{{$propuesta->email}}</td>
                    <td>
                        <a href="{{route('propuestas.show',$jugadores->rut)}}" class="btn btn-sm btn-info pb-0 text-white position-relative" data-bs-toggle="tooltip" data-bs-title="Ver {{ $equipo->nombre }}">
                            <span class="material-icons">eye-fill</span>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('script-referencias')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
@endsection

@section('script-manual')
<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

</script>
@endsection
