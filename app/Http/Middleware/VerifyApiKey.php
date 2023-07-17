<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\AuthorizedApp;

class VerifyApiKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    // public function handle(Request $request, Closure $next)
    // {
    //     return $next($request);
    // }


    public function handle($request, Closure $next)
    {
        $apiKey = $request->header('API-Key');

        // Mencocokkan kunci API dengan data di database
        $authorizedApp = AuthorizedApp::where('api_key', $apiKey)->first();

        // Jika tidak ada data yang cocok, berikan respons dengan kode 401 (Unauthorized)
        if (!$authorizedApp) {
            return response()->json(['error' => 'Invalid API key'], 401);
        }

        return $next($request);
    }
}
