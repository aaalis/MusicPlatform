<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/getTracks', [\App\Http\Controllers\MusicController::class, 'getTracks']);
Route::post('/createTrack', [\App\Http\Controllers\MusicController::class, 'createTrack']);
Route::get('/getTrack/{track}', [\App\Http\Controllers\MusicController::class, 'getTrack']);
Route::put('/updateTrack/{track}', [\App\Http\Controllers\MusicController::class, 'updateTrack']);
Route::delete('/deleteTrack/{track}', [\App\Http\Controllers\MusicController::class, 'deleteTrack']);

//Route::resource('/tracks',\App\Http\Controllers\MusicController::class);
