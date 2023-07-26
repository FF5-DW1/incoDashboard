<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormularioTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    

    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');
 
        $response->assertStatus(200);
    }

    public function test_recibir_datos_del_formulario_parte_uno(): void
    {
        $response = $this->post('formulario/step-one', [
            'nombres'=>'andrea',
            'apellidos'=>'vazquez',
            'email'=>'andrea.vazquez@gmail.com',
            'dni_nie_pasaporte' =>'34235678A',
            'telefono'=>'566743213',
            'residente' => 'si',
            ]);

        $response->assertStatus(201);
    }
}
