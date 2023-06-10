<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EstudiantesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('estudiantes')->insert([
            ['rut'=>'21311940-0','nombre'=>'Cristóbal','apellido'=>'Carvacho','email'=>'cristobal.carvacho@usm.cl'],
            ['rut'=>'12345678-9','nombre'=>'Cristian','apellido'=>'Salinas','email'=>'cristian.salinas@usm.cl'],
        ]);
    }
}
