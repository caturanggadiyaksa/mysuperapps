<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
use Closure;
use Illuminate\Http\Request;
use App\Models\AuthorizedApp;


class VerifyCsrfToken extends Middleware
{

    public function handle($request, Closure $next)
    {
        // Mendapatkan ID Klien dan Rahasia Klien dari Authorization Header
        $clientId = $request->header('Client-ID');
        $clientSecret = $request->header('Client-Secret');

        // Mencocokkan ID Klien dan Rahasia Klien dengan data di database
        $authorizedApp = AuthorizedApp::where('client_id', $clientId)
            ->where('client_secret', $clientSecret)
            ->first();

        // Jika tidak ada data yang cocok, berikan respons dengan kode 401 (Unauthorized)
        if (!$authorizedApp) {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }

        // Tambahkan informasi aplikasi ke dalam objek request agar bisa diakses di controller
        $request->merge(['authorized_app' => $authorizedApp]);

        return $next($request);
    }
    
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    // protected $except = [
    //     //
    // ];

   

  
}


