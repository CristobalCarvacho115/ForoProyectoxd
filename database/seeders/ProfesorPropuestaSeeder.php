<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class ProfesorPropuestaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('profesor_propuesta')->insert([
            
        ]);
    }
}
