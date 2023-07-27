<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
    public function test_verificar_si_existe_usuario_basedatos(): void
    {
        //User::factory()->count(2)->create();

        // Verificar si la tabla 'users' tiene exactamente dos registros
        $this->assertDatabaseCount('users', 2);

        // Verificar si la tabla 'users' tiene un registro con el email especificado
        $this->assertDatabaseHas('users', ['email' => 'angel@Inco.com']);

        // Realizar una solicitud de prueba a la ruta '/login' (puedes cambiarlo por la ruta que corresponda a tu login)
        $response = $this->get('/login');

        // Verificar si la respuesta tiene un código de estado HTTP 200
        $response->assertStatus(200);
    
    }

    // public function test_admin_puede_entrar_a_dashboard()
    // {
    //     // Crear un usuario administrador en la base de datos (asegúrate de tener una columna 'role' que indique si es administrador)
    //     $adminUser = Users::factory()->create(['role' => 'Administrador']);

    //     // Iniciar sesión como el usuario administrador
    //     $this->actingAs($adminUser);

    //     // Realizar la solicitud GET a la ruta de la dashboard
    //     $response = $this->get(route('dashboard'));

    //     // Verificar que la solicitud fue exitosa (status code 200)
    //     $response->assertStatus(200);

    //     // Verificar que el usuario administrador está viendo la vista correcta
    //     $response->assertViewIs('dashboard'); // Cambia 'dashboard' por el nombre de la vista de la dashboard
    // }
    //$response = $this->assertDatabaseCount('users',['email' => 'angel@Inco.com',]);
    

    //$this->assertDatabaseCount('users',2);
}
