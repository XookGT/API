<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiAuthController extends Controller
{
    public function userAuth(Request $request)
    {

        $credentials = $request->only('email','password');
        $token = null;
        try{
            if(!$token = JWTAuth::attemp($credentials))
            {
                return response()->json(['Erro' => 'Invalid Credentials'],400);
            }
            else
                return response()->json(compact($token));

        }catch(JWTException $ex)
        {
            return response()->json(['Error' => "It has have an error"],500);
        }
    }
}
