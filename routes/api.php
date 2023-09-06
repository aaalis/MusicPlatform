<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tracks', [\App\Http\Controllers\MusicController::class, 'index']);
Route::post('/tracks', [\App\Http\Controllers\MusicController::class, 'store']);
Route::get('/tracks/{track}', [\App\Http\Controllers\MusicController::class, 'show']);
Route::put('tracks/{track}', [\App\Http\Controllers\MusicController::class, 'update']);
Route::delete('tracks/{track}', [\App\Http\Controllers\MusicController::class, 'destroy']);
