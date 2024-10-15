<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramminglanguagesController;
use App\Http\Controllers\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
// Rutas públicas
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
// Rutas protegidas|
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});
Route::middleware('auth:sanctum')->group(function () {
    // Route::get('/programminglanguages', [ProgramminglanguagesController::class, 'index']);
    Route::apiResource('programminglanguages', ProgramminglanguagesController::class);
});
