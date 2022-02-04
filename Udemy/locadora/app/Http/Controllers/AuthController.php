<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credenciais = $request->all(['email','password']);

        //autenticando
        $token = auth('api')->attempt($credenciais);

        return ($token) ? response()->json(['token'=>$token] , 200) : response()->json(['error' => "Usuario/Senha Invalidos"],403);

    }

    public function logout()
    {
        return "logout";
    }

    public function refresh()
    {
        return "refresh";
    }

    public function me()
    {
        return "me";
    }
}
