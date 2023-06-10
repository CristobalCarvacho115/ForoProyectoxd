<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('propuestas', function (Blueprint $table) {
            $table->integer('id')->autoIncrement(); //PK
            $table->date('fecha');
            $table->string('documento',100);
            $table->tinyInteger('estado');

            //FK
            $table->string('estudiante_rut',10);
            $table->foreign('estudiante_rut')->references('rut')->on('estudiantes');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('propuestas');
    }
};
