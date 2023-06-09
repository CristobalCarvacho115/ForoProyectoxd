<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class PropuestasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('propuestas')->insert([
            ['id'=>1,'fecha'=>Carbon::now(),'estado'=>0,'estudiante_rut'=>'21311940-0'],
            ['id'=>2,'fecha'=>Carbon::now(),'estado'=>1,'estudiante_rut'=>'12345678-9']
        ]);
    }
}
