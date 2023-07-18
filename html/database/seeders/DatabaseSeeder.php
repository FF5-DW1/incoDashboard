<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      //borra los directorios llamados post
      //Storage::deleteDirectory('post');
      //Storage::makeDirectory('post');

      //llamar y ejecutar el RoleSeeder y se generarán los registros 
      //de roles en la base de datos según la lógica definida
      
      // $this->call(RoleSeeder::class);
      $this->call(UserSeeder::class);
      
      //$this->call(UserSeederSeeder::class);
      //Category::factory(4)->create();
      //Tag::factory(8)->create();
      //$this->call(PostSeeder::class);


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
              'edad'=>"08/05/1991",
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
  
          \App\Models\alumno::insert ([
              'nombres' => "manuel",
              'apellidos'=> "gomez gonzalez",
              'email'=>"manuela@email.com",
              'dni_nie_pasaporte' =>"01234567A",
              'telefono'=>"666905475",
              'residente'=>"si",
              'ciudad_residencia'=> "Madrid",
              'pais_nacimiento'=> "Ecuador",
              'edad'=>"10/08/1990",
              'genero'=>'hombre',
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
  
          \App\Models\alumno::insert ([
              'nombres' => "oriol",
              'apellidos'=> "gomez santillan",
              'email'=>"oriol@email.com",
              'dni_nie_pasaporte' =>"01534567A",
              'telefono'=>"666105475",
              'residente'=>"si",
              'ciudad_residencia'=> "Madrid",
              'pais_nacimiento'=> "España",
              'edad'=>"10/07/1990",
              'genero'=>'hombre',
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
