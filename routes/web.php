<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\ProfesoresController;
use App\Http\Controllers\PropuestasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/',[HomeController::class,'login'])->name('home.login');
Route::get('/index',[HomeController::class,'index'])->name('home.index');

Route::resource('/estudiantes',EstudiantesController::class)->parameter('estudiantes','estudiante');
Route::resource('/profesores',ProfesoresController::class)->parameter('profesores','profesor');
Route::resource('/propuestas',PropuestasController::class)->parameter('propuestas','propuesta');


