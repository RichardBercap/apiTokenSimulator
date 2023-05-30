<?php

namespace Tests\Unit\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\ClienteController;
use App\Http\Requests\ClientRequest;
use App\Models\Client;

class ClientTest extends TestCase
{
    //use RefreshDatabase;

    public function testCreate()
    {
     
            // Crear una instancia simulada del Request
        $requestData = ['name' => 'John Doe','dni'=>'51154651'];
        $request = $this->post('/api/v1/storeclient', $requestData);

        // Verificar el código de respuesta de la solicitud
        $request->assertStatus(200);

        // Verificar que se haya creado un nuevo cliente en la base de datos
        $this->assertDatabaseHas('clientE', ['name' => 'John Doe']);
        
    }
}
