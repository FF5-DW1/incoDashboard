<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

       \App\Models\User::factory()->create([
          'nombre' => 'Angel',
          'apellido'=>'Ruiz',
          'email' => 'angel@Inco.com',
          'password' => Hash::make('hola123'),
          'remember_token' => Str::random(10),
     ])->assignRole('Admin');
    //  esta persona va tener solo un rol el rol1 de admin

     \App\Models\User::factory()->create([
          'nombre' => 'Ana',
          'apellido'=>'Martines',
          'email' => 'ana@Inco.com',
          'password' => Hash::make('hola1234'),
          'remember_token' => Str::random(10),
        ])->assignRole('Coordinador');   
     //]);

     // User::factory(9)->create();
     //para rellenar 9 datos figticios
 

    }
}
