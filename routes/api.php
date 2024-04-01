<?php

use App\Http\Controllers\ActividadController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/actividads', [AutorController::class, 'index']);
Route::get('/actividads/{id}', [AutorController::class, 'show']);
Route::post('/actividads', [AutorController::class, 'store']);
Route::put('/actividads/{id}', [AutorController::class, 'update']);
Route::delete('/actividads/{id}', [AutorController::class, 'destroy']);