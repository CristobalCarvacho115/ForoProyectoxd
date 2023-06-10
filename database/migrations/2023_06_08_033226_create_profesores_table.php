<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('profesores', function (Blueprint $table) {
            $table->integer('id')->autoIncrement(); //PK
            $table->string('email',50);
            $table->string('nombre',20);
            $table->string('apellido',20);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('profesores');
    }
};
