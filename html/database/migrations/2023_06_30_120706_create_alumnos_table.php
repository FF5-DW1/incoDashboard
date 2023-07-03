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
            $table->string('telefono')->nullable();
            $table->string('programa')->nullable();
            $table->string('cprograma')->nullable();
            $table->string('vivesE')->nullable();
            $table->date('fnacimiento')->nullable();
            $table->string('residencia')->nullable();
            $table->string('pnacimiento')->nullable();
            $table->string('sprofesional')->nullable();
            $table->string('situacion')->nullable();
            $table->string('neducacion')->nullable();
            $table->string('permisoTrabajo')->nullable();
            $table->string('tienes_ordenador')->nullable();
            $table->string('cingles')->nullable();
            $table->string('disponibilidad')->nullable();
            $table->string('estado')->default('pendiente');
            #$table->string('id_inco')->default(' ');
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
