<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\Models\User;
class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    

     use DatabaseTransactions;
     use WithoutMiddleware;

    public function test_verificar_si_existe_usuario_basedatos(): void
    {
        //User::factory()->count(2)->create();
        User::factory()->create(['email' => 'angel@Inco.com']);

        $this->assertDatabaseCount('users', 3);

    

      $this->assertDatabaseHas('users', ['email' => 'angel@Inco.com']);
    
    }
    
    public function test_verificar_si_usuario_puede_ver_dashboard(): void
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)
                         ->get('/app/dashboard');   
                         $response->assertStatus(200);
    
    }

    public function test_verificar_si_usuario_puede_ver_graficos(): void
    {
        $user = User::factory()->make();
        $response = $this->actingAs($user)
                         ->get('/app/charts');   
                         $response->assertStatus(200);
    
    }
}
