<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use App\Models\Client;

class ClienteController extends Controller
{
    public function create(ClientRequest $request, Client $client ){
        $newClient = $client->create($request->validated());

        return ['status'=>true,'client'=>$newClient];
    }
}
