<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtigoController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Alternativa para diminuir o fluxo de rotas
Route::resource('artigos', '\App\Http\Controllers\ArtigoController');
/*
Route::get('artigos', [ArtigoController::class, 'index']);
Route::get('artigos/{id}', [ArtigoController::class, 'show']);
Route::post('artigos', [ArtigoController::class, 'store']);
Route::put('artigos/{id}', [ArtigoController::class, 'update']);
Route::delete('artigos/{id}', [ArtigoController::class, 'destroy']);
*/
