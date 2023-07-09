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
            $table->string('permiso_trabajo_Es')->nullable();
            $table->string('disponibilidad_ordenador')->nullable();
            $table->string('disponibilidad_horaria')->nullable();
            $table->string('nivel_ingles')->nullable();
            $table->text('presentacion_breve')->nullable();
            $table->string('estado')->default('pendiente');
            $table->string('id_inco')->default(' ');
            $table->timestamps();
            #$table->bigInteger('id')->unsigned(); 
            #&table->foreignid('user_id')->references('id')->on('users'); 
            #$table->rememberToken();
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
