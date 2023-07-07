<?php
#use Illuminate\Support\Facades\DB;
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       /* $provincias = ["Albacete","Alicante","Almería", "Asturias", "Ávila","Badajoz","Baleares",
                        "Barcelo", "Burgos","Cáceres","Cádiz","Cantabr","Castell","Ceuta","Ciudad Real",
                        "Córdoba","Cuenca","Gerona/G","Granada","Guadalaj","Guipúzcoa/Gipuzkoa","Huelva",
                        "Huesca", "Jaén","La Coruña/A Coruña","La Rioja","Las Palmas","León","Lérida/Lleida",
                        "Lugo", "Madrid", "Málaga","Melida","Murcia", "Navarra","Orense/Ourense","Palencia","Pontevedra",
                        "Salamanca","Segovia","oria","Tenerife","Teruel","Valencia","Valladoli",">Vizcaya/Bizkaia",
                        "Zamora","Zaragoza"
                     ];
                     foreach ($provincias as $provincia) {
                        DB::table('provincias')->insert([
                            'nombre' => $provincia,
                            'created_at' => now(),
                            'updated_at' => now(),
                        ]);
                    } */            
    }
}