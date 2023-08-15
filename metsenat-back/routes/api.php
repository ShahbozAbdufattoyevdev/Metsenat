<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MetsenatController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/homiy', [\App\Http\Controllers\MetsenatController::class, 'index']);
// Route::get('/homiy/{id}', [\App\Http\Controllers\MetsenatController::class, 'show']);

Route::resources([
    '/homiy' => \App\Http\Controllers\MetsenatController::class
]);

