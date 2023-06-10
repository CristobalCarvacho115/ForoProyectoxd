
@extends('templates.master')
@section('hojas-estilo')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

@section('script-referencias')
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>

    <div class="row">
        <div class="col-12 col-md-6 col-lg-4 col-xl-2 mb-3">
            <div class="card">
                <img src="{{asset('images/propuestas.jpg')}}" class="card-img-top">
                <div class="card-body">
                    <h6 class="card-title">Propuestas</h6>
                    <div class="btn-group d-flex justify-content-center">
                        <a href="{{route('propuestas.index')}}" class="btn btn-outline-success">Ver Propuesta</a>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 col-xl-2 mb-3">
            <div class="card">
                <img src="{{asset('images/estudiantes.jpg')}}" class="card-img-top">
                <div class="card-body">
                    <h6 class="card-title">Estudiantes</h6>
                    <div class="btn-group d-flex justify-content-center">
                        <a href="{{route('estudiantes.index')}}" class="btn btn-outline-success">Ver Estudiante</a>
                        <a href="{{route('propuestas.create')}}" class="btn btn-outline-success">Agregar Estudiante</a>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 col-xl-2 mb-3">
            <div class="card">
                <img src="{{asset('images/profesores.jpg')}}" class="card-img-top">
                <div class="card-body">
                    <h6 class="card-title">Profesores</h6>
                    <div class="btn-group d-flex justify-content-center">
                        <a href="{{route('profesores.index')}}" class="btn btn-outline-success">Ver Profesor</a>
                        <a href="{{route('profesores.create')}}" class="btn btn-outline-success">Agregar Profesor</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script-manual')
<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

</script>
@endsection
