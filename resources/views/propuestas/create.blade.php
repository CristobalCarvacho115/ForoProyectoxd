@extends('templates.master')

@section('contenido-principal')
{{-- titulo --}}
<div class="row mt-2">
    <div class="col-8">
        <h3>Crear nueva propuesta</h3>
    </div>
    <div class="col-4 d-flex align-items-center justify-content-end">
        <a href="{{route('propuestas.index')}}" class="btn btn-warning">Cancelar</a>
    </div>
</div>

{{-- formulario --}}
<div class="col">
    <div class="card">
        <div class="card-header bg-dark text-white">Ingrese una nueva propuesta</div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="{{route('propuestas.store')}}">
                @csrf
                {{-- rut --}}
                <div class="mb-3">
                    <label for="estudiante_rut" class="form-label">Ingrese rut que esté en el sistema</label>
                    <select name="estudiante_rut" id="estudiante_rut" class="form-control">
                        <option value="">Ingrese su rut</option>
                        @foreach($estudiantes as $estudiante)
                        <option value="{{$estudiante['rut']}}">{{$estudiante['rut']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="documento" class="form-label">Ingrese documento PDF con su propuesta</label>
                    <input type="file" id="documento" name="documento" class="form-control">
                </div>
                {{-- botones --}}
                <div class="mb-3 d-grid gap-2 d-lg-block">
                    <button class="btn btn-warning" type="reset">Cancelar</button>
                    <button class="btn btn-success" type="submit">Subir propuesta</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
