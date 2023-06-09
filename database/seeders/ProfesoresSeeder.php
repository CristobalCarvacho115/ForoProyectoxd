<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;



class ProfesoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profesores')->insert([
            ['id'=>1,'carlos.alten@usm.cl','nombre'=>'Carlos','apellido'=>'Alten'],
            ['id'=>2,'gonzalo.mendoza@usm.cl','nombre'=>'Gonzalo','apellido'=>'Mendoza'],
        ]);
    }
}
