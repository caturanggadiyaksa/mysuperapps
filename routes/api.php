<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\QuranController;
use App\Http\Controllers\AuthorizedAppController;




// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::middleware('auth:sanctum')->group(function () {
    Route::middleware('admin.api')->group(function () {
        Route::apiResource('user', UserController::class);
    });

  
});


Route::group(['middleware' => 'verify.api.key'], function () {
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('quran', [QuranController::class, 'index']);
    Route::get('quran/{id}', [QuranController::class, 'show']);
    Route::get('quran/{id}/ayat/{ayatId}', [QuranController::class, 'showAyat']);
    Route::post('surahs', [QuranController::class, 'store']);
    
});


Route::post('apps/register', [AuthorizedAppController::class, 'register']);
