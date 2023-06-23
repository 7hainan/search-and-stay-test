<?php

namespace App\Http\Controllers\Auth\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email','password');

        if(!Auth::attempt($credentials))
        {
            abort(401,'Invalid Credentials');
        }

        $token = Auth::user()->createToken('jwt');

        return response()->json(['data'=>['token' => $token->plainTextToken ]]);

    }

    public function logout(){

        auth()->user()->currentAccessToken()->delete();

        return response()->json([],204);
    }
}
