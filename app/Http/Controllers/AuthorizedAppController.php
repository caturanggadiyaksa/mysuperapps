<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuthorizedApp;
use Illuminate\Support\Str;

class AuthorizedAppController extends Controller
{
    //

    public function register(Request $request)
    {
        // Validasi input dari request
        $validatedData = $request->validate([
            'name' => 'required|string',
            'redirect_uri' => 'required|url',
        ]);

        // Generate ID klien dan rahasia klien baru
        $clientId = bin2hex(random_bytes(16));
        $clientSecret = bin2hex(random_bytes(32));
        $apiKey = Str::random(40);

        // Simpan informasi aplikasi yang diizinkan ke dalam database
        $authorizedApp = AuthorizedApp::create([
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
            'name' => $validatedData['name'],
            'redirect_uri' => $validatedData['redirect_uri'],
            'api_key' => $apiKey,
        ]);

        return response()->json([
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
            'api_key' => $apiKey,
        ], 201);
    }
}
