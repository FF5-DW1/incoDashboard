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
            $table->string('nombres')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('email')->unique();
            $table->string('dni_nie_pasaporte')->unique();
            $table->string('telefono')->nullable();
            $table->string('residente')->nullable();
            $table->string('ciudad_residencia')->nullable();
            $table->string('pais_nacimiento')->nullable();
            $table->string('rango_edad')->nullable();
            $table->string('genero')->nullable();
            $table->string('programa_elegido')->nullable();
            $table->string('canal_captacion')->nullable();
            $table->string('situacion_profesional')->nullable();
            $table->string('situacion_actual')->nullable();
            $table->string('nivel_educacion')->nullable();
            $table->string('permiso_trabajo_es')->nullable();
            $table->string('disponibilidad_ordenador')->nullable();
            $table->string('disponibilidad_horaria')->nullable();
            $table->string('nivel_ingles')->nullable();
            $table->longText('presentacion_breve')->nullable();
            $table->string('estado')->default('pendiente');
            $table->string('id_inco')->default(' ');
<<<<<<< HEAD:html/database/migrations/2023_06_30_120706_create_alumnos_table.php
            $table->timestamps();
            #$table->bigInteger('id')->unsigned(); 
            #&table->foreignid('user_id')->references('id')->on('users'); 
            #$table->rememberToken();
=======

            #$table->unsignedBigInteger('provincias_id');
            #$table->unsignedBigInteger('paises_id');
            #$table->rememberToken();
            $table->timestamps();
            
            #$table->foreign('provincias_id')->references('id')->on('provincias');
            #$table->foreign('paises_id')->references('id')->on('paises');
>>>>>>> featureBaseDatos:html/database/migrations/2023_06_30_160706_create_alumnos_table.php
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
