<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class ApiAuthController extends Controller
{
    public function authenticate(Request $request)
    {
        // grab credentials from the request

           header("Access-Control-Allow-Origin: *");

            // ALLOW OPTIONS METHOD
            $headers = [
                    'Access-Control-Allow-Methods'=> 'POST, GET, OPTIONS, PUT, DELETE',
                    'Access-Control-Allow-Headers'=> 'Content-Type, X-Auth-Token, Origin'
                ];
        $credentials = $request->only('email', 'password', 'name');

        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401,$headers);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500,$headers);
        }

        // all good so return the token
        return response()->json(compact('token'),$headers);
    }
}

