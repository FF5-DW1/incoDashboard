<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            #$table->bigInteger('id')->unsigned(); 
            #&table->foreignid('user_id')->references('id')->on('users');
           
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable();
            $table->string('email')->unique();
            $table->string('telefono');
            $table->string('programa');
            $table->string('cprograma');
            $table->string('vivesE');
            $table->date('fnacimiento');
            $table->string('residencia');
            $table->string('pnacimiento');
            $table->string('sprofesional');
            $table->string('situacion');
            $table->string('neducacion');
            $table->string('permisoTrabajo');
            $table->string('tienes_ordenador');
            $table->string('cingles');
            $table->string('disponibilidad');
;
            #$table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
