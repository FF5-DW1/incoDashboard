<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        //\App\Models\User::factory()->create([
         // 'name' => 'Test User',
         //'email' => 'test@example.com',
       // ]);

        \App\Models\User::factory()->create([
           'name' => 'Angel',
           'apellido'=>'Ruiz',
            'email' => 'angel@factoriaF5.com',
            'password' => Hash::make('hola1234')
        ])->assignRole('Admin');


        //\App\Models\User::factory()->create([
          //  'name' => 'Ana',
          //  'apellido'=>'Martines',
          //  'email' => 'ana@factoriaF5.com',
          //  'password' => Hash::make('hola1234')
        //]);

        //User::factory(9)->create();
        //para rellenar 9 datos figticios
    

    }
}
