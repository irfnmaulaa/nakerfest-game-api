<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/games/{game}/scores', [\App\Http\Controllers\GameController::class, 'get_all_scores']);
Route::post('/games/{game}/scores', [\App\Http\Controllers\GameController::class, 'post_score']);
