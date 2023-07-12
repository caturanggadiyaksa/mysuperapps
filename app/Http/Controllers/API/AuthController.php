<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('auth-token')->plainTextToken;

            return response()->json(['token' => $token]);
        }else {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        // return response()->json(['message' => 'Access denied'], 403);
        // return response()->json(['message' => 'Unauthorized'], 401);
    }
}
