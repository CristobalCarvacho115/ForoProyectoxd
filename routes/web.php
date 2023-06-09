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
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'login'])->name('home.login');
Route::get('/index',[HomeController::class,'index'])->name('home.index');


Route::resource('/estudiantes',EstudiantesController::class)->parameter('estudiantes','estudiante');
Route::resource('/profesores',ProfesoresController::class);
Route::resource('/propuestas',ProfesoresController::class);


