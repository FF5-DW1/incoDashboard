<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\alumno::insert ([
            'nombres' => "antonia",
            'apellidos'=> "perez gonzalez",
            'email'=>"antonia@email.com",
            'dni_nie_pasaporte' =>"01234567S",
            'telefono'=>"666905485",
            'residente'=>"si",
            'ciudad_residencia'=> "Madrid",
            'pais_nacimiento'=> "España",
            'rango_edad'=>"26-35",
            'genero'=>'mujer',
            'programa_elegido'=>"analisis-de-datos",
            'canal_captacion'=>"amigo-familiar",
            'situacion_profesional'=>"becario-aprendiz",
            'situacion_actual'=>"sin-expectativas-profesionales",
            'nivel_educacion'=>"master",
            'permiso_trabajo_es'=>"si",
            'disponibilidad_ordenador'=>"si",
            'disponibilidad_horaria'=>"tardes",
            'nivel_ingles'=>"algo-de-ingles",
            'presentacion_breve'=>"lorem ipsum",
        ]);
            
    }
}
