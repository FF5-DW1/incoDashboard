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
      
      $this->call(RoleSeeder::class);
      
      //$this->call(UserSeederSeeder::class);
      //Category::factory(4)->create();
      //Tag::factory(8)->create();
      //$this->call(PostSeeder::class);


    }
}
