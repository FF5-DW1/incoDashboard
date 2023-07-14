<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $role1 = Role::create(['name'=>'Admin']);
    $role2 = Role::create(['name'=>'Coordinador']);

    //     //permiso para acceser a la home poner la ruta 
    //     // editar, borrar
        Permission::create(['name'=>'home'])->syncRoles([$role1, $role2]);
         //syncRoles para varios permisos--- minuto 10:15
         // assignRole para un solo permiso
        Permission::create(['name'=>'registro.index'])->assignRole([$role2]);
        Permission::create(['name'=>'registro.create'])->assignRole([$role2]);
        Permission::create(['name'=>'registro.edit'])->assignRole([$role2]);
        Permission::create(['name'=>'registro.destroy'])->assignRole([$role2]);

    //     //falta mas permisos dependiendo de las rutas
    //     //para pasar los permisos a la base de datos
    //     //php artisan migrate:fresh --seed
   }
}
