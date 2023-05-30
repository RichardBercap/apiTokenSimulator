<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;


class TokenTest extends TestCase
{
    //use RefreshDatabase;

    public function testGenerate()
    {
     
            // Crear una instancia simulada del Request
        $requestData = ['id_client' => 1];
        $request = $this->post('/api/v1/generateToken', $requestData);

        // Verificar el código de respuesta de la solicitud
        $request->assertStatus(200);

        // Verificar que se haya creado un nuevo cliente en la base de datos
        //$this->assertDatabaseHas('clientE', ['name' => 'John Doe']);
        
    }
}
