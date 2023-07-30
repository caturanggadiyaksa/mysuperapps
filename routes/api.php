<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\QuranController;
use App\Http\Controllers\AuthorizedAppController;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Blog\UserBlogController;
use App\Http\Controllers\Blog\DetailUserblogController;
use App\Http\Controllers\Blog\KategoriBlogController;
use App\Http\Controllers\Blog\TagBlogController;
use App\Http\Controllers\Blog\SosmedBlogController;
use App\Http\Controllers\JuzController;
use App\Http\Controllers\IndopakController;
use App\Http\Controllers\UtsmaniController;


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
    Route::apiResource('/juz', JuzController::class);
    Route::apiResource('/indopak', IndopakController::class);
    Route::apiResource('/utsmani', UtsmaniController::class);

});




Route::post('apps/register', [AuthorizedAppController::class, 'register']);

Route::apiResource('/blog', BlogController::class);
Route::apiResource('/userblog', UserBlogController::class);
Route::apiResource('/detailuserblog', DetailUserblogController::class);
Route::apiResource('/tag', TagBlogController::class);
Route::apiResource('/sosmed', SosmedBlogController::class);
Route::apiResource('/kategori', KategoriBlogController::class);


