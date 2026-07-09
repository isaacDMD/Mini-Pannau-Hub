<?php

use App\Http\Controllers\PannauController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('panneau', [PannauController::class,'list']);

Route::get('panneau/{id}', [PannauController::class,'show']);

Route::post('panneau', [PannauController::class,'store']);

Route::put('panneau/{id}', [PannauController::class,'update']);

Route::delete('panneau/{id}', [PannauController::class,'destroy']);
