<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {


        Schema::create('estudiantes', function (Blueprint $table) {
            $table->string('rut',10)->primary(); //PK
            $table->string('nombre',20);
            $table->string('apellido',20);
            $table->string('email',50);
            
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
