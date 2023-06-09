@extends('templates.master')

@section('contenido-principal')
{{-- titulo --}}
<div class="row mt-2">
    <div class="col-8">
        <h3>Agregar estudiante</h3>
    </div>
    <div class="col-4 d-flex align-items-center justify-content-end">
        <a href="{{route('estudiantes.index')}}" class="btn btn-warning">Cancelar</a>
    </div>
</div>

{{-- formulario --}}
<div class="col">
    <div class="card">
        <div class="card-header bg-dark text-white">Ingrese un nuevo estudiante</div>
        <div class="card-body">
            <form method="POST" action="{{route('estudiantes.store')}}">
                @csrf
                {{-- rut --}}
                <div class="mb-3">
                    <label for="rut" class="form-label">RUT</label>
                    <input type="text" id="rut" name="rut" class="form-control">
                </div>
                {{-- nombre --}}
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control">
                </div>
                {{-- apellido --}}
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" id="apellido" name="apellido" class="form-control">
                </div>
                {{-- email --}}
                <div class="mb-3">
                    <label for="numero_camiseta" class="form-label">email</label>
                    <input type="email" id="email" name="email" class="form-control">
                </div>
                {{-- botones --}}
                <div class="mb-3 d-grid gap-2 d-lg-block">
                    <button class="btn btn-warning" type="reset">Cancelar</button>
                    <button class="btn btn-success" type="submit">Agregar estudiante</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
