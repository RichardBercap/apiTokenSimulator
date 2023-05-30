<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\Token;
class TokenController extends Controller
{
    use Token;
    public function generate(\App\Http\Requests\TokenRequest $request ,\App\Models\Token $token){
        if($request->validated()){
            $request->merge([
               'token'=> $this->generateNewcode(25), 
            ]);
            $newToken = $token->create($request->validated());
            return ['status'=>true,'token'=>$newToken->token];
        }

    } 
}
