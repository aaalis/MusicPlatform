<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tracks', [\App\Http\Controllers\MusicController::class, 'getTracks']);
Route::post('/tracks', [\App\Http\Controllers\MusicController::class, 'createTrack']);
Route::get('/tracks/{track}', [\App\Http\Controllers\MusicController::class, 'getTrack']);
Route::put('/tracks/{track}', [\App\Http\Controllers\MusicController::class, 'updateTrack']);
Route::delete('/tracks/{track}', [\App\Http\Controllers\MusicController::class, 'deleteTrack']);

//Route::resource('/tracks',\App\Http\Controllers\MusicController::class);
